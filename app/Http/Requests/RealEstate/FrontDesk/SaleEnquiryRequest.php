<?php

namespace App\Http\Requests\RealEstate\FrontDesk;

use App\Models\FrontDesk\SaleEnquiry;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class SaleEnquiryRequest extends FormRequest
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
            'name' => 'required',
        ];
    }

    public function  createData(){
        return SaleEnquiry::create($this->all());
    }

    public function updateData($id)
    {
        return SaleEnquiry::findorFail($id)->update($this->all());
    }

    public function deleteData($id): bool
    {
        $model = SaleEnquiry::findorFail($id);
        if ($model) {
            $model->deleted_by = Auth::user()->id;
            $model->save();
            $model->delete();
        }

        return true;
    }
}
