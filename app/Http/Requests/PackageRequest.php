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
        $model->created_by = \auth()->id();
        $model->updated_by = \auth()->id();
        $model->types = json_encode($this->input('types',array()));
        $model->save();
        $this->manageServices($model);
        return $model;
    }

    public function updateData($id)
    {
        $model =  Package::findorFail($id);
        $model->update($this->all());
        $model->types = json_encode($this->input('types',array()));
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
        $model->services()->detach();
        $services = $this->input('services');
        if (count($services)) {
            $service_ids = $services['id'];
            for ($i = 0; $i < count($service_ids); $i++) {
                $service_id = $services['id'][$i];
                $limit = $services['limit'][$i];
                if ($limit!=''){
                    DB::table(TableEnum::PACKAGE_SERVICE)->insert([
                        'package_id' => $model->id,
                        'service_id' => $service_id,
                        'limit' => $limit
                    ]);
                }
            }
        }
    }
}
