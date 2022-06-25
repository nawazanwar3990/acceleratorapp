<?php

namespace App\Http\Requests\PlanManagement;

use App\Models\Sales\InstallmentTerm;
use Illuminate\Foundation\Http\FormRequest;

class TermRequest extends FormRequest
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

    public function createData() {
        InstallmentTerm::where('id','>',0)->delete();
        return InstallmentTerm::create($this->all());
    }
}
