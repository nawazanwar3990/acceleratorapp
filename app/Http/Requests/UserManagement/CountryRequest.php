<?php

namespace App\Http\Requests\UserManagement;
use App\Models\UserManagement\Country;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class CountryRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    public function rules()
    {
        return [
            'name' => 'required',
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
        return Country::create($this->all());
    }

    public function updateData($id)
    {
        return Country::findorFail($id)->update($this->all());
    }

    public function deleteData($id): bool
    {
        $model = Country::findorFail($id);
        if ($model) {
            $model->deleted_by = Auth::user()->id;
            $model->save();
            $model->delete();
        }

        return true;
    }
}
