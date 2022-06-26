<?php

namespace App\Http\Requests\UserManagement;
use App\Enum\TableHeadings\UserManagement\Province;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class ProvinceRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    public function rules()
    {
        return [
            'name' => 'required',
            'country_id' => 'required',
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
        return Province::create($this->all());
    }

    public function updateData($id)
    {
        return Province::findorFail($id)->update($this->all());

    }

    public function deleteData($id): bool
    {
        $model = Province::findorFail($id);
        if ($model) {
            $model->deleted_by = Auth::user()->id;
            $model->save();
            $model->delete();
        }

        return true;
    }
}
