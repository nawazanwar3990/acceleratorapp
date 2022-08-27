<?php

namespace App\Http\Requests\CMS;

use App\Enum\MethodEnum;
use App\Enum\TableEnum;
use App\Models\CMS\Layout;
use App\Models\CMS\Menu;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class LayoutRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    public function rules(): array
    {
        if (
            $this->isMethod(MethodEnum::POST)
            ||
            $this->isMethod(MethodEnum::PUT)
        ) {
            $edit_id = $this->model;
            if (isset($edit_id)) {
                $data['name'] = ['required', Rule::unique(TableEnum::CMS_LAYOUTS)->ignore($edit_id)];
            } else {
                $data['name'] = ['required', Rule::unique(TableEnum::CMS_LAYOUTS)];
            }
            return $data;
        } else {
            return array();
        }
    }

    public function createData()
    {
        return Layout::create($this->all());
    }

    public function updateData($model)
    {
        return $model->update($this->all());
    }

    public function deleteData($model)
    {
        $model->deleted_by = Auth::id();
        $model->save();
        $model->delete();
    }
}
