<?php

namespace App\Http\Requests\Devices;

use App\Enum\MethodEnum;
use App\Enum\TableEnum;
use App\Models\Devices\Device;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class DeviceRequest extends FormRequest
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
                    'device_name' => ['required', Rule::unique(TableEnum::DEVICES)->ignore($model_id)]
                ];
            } else {
                return [
                    'device_name' => ['required', Rule::unique(TableEnum::DEVICES)]
                ];
            }
        } else {
            return [];
        }
    }

    public function createData()
    {
        return Device::create($this->all());
    }

    public function updateData($model)
    {
        $model->update(
            $this->all()
        );
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
