<?php

namespace App\Http\Requests\RealEstate\FrontDesk\FrontDeskSetup;

use App\Models\RealEstate\FrontDesk\FrontDeskSetup\CallType;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class CallTypeRequest extends FormRequest
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
        return CallType::create($this->all());
    }

    public function updateData($id)
    {
        return CallType::findorFail($id)->update($this->all());
    }

    public function deleteData($id): bool
    {
        $model = CallType::findorFail($id);
        if ($model) {
            $model->deleted_by = Auth::user()->id;
            $model->save();
            $model->delete();
        }

        return true;
    }
}
