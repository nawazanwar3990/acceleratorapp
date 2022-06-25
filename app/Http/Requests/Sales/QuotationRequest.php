<?php

namespace App\Http\Requests\Sales;

use App\Models\Sales\Quotation;
use App\Models\Sales\QuotationInstallment;
use App\Services\BuildingService;
use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class QuotationRequest extends FormRequest
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
            'quot_no' => 'required',
            'date' => 'required',
            'floor_id' => 'required',
            'flat_id' => 'required',
            'installment_plan_id' => 'required',
            'customer_name' => 'required',
            'customer_contact' => 'required',
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'payment_amount' => Str::replace(',', '', $this->input('payment_amount')),
            'installment_amount' => Str::replace(',', '', $this->input('installment_amount')),
        ]);
    }

    public function createData() {
        $model = Quotation::create($this->all());
        if ($model) {
            $this->generateInstallments($model);
        }

        return $model;
    }

    private function generateInstallments($quotationModel) {
        if ($this->input('payment_method') != '2') {
            return false;
        }

        $installmentDetails = $this->input('installment', []);
        if (count($installmentDetails['no']) > 0) {
            foreach ($installmentDetails['no'] as $key => $value) {
                $installmentNo = $installmentDetails['no'][$key];
                $installmentDate = $installmentDetails['date'][$key];
                $installmentAmount = Str::replace(',', '', $installmentDetails['amount'][$key]);

                QuotationInstallment::create([
                    'flat_id' => $quotationModel->flat->id,
                    'quotation_id' => $quotationModel->id,
                    'installment_plan_id' => $this->input('installment_plan_id'),
                    'installment_no' => $installmentNo,
                    'installment_date' => Carbon::parse($installmentDate),
                    'installment_amount' => Str::replace(',', '', $installmentAmount),
                    'created_by' => Auth::user()->id,
                    'updated_by' => Auth::user()->id,
                    'building_id' => BuildingService::getBuildingId(),
                ]);
            }
        }

        return true;
    }
}
