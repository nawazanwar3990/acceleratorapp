<?php

namespace App\Http\Requests;
use App\Models\OfficeType;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class OfficeTypeRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'name' => ['required'],
            'status' => 'boolean',
        ];
    }
    protected function prepareForValidation()
    {
        $this->merge([
            'status' => $this->boolean('status'),
        ]);
    }

    public function createData()
    {
        return OfficeType::create($this->all());
    }

    public function updateData($id)
    {
        return OfficeType::findorFail($id)->update($this->all());

    }

    public function deleteData($id)
    {
        $model = OfficeType::findorFail($id);
        if ($model) {
            $model->deleted_by = Auth::user()->id;
            $model->save();
            $model->delete();
        }
        return true;
    }
}
