<?php

namespace App\Http\Requests\Definition;

use App\Models\Definition\HumanResource\HrDesignation;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class HrDesignationRequest extends FormRequest
{
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
        return HrDesignation::create($this->all());
    }

    public function updateData($id)
    {
        return HrDesignation::findorFail($id)->update($this->all());

    }

    public function deleteData($id): bool
    {
        $model = HrDesignation::findorFail($id);
        if ($model) {
            $model->deleted_by = Auth::user()->id;
            $model->save();
            $model->delete();
        }

        return true;
    }
}
