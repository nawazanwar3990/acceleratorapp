<?php

namespace App\Http\Requests\Accounts;

use App\Models\Accounts\AccountHead;
use App\Models\Accounts\Transaction;
use App\Models\Flat;
use App\Models\FlatOwner;
use App\Models\Sales\Installment;
use App\Models\Sales\Sale;
use App\Services\GeneralService;
use App\Services\RealEstate\BuildingService;
use App\Services\RealEstate\SalesService;
use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use function dd;

class BuyerInstallmentReceivingVoucherRequest extends FormRequest
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
            'sale_id' => 'required',
            'installment_id' => 'required',
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'penalty_amount' => Str::replace(',', '', $this->input('penalty_amount')),
        ]);
    }

    public function saveTransaction() {
        DB::beginTransaction();

        try {
            $flat = Flat::findorFail($this->input('flat_id'));
            $installmentRecord = Installment::findorFail($this->input('installment_id'));

            //Cash in Hand Debit Transactions for Paid Amount
            Transaction::create([
                'vNo' => $this->input('voucher_no'),
                'vType' => 'CR',
                'vDate' => Carbon::parse($this->input('date')),
                'COAID' => '1020101',
                'Credit' => 0,
                'Debit' => $this->input('amount'),
                'Narration' => 'Debit for Flat/Shop Installment Receiving, <br><b>Flat/Shop # ' . $flat->id . ' (' . $flat->flat_name . ')</b>',
                'building_id' => BuildingService::getBuildingId(),
                'flat_id' => $this->input('flat_id'),
                'created_by' => Auth::user()->id,
                'updated_by' => Auth::user()->id,
            ]);

            //Penalty Transactions
            if ($this->has('penalty_amount') && $this->input('penalty_amount') > 0) {
                if (($this->input('penalty_amount') - $this->input('penalty_waived_off_amount')) > 0) {
                    //Cash In Hand Debit Transaction for Penalty Amount
                    Transaction::create([
                        'vNo' => $this->input('voucher_no'),
                        'vType' => 'CR',
                        'vDate' => Carbon::parse($this->input('date')),
                        'COAID' => '1020101',
                        'Credit' => 0,
                        'Debit' => ($this->input('penalty_amount') - $this->input('penalty_waived_off_amount')),
                        'Narration' => 'Debit for Flat/Shop Penalty Receiving, <br><b>Flat/Shop # ' . $flat->id . ' (' . $flat->flat_name . ')</b>',
                        'building_id' => BuildingService::getBuildingId(),
                        'flat_id' => $this->input('flat_id'),
                        'created_by' => Auth::user()->id,
                        'updated_by' => Auth::user()->id,
                    ]);

                    //Penalty Income (314) Debit Transaction for Penalty Amount
                    Transaction::create([
                        'vNo' => $this->input('voucher_no'),
                        'vType' => 'CR',
                        'vDate' => Carbon::parse($this->input('date')),
                        'COAID' => '314',
                        'Credit' => 0,
                        'Debit' => ($this->input('penalty_amount') - $this->input('penalty_waived_off_amount')),
                        'Narration' => 'Debit for Flat/Shop Penalty Receiving, <br><b>Flat/Shop # ' . $flat->id . ' (' . $flat->flat_name . ')</b>',
                        'building_id' => BuildingService::getBuildingId(),
                        'flat_id' => $this->input('flat_id'),
                        'created_by' => Auth::user()->id,
                        'updated_by' => Auth::user()->id,
                    ]);
                }
            }

            //Buyer Credit Transaction For Paid Amount
            $buyers = FlatOwner::whereBuildingId(BuildingService::getBuildingId())
                ->where('flat_id', $this->input('flat_id'))->where('sale_id', $this->input('sale_id'))
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
                    'Narration' => 'Credit for Flat/Shop Installment Payment <br><b>Flat/Shop # ' . $flat->id . ' (' . $flat->flat_name . ')</b><br>' . $this->input('remarks'),
                    'building_id' => BuildingService::getBuildingId(),
                    'flat_id' => $this->input('flat_id'),
                    'created_by' => Auth::user()->id,
                    'updated_by' => Auth::user()->id,
                ])
            );

            //Buyer Penalty Credit Transactions
            if ($this->has('penalty_amount') && $this->input('penalty_amount') > 0) {
                if (($this->input('penalty_amount') - $this->input('penalty_waived_off_amount')) > 0) {
                    $accountHead->transactions()->save(
                        new Transaction([
                            'vNo' => $this->input('voucher_no'),
                            'vType' => 'CR',
                            'vDate' => Carbon::parse($this->input('date')),
                            'COAID' => $accountHead->HeadCode,
                            'Credit' => ($this->input('penalty_amount') - $this->input('penalty_waived_off_amount')),
                            'Debit' => 0,
                            'Narration' => 'Credit for Flat/Shop Installment Penalty <br><b>Flat/Shop # ' . $flat->id . ' (' . $flat->flat_name . ')</b><br>',
                            'building_id' => BuildingService::getBuildingId(),
                            'flat_id' => $this->input('flat_id'),
                            'created_by' => Auth::user()->id,
                            'updated_by' => Auth::user()->id,
                        ])
                    );
                }
            }

            $installmentRecord->paid_date = Carbon::parse($this->input('date'));
            $installmentRecord->paid_voucher_no = $this->input('voucher_no');
            $installmentRecord->status = 'paid';
            $installmentRecord->updated_by = Auth::user()->id;
            $installmentRecord->save();

            if (SalesService::salesRemainingAmount($installmentRecord->sale_id) <= 0) {
                $salesRecord = Sale::findorFail($installmentRecord->sale_id);
                $salesRecord->status = 'closed';
                $salesRecord->save();

                $flat->sales_status = 'sold';
                $flat->save();
            }

            DB::commit();
            return $installmentRecord;
        } catch (\Exception $e) {
            DB::rollback();
            dd($e);
        }
    }
}
