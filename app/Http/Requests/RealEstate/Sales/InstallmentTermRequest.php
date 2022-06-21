<?php

namespace App\Http\Requests\RealEstate\Sales;

use App\Models\RealEstate\Sales\InstallmentTerm;
use App\Services\RealEstate\BuildingService;
use Illuminate\Foundation\Http\FormRequest;

class InstallmentTermRequest extends FormRequest
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
        InstallmentTerm::whereBuildingId(BuildingService::getBuildingId())->where('id','>',0)->delete();
        return InstallmentTerm::create($this->all());
    }
}
