<?php

namespace App\Http\Requests\PlanManagement;

use App\Enum\PlanForEnum;
use App\Models\PlanManagement\Plan;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class PlanRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'months' => 'required',
            'installment_duration' => 'required',
            'penalties' => 'boolean',
            'first_penalty' => 'boolean',
            'second_penalty' => 'boolean',
            'third_penalty' => 'boolean',
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'penalties' => $this->boolean('penalties'),
            'first_penalty' => $this->boolean('first_penalty'),
            'second_penalty' => $this->boolean('second_penalty'),
            'third_penalty' => $this->boolean('third_penalty'),
        ]);
    }

    public function createData()
    {
        $model = Plan::create($this->all());
        if ($model) {
            if ($model->plan_for == PlanForEnum::BUILDING) {
                $this->manageBuildings($model);
            } else if ($model->plan_for == PlanForEnum::FLOOR) {
                $this->manageFloors($model);
            } else if ($model->plan_for == PlanForEnum::FLAT) {
                $this->manageFlats($model);
            }
        }

    }

    public function updateData($id)
    {
        return Plan::findorFail($id)->update($this->all());
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

    private function manageBuildings($model)
    {
        $buildings = $this->input('buildings', array());
        if (count($buildings) > 0) {
            $model->buildings()->sync($buildings);
        }
    }

    private function manageFloors($model)
    {
        $floors = $this->input('floors', array());
        if (count($floors) > 0) {
            $model->floors()->sync($floors);
        }
    }

    private function manageFlats($model)
    {
        $flats = $this->input('flats', array());
        if (count($flats) > 0) {
            $model->flats()->sync($flats);
        }
    }
}
