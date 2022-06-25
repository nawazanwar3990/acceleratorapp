<?php

namespace App\Http\Requests\RealEstate\Accounts;

use App\Models\Accounts\AccountHead;
use App\Models\Accounts\Transaction;
use App\Models\Broker;
use App\Services\GeneralService;
use App\Services\RealEstate\BuildingService;
use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BrokerPaymentVoucherRequest extends FormRequest
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
            'broker_id' => 'required',
        ];
    }

    public function saveTransaction() {
        DB::beginTransaction();
        try {
            $brokerID = GeneralService::prepareForJson([$this->input('broker_id')]);
            $brokerAccount = Broker::whereBuildingId(BuildingService::getBuildingId())->where('hr_id', $this->input('broker_id'))->firstOrFail();
            $brokerAccountHead = AccountHead::whereBuildingId(BuildingService::getBuildingId())
                ->where('account_type', 'broker')->whereJsonContains('account_id', $brokerID)->first();

            //Brokery Income Head (400) Debit Transaction
            Transaction::create([
                'vNo' => $this->input('voucher_no'),
                'vType' => 'Brokery',
                'vDate' => Carbon::parse($this->input('date')),
                'COAID' => '400',
                'Credit' => 0,
                'Debit' => $this->input('amount'),
                'Narration' => 'Debit for Brokery Payment to <br><b>' . $brokerAccount->Hr->full_name . '</b>',
                'building_id' => BuildingService::getBuildingId(),
                'created_by' => Auth::user()->id,
                'updated_by' => Auth::user()->id,
            ]);

            //Cash in Hand Credit Transaction For Brokery Payment
            Transaction::create([
                'vNo' => $this->input('voucher_no'),
                'vType' => 'Brokery',
                'vDate' => Carbon::parse($this->input('date')),
                'COAID' => '1020101',
                'Credit' => $this->input('amount'),
                'Debit' => 0,
                'Narration' => 'Credit for Brokery Payment to <br><b>' . $brokerAccount->Hr->full_name . '</b><br>' . $this->input('remarks'),
                'building_id' => BuildingService::getBuildingId(),
                'created_by' => Auth::user()->id,
                'updated_by' => Auth::user()->id,
            ]);

            //Broker Account Debit Transaction
            $transaction = $brokerAccountHead->transactions()->save(
                new Transaction([
                    'vNo' => $this->input('voucher_no'),
                    'vType' => 'Brokery',
                    'vDate' => Carbon::parse($this->input('date')),
                    'COAID' => $brokerAccountHead->HeadCode,
                    'Credit' => 0,
                    'Debit' => $this->input('amount'),
                    'Narration' => 'Debit for Brokery Payment<br>' . $this->input('remarks'),
                    'building_id' => BuildingService::getBuildingId(),
                    'created_by' => Auth::user()->id,
                    'updated_by' => Auth::user()->id,
                ])
            );

            DB::commit();
            return $transaction;
        } catch (\Exception $e) {
            DB::rollback();
            dd($e);
        }
    }
}
