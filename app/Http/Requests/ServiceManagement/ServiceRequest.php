<?php

namespace App\Http\Requests\ServiceManagement;

use App\Models\ServiceManagement\Service;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ServiceRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'status' => 'boolean'
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
        $model = Service::create($this->all());
        $model->created_by = Auth::id();
        $model->slug = Str::slug($model->name, '') . "-" . $model->id;
        $model->save();
        return $model;
    }

    public function updateData($id)
    {
        $model = Service::findorFail($id);
        $model->update($this->all());
        $model->updated_by = Auth::id();
        $model->slug = Str::slug($model->name, '') . "-" . $model->id;
        $model->save();
        return $model;
    }

    public function deleteData($id): bool
    {
        $model = Service::findorFail($id);
        if ($model) {
            $model->deleted_by = Auth::user()->id;
            $model->save();
            $model->delete();
        }

        return true;
    }
}
