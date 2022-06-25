<?php

namespace App\Http\Requests\Definition;

use App\Models\Definition\HumanResource\HrEmployeeType;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class HrEmployeeTypeRequest extends FormRequest
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
        ];
    }

    protected function prepareForValidation()
    {
        if (is_null($this->parent_id)) {
            $this->merge([
                'parent_id' => 0,
            ]);
        }
    }

    public function createData() {
        return HrEmployeeType::create($this->all());
    }

    public function updateData($id) {
        return HrEmployeeType::findorFail($id)->update($this->all());
    }

    public function deleteData($id): bool
    {
        $model = HrEmployeeType::findorFail($id);
        if ($model) {
            $model->deleted_by = Auth::user()->id;
            $model->save();
            $model->delete();
        }

        return true;
    }

}
