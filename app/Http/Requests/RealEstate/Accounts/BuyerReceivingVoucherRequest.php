<?php

namespace App\Http\Requests\RealEstate\Accounts;

use App\Models\Accounts\AccountHead;
use App\Models\Accounts\Transaction;
use App\Models\Flat;
use App\Models\FlatOwner;
use App\Models\Sales\Sale;
use App\Services\GeneralService;
use App\Services\RealEstate\BuildingService;
use App\Services\RealEstate\SalesService;
use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BuyerReceivingVoucherRequest extends FormRequest
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
            'date' => 'required',
            'amount' => 'required',
            'flat_id' => 'required',
            'sales_id' => 'required',
        ];
    }

    public function saveTransaction() {
        DB::beginTransaction();

        try {
            $flatID = $this->input('flat_id');
            $flat = Flat::whereBuildingId(BuildingService::getBuildingId())->findorFail($flatID);

            //Cash in Hand Debit Transactions for Paid Amount
            Transaction::create([
                'vNo' => $this->input('voucher_no'),
                'vType' => 'CR',
                'vDate' => Carbon::parse($this->input('date')),
                'COAID' => '1020101',
                'Credit' => 0,
                'Debit' => $this->input('amount'),
                'Narration' => 'Debit for Flat/Shop Receiving, <br><b>Flat/Shop # ' . $flat->id . ' (' . $flat->flat_name . ')</b>',
                'building_id' => BuildingService::getBuildingId(),
                'flat_id' => $this->input('flat_id'),
                'created_by' => Auth::user()->id,
                'updated_by' => Auth::user()->id,
            ]);

            //Buyer Credit Transaction For Paid Amount
            $buyers = FlatOwner::whereBuildingId(BuildingService::getBuildingId())
                ->where('flat_id', $this->input('flat_id'))->where('sale_id', $this->input('sales_id'))
                ->where('status', true)->pluck('hr_id')->toArray();

            $buyers = GeneralService::prepareForJson($buyers);

            $accountHead = AccountHead::whereBuildingId(BuildingService::getBuildingId())
                ->where('account_type', 'SP')->where('PHeadName', 'Account Payable')
                ->whereJsonContains('account_id', $buyers)->first();

            $accountHead->transactions()->save(
                new Transaction([
                    'vNo' => $this->input('voucher_no'),
                    'vType' => 'CR',
                    'vDate' => Carbon::parse($this->input('date')),
                    'COAID' => $accountHead->HeadCode,
                    'Credit' => $this->input('amount'),
                    'Debit' => 0,
                    'Narration' => 'Credit for Flat/Shop Payment <br><b>Flat/Shop # ' . $flat->id . ' (' . $flat->flat_name . ')</b><br>' . $this->input('remarks'),
                    'building_id' => BuildingService::getBuildingId(),
                    'flat_id' => $this->input('flat_id'),
                    'created_by' => Auth::user()->id,
                    'updated_by' => Auth::user()->id,
                ])
            );


            if (SalesService::salesRemainingAmount($this->input('sales_id')) <= 0) {
                $salesRecord = Sale::whereBuildingId(BuildingService::getBuildingId())->findorFail($this->input('sales_id'));
                $salesRecord->status = 'closed';
                $salesRecord->save();

                $flat->sales_status = 'sold';
                $flat->save();
            }

            DB::commit();
            return true;
        } catch (\Exception $e) {
            DB::rollback();
            dd($e);
        }
    }
}
