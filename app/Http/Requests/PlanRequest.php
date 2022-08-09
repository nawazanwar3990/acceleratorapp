<?php

namespace App\Http\Requests;

use App\Enum\ServiceTypeEnum;
use App\Models\Plan;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class PlanRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [

        ];
    }

    public function createData()
    {
        $model = Plan::create($this->all());
        if ($model) {
            $this->manageServices($model);
            return $model;
        }

    }

    public function updateData($id)
    {
        $model = Plan::find($id);
        $model->update($this->all());
        $model->services()->detach();
        $this->manageServices($model);
        return $model;
    }

    public function deleteData($id)
    {
        $model = Plan::findorFail($id);
        if ($model) {
            $model->deleted_by = Auth::user()->id;
            $model->save();
            $model->delete();
            return true;
        }
        return false;
    }

    private function manageServices($model)
    {
        $basic_services = $this->input('basic_services', array());
        if (count($basic_services) > 0) {
            $model->services()->attach($basic_services, ['type' => ServiceTypeEnum::BASIC]);
        }

        $additional_services = $this->input('additional_services', array());
        if (count($additional_services) > 0) {
            $model->services()->attach($additional_services, ['type' => ServiceTypeEnum::ADDITIONAL]);
        }
    }
}
