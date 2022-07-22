<?php

namespace App\Http\Requests\PackageManagement;

use App\Models\Duration;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class DurationRequest extends FormRequest
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
        $model = Duration::create($this->all());
        $model->slug = Str::slug($model->name, '-');
        $model->created_by = \auth()->id();
        $model->save();
        return $model;
    }

    public function updateData($id)
    {
        $model = Duration::findorFail($id);
        $model->update($this->all());
        $model->slug = Str::slug($model->name, '-');
        $model->updated_by = \auth()->id();
        $model->save();
        return $model;
    }

    public function deleteData($id): bool
    {
        $model = Duration::findorFail($id);
        if ($model) {
            $model->deleted_by = \auth()->id();
            $model->save();
            $model->delete();
            return true;
        }

        return false;
    }
}
