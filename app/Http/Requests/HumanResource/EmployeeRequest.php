<?php

namespace App\Http\Requests\HumanResource;

use App\Models\HumanResource\Employee;
use App\Services\RealEstate\EmployeeService;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class EmployeeRequest extends FormRequest
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
            'hr_id' => 'required',
            'department_id' => 'required',
            'designation_id' => 'required',
            'salary_type' => 'required',
            'salary' => 'required',
        ];
    }

    public function createData() {
        $model = Employee::create($this->all());
        if ($model) {
            EmployeeService::convertHrToEmployeeAccountHead($this->input('hr_id'));
        }

        return $model;
    }

    public function updateData() {
        return Employee::findOrFail($this->input('model_id'))->update($this->all());
    }

    public function deleteData($id) {
        $model = Employee::findorFail($id);
        if ($model) {
            $model->deleted_by = Auth::user()->id;
            $model->save();
            $model->delete();
        }
        return true;
    }
}
