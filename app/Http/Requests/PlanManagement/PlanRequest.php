<?php

namespace App\Http\Requests\PlanManagement;

use App\Models\Sales\Plan;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class PlanRequest extends FormRequest
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

    public function createData() {
        return Plan::create($this->all());
    }

    public function updateData($id) {
        return Plan::findorFail($id)->update($this->all());
    }

    public function deleteData($id) {
        $model = Plan::findorFail($id);
        if ($model) {
            $model->deleted_by = Auth::user()->id;
            $model->save();
            $model->delete();
            return true;
        }

        return false;
    }
}