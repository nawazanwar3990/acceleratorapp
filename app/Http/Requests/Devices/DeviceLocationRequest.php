<?php

namespace App\Http\Requests\Devices;

use App\Enum\MethodEnum;
use App\Enum\TableEnum;
use App\Models\Devices\DeviceLocation;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class DeviceLocationRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules()
    {
        if (in_array($this->method(), [
            MethodEnum::PUT,
            MethodEnum::POST
        ])) {
            if ($this->method() == MethodEnum::PUT) {
                $model_id = $this->get('model_id');
                return [
                    'name' => ['required', Rule::unique(TableEnum::DEVICE_LOCATIONS)->ignore($model_id)]
                ];
            } else {
                return [
                    'name' => ['required', Rule::unique(TableEnum::DEVICE_LOCATIONS)]
                ];
            }
        } else {
            return [];
        }
    }

    public function createData()
    {
        $model = DeviceLocation::create($this->all());
        if ($model) {
            $model->slug = Str::slug($model->name, '-');
            $model->save();
        }
        return $model;
    }

    public function updateData($model)
    {
        $model->update(
            $this->all()
        );
        $model->slug = Str::slug($model->name, '-');
        $model->save();
        return $model;
    }

    public function deleteData($model)
    {
        $model->deleted_by = auth()->id();
        if ($model->save()){
            return $model->delete();
        }
    }
}
