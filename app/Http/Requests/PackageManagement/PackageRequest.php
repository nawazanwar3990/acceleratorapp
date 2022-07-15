<?php

namespace App\Http\Requests\PackageManagement;

use App\Enum\TableEnum;
use App\Models\Subscriptions\Package;
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
        $model->created_by = \auth()->id();
        $model->updated_by = \auth()->id();
        $model->save();
        $this->manageModules($model);
        return $model;
    }

    public function updateData($id)
    {
        return Package::findorFail($id)->update($this->all());
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

    private function manageModules($model)
    {
        $modules = $this->input('module');
        if (count($modules)) {
            $module_ids = $modules['id'];
            for ($i = 0; $i < count($module_ids); $i++) {
                $module_id = $modules['id'][$i];
                $limit = $modules['limit'][$i];
                if ($limit!=''){
                    DB::table(TableEnum::PACKAGE_MODULE)->insert([
                        'package_id' => $model->id,
                        'module_id' => $module_id,
                        'limit' => $limit
                    ]);
                }
            }
        }
    }
}
