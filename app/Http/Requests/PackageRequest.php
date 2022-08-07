<?php

namespace App\Http\Requests;

use App\Enum\TableEnum;
use App\Models\Package;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PackageRequest extends FormRequest
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
        $model = Package::create($this->all());
        $model->slug = Str::slug($model->name, '-');
        $model->created_by = Auth::id();
        $model->updated_by = Auth::id();
        if ($this->has('status')) {
            $model->status = true;
        } else {
            $model->status = false;
        }
        $model->save();
        $this->manageServices($model);
        return $model;
    }

    public function updateData($id)
    {
        $model = Package::findorFail($id);
        $model->update($this->all());
        if ($this->has('status')) {
            $model->status = true;
        } else {
            $model->status = false;
        }
        $model->updated_by = Auth::id();
        $model->save();
        $this->manageServices($model);
        return $model;
    }

    public function deleteData($id)
    {
        $model = Package::findorFail($id);
        if ($model) {
            $model->deleted_by = Auth::user()->id;
            $model->save();
            $model->delete();
            return true;
        }

        return false;
    }

    private function manageServices($model)
    {
        $services = $this->input('services', array());
        $new_array = [];
        if (count($services)) {
            $service_names = $services['name'];
            for ($i = 0; $i < count($service_names); $i++) {
                $service_name = $services['name'][$i];
                $limit = $services['limit'][$i];
                $new_array[$service_name] = $limit;
            }
        }
        $model->services = $new_array;
        $model->save();
    }
}
