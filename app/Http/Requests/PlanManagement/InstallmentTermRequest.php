<?php

namespace App\Http\Requests\PlanManagement;
use App\Models\PlanManagement\InstallmentTerm;
use Illuminate\Foundation\Http\FormRequest;

class InstallmentTermRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    public function rules()
    {
        return [
        ];
    }

    public function createData() {
        InstallmentTerm::where('id','>',0)->delete();
        return InstallmentTerm::create($this->all());
    }
}
