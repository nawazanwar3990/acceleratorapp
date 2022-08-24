<?php

namespace App\Http\Requests;

use App\Models\Package;
use App\Models\PackageService;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
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
        if (count($services)) {
            $model->services()->detach();
            $service_names = $services['id'];
            for ($i = 0; $i < count($service_names); $i++) {
                $service_id = $services['id'][$i] ?? null;
                $limit = $services['limit'][$i] ?? null;
                $building_limit = $services['limit'][$i]['building_limit'] ?? null;
                $floor_limit = $services['limit'][$i]['floor_limit'] ?? null;
                $office_limit = $services['limit'][$i]['office_limit'] ?? null;
                $data = array();
                if (!is_array($limit)) {
                    $data['package_id'] = $model->id;
                    $data['service_id'] = $service_id;
                    $data['limit'] = $limit;
                } else {
                    $data['package_id'] = $model->id;
                    $data['limit'] = null;
                    $data['service_id'] = $service_id;
                    $data['building_limit'] = $building_limit;
                    $data['floor_limit'] = $floor_limit;
                    $data['office_limit'] = $office_limit;
                }
                PackageService::create($data);
            }
        }
    }
}
