<?php

namespace App\Http\Requests\UserManagement;

use App\Models\Users\District;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class DistrictRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    public function rules()
    {
        return [
            'name' => 'required',
            'province_id' => 'required',
            'status' => 'boolean',
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'status' => $this->boolean('status'),
        ]);
    }

    public function createData() {
        return District::create($this->all());
    }

    public function updateData($id)
    {
        return District::findorFail($id)->update($this->all());

    }

    public function deleteData($id): bool
    {
        $model = District::findorFail($id);
        if ($model) {
            $model->deleted_by = Auth::user()->id;
            $model->save();
            $model->delete();
        }

        return true;
    }
}
