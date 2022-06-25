<?php

namespace App\Http\Requests\RealEstate\BuildingUnits;

use App\Models\Accounts\AccountHead;
use App\Models\Accounts\Transaction;
use App\Models\Flat;
use App\Models\FlatOwner;
use App\Services\Accounts\VoucherService;
use App\Services\RealEstate\BuildingService;
use App\Services\RealEstate\SellerService;
use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class FlatRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'floor_id' => 'required',
            'flat_name' => 'required',
            'length' => 'required',
            'width' => 'required',
            'furnished' => 'boolean',
        ];
    }

    protected function prepareForValidation()
    {
        if ($this->has('model_id')) {
            $this->merge([
                'furnished' => $this->boolean('furnished'),
                'total_amount' => Str::replace(',', '', $this->input('total_amount')),
            ]);
        } else {
            $this->merge([
                'furnished' => $this->boolean('furnished'),
                'purchase_price' => Str::replace(',', '', $this->input('purchase_price')),
                'total_amount' => Str::replace(',', '', $this->input('total_amount')),
            ]);
        }
    }

    public function createData() {
        $model = Flat::create($this->all());
        if ($model) {
            $this->saveOwners($model);
            $this->saveTransacions($model);
        }

        return $model;
    }

    public function updateData($id)
    {
        return Flat::whereBuildingId(BuildingService::getBuildingId())
            ->findorFail($id)->update($this->all());
    }

    public function deleteData($id)
    {
        $model = Flat::whereBuildingId(BuildingService::getBuildingId())->findorFail($id);
        if ($model) {
            $model->deleted_by = Auth::user()->id;
            $model->save();
            $model->delete();
        }
        return true;
    }

    private function saveOwners($flatModel) {
        $flatModel->owners()->delete();
        $owners = $this->input('owners', []);
        $ownerPercentage = $this->input('ownerShare', []);

        if (count($owners)) {
            foreach ($owners as $key => $owner) {
                $flatModel->owners()->save(
                    new FlatOwner([
                        'hr_id' => $owner,
                        'flat_id' => $flatModel->id,
                        'percentage' => $ownerPercentage[$key],
                        'status' => true,
                        'building_id' => BuildingService::getBuildingId(),
                    ])
                );


            }
            SellerService::convertHrToSellerAccountHead($owners);
        }
    }

    private function saveTransacions($flatModel) {

        $accountHead = AccountHead::where('HeadCode', '402')->first();
        $accountHead->transactions()->save(
            new Transaction([
                'vNo' => VoucherService::getNextVoucherNo('Purchase'),
                'vType' => 'Purchase',
                'vDate' => Carbon::today(),
                'COAID' => $accountHead->HeadCode,
                'Credit' => 0,
                'Debit' => $this->input('purchase_price'),
                'Narration' => 'Debit for Flat/Shop Initial Purchase, <br><b>Flat/Shop # ' . $flatModel->id . ' (' . $flatModel->flat_name . ')</b>',
                'building_id' => BuildingService::getBuildingId(),
                'flat_id' => $flatModel->id,
                'created_by' => Auth::user()->id,
                'updated_by' => Auth::user()->id,
            ])
        );

        VoucherService::updateNumber('Purchase');
    }
}
