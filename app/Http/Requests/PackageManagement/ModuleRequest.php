<?php

namespace App\Http\Requests\PackageManagement;
use App\Models\SubscriptionManagement\Package;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class ModuleRequest extends FormRequest
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
        return Package::create($this->all());
    }

    public function updateData($id) {
        return Package::findorFail($id)->update($this->all());
    }

    public function deleteData($id) {
        $model = Package::findorFail($id);
        if ($model) {
            $model->deleted_by = Auth::user()->id;
            $model->save();
            $model->delete();
            return true;
        }

        return false;
    }
}
