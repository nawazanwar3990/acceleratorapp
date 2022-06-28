<?php

namespace App\Http\Requests\PackageManagement;
use App\Models\PackageManagement\Duration;
use App\Models\PackageManagement\Package;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

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

    public function createData() {
        return Duration::create($this->all());
    }

    public function updateData($id) {
        return Duration::findorFail($id)->update($this->all());
    }

    public function deleteData($id) {
        $model = Duration::findorFail($id);
        if ($model) {
            $model->deleted_by = Auth::user()->id;
            $model->save();
            $model->delete();
            return true;
        }

        return false;
    }
}
