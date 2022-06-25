<?php

namespace App\Http\Requests\FrontDesk\FrontDeskSetup;

use App\Models\FrontDesk\FrontDeskSetup\Purpose;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class PurposeRequest extends FormRequest
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
        return Purpose::create($this->all());
    }

    public function updateData($id)
    {
        return Purpose::findorFail($id)->update($this->all());
    }

    public function deleteData($id): bool
    {
        $model = Purpose::findorFail($id);
        if ($model) {
            $model->deleted_by = Auth::user()->id;
            $model->save();
            $model->delete();
        }

        return true;
    }
}
