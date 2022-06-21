<?php

namespace App\Http\Requests\RealEstate\Accounts;

use App\Models\Accounts\Transaction;
use App\Services\Accounts\AccountsService;
use App\Services\Accounts\VoucherService;
use App\Services\RealEstate\BuildingService;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class CreditVoucherRequest extends FormRequest
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
            //
        ];
    }

    public function saveTransaction() {
        $creditAccounts = $this->input('headCode');
        $Narrations = $this->input('narration');
        $debitAccountHead = $this->input('payment_account');
        $creditAmounts = $this->input('amount');

        foreach($creditAccounts as $key => $value) {
            $headCode = $value;
            $amount = $creditAmounts[$key];
            $narration = $Narrations[$key];

            //Debit Insert
            Transaction::create([
                'vNo' => $this->input('voucher_no'),
                'vType' => 'CV',
                'vDate' => $this->input('date'),
                'COAID' => $headCode,
                'Narration' => $narration,
                'Debit' => 0,
                'Credit' => $amount,
                'is_posted' => 1,
                'is_opening' => 1,
                'created_by' => Auth::user()->id,
                'is_approve' => 1,
                'building_id' => BuildingService::getBuildingId(),
            ]);

            $headName = AccountsService::getHeadName($headCode);

            //payment account Credit
            $transaction = Transaction::create([
                'vNo' => $this->input('voucher_no'),
                'vType' => 'CV',
                'vDate' => $this->input('date'),
                'COAID' => $debitAccountHead,
                'Narration' => 'Credit voucher from ' . $headName,
                'Debit' => $amount,
                'Credit' => 0,
                'is_posted' => 0,
                'is_opening' => 1,
                'created_by' => auth()->user()->id,
                'is_approve' => 1,
                'building_id' => BuildingService::getBuildingId(),
            ]);

        }
        VoucherService::updateNumber('CV');

        return $transaction;
    }
}
