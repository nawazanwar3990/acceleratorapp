<?php

namespace App\Http\Requests;

use App\Models\Package;
use App\Models\PackageService;
use App\Models\Service;
use Carbon\Carbon;
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
        $services = request()->input('services', array());
        if (count($services) > 0) {
            $model->services()->detach();
            $final_data = array();
            foreach ($services['limit'] as $service_slug => $service_value) {
                if ($service_slug == 'incubator') {
                    $building_limit = $service_value['building_limit'];
                    $floor_limit = $service_value['floor_limit'];
                    $office_limit = $service_value['office_limit'];
                    $final_data[] = [
                        'service_id' => Service::whereSlug($service_slug)->value('id'),
                        'package_id' => $model->id,
                        'limit' => '0',
                        'building_limit' => $building_limit ?? '0',
                        'floor_limit' => $floor_limit ?? '0',
                        'office_limit' => $office_limit ?? '0',
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now()
                    ];
                } else {
                    $final_data[] = [
                        'service_id' => Service::whereSlug($service_slug)->value('id'),
                        'package_id' => $model->id,
                        'limit' => $service_value??'0',
                        'building_limit' => '0',
                        'floor_limit' => '0',
                        'office_limit' => '0',
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now()
                    ];
                }
            }
            \App\Models\PackageService::insert($final_data);
        }

    }
}
