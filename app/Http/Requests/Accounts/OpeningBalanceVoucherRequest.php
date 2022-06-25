<?php

namespace App\Http\Requests\Accounts;

use App\Models\Accounts\Transaction;
use App\Services\Accounts\VoucherService;
use App\Services\RealEstate\BuildingService;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class OpeningBalanceVoucherRequest extends FormRequest
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
        $transaction = Transaction::create([
            'vNo'            => $this->input('voucher_no'),
            'vType'          => 'Opening',
            'vDate'          => $this->input('date'),
            'COAID'          => $this->input('account_head'),
            'Narration'      => 'Opening Balance<br>' . $this->input('remarks'),
            'Debit'          => $this->input('amount'),
            'Credit'         => 0,
            'is_posted'      => 1,
            'is_opening'     => 1,
            'created_by'     => Auth::user()->id,
            'is_approve'     => 1,
            'building_id'    => BuildingService::getBuildingId(),
        ]);

        VoucherService::updateNumber('Opening');
        return $transaction;
    }
}
