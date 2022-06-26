<?php

namespace App\Http\Requests\UserManagement;

use App\Models\UserManagement\HrProfession;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class HrProfessionRequest extends FormRequest
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
        return HrProfession::create($this->all());
    }

    public function updateData($id)
    {
        return HrProfession::findorFail($id)->update($this->all());

    }

    public function deleteData($id): bool
    {
        $model = HrProfession::findorFail($id);
        if ($model) {
            $model->deleted_by = Auth::user()->id;
            $model->save();
            $model->delete();
        }

        return true;
    }
}
