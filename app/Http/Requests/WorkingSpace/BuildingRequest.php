<?php

namespace App\Http\Requests\WorkingSpace;

use App\Enum\TableEnum;
use App\Models\Media;
use App\Models\UserManagement\Hr;
use App\Models\WorkingSpace\Building;
use App\Services\GeneralService;
use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BuildingRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required'],
            'area' => ['required'],
            'length' => ['required'],
            'width' => ['required'],
            'building_corners' => ['required'],
            'building_type' => ['required'],
            'property_type' => ['required'],
            'entry_gates' => ['required'],
            'no_of_floors' => ['required'],
            'facing' => ['required'],
            'status' => 'boolean',
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'status' => $this->boolean('status'),
        ]);
    }

    public function createData()
    {
        $model = Building::create($this->all());
        if ($model) {
            $this->uploadMedia($model);
            $this->saveServices($model);
            $this->saveOwners($model);
        }
        return $model;
    }

    private function uploadMedia($buildingModel)
    {
        $documents = $this->file('documents', []);
        if (count($documents)) {
            foreach ($documents as $document) {
                $fileName = GeneralService::generateFileName($document);
                $path = 'uploads/buildings/documents/' . $fileName;
                $document->move('uploads/buildings/documents', $fileName);
                Media::create([
                    'filename' => $path,
                    'record_id' => $buildingModel->id,
                    'record_type' => 'building_document',
                    'building_id' => $buildingModel->id,
                    'created_by' => Auth::id(),
                    'updated_by' => Auth::id()
                ]);
            }
        }
    }

    private function saveServices($buildingModel)
    {
        $services = $this->input('general_services', []);
        if (count($services)) {
            foreach ($services as $service) {
                DB::table(TableEnum::BUILDING_SERVICE)->insert([
                    'service_id' => $service,
                    'service_type' => 'general',
                    'building_id' => $buildingModel->id,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ]);
            }
        }
        $services = $this->input('security_services', []);
        if (count($services)) {
            foreach ($services as $service) {
                DB::table(TableEnum::BUILDING_SERVICE)->insert([
                    'service_id' => $service,
                    'service_type' => 'security',
                    'building_id' => $buildingModel->id,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ]);
            }
        }
    }

    private function saveOwners($buildingModel)
    {
        $user_id = \auth()->user()->hr_id;
        DB::table(TableEnum::BUILDING_OWNER)->insert([
            'hr_id' => $user_id,
            'building_id' => $buildingModel->id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }

    public function updateData($id)
    {
        return Building::findorFail($id)->update($this->all());

    }

    public function deleteData($id): bool
    {
        $model = Building::find($id);
        if ($model) {
            $model->deleted_by = Auth::id();
            $model->save();
            $model->delete();
        }
        return true;
    }
}
