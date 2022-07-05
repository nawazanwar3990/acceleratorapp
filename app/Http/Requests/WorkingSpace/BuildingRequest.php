<?php

namespace App\Http\Requests\WorkingSpace;

use App\Enum\MediaTypeEnum;
use App\Enum\ServiceTypeEnum;
use App\Enum\TableEnum;
use App\Models\Media;
use App\Models\UserManagement\Hr;
use App\Models\WorkingSpace\Building;
use App\Models\WorkingSpace\BuildingService;
use App\Services\PersonService;
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

    private function uploadMedia($model)
    {
        $documents = $this->file('documents', []);
        if (count($documents)) {
            foreach ($documents as $document) {
                $fileName = GeneralService::generateFileName($document);
                $path = 'uploads/buildings/documents/' . $fileName;
                $document->move('uploads/buildings/documents', $fileName);
                Media::create([
                    'filename' => $path,
                    'record_id' => $model->id,
                    'record_type' => MediaTypeEnum::BUILDING_DOCUMENT,
                    'building_id' => $model->id,
                    'created_by' => Auth::id(),
                    'updated_by' => Auth::id()
                ]);
            }
        }

        $images = $this->file('images', []);
        if (count($images)) {
            foreach ($images as $image) {
                $imageName = GeneralService::generateFileName($image);
                $imagePath = 'uploads/buildings/images/' . $imageName;
                $image->move('uploads/buildings/images', $imageName);
                Media::create([
                    'filename' => $imagePath,
                    'record_id' => $model->id,
                    'record_type' => MediaTypeEnum::BUILDING_IMAGE,
                    'building_id' => $model->id,
                    'created_by' => Auth::id(),
                    'updated_by' => Auth::id()
                ]);
            }
        }
    }

    private function saveServices($model)
    {
        $general = $this->input('general', []);
        if (count($general)>0){
            $general_count = count($general['id']);
            if ($general_count > 0) {
                for ($i = 0; $i < $general_count; $i++) {
                    $id = $general['id'][$i];
                    $price = $general['price'][$i];
                    BuildingService::create([
                        'service_id' => $id,
                        'building_id' => $model->id,
                        'price' => $price,
                        'type' => ServiceTypeEnum::GENERAL_SERVICE,
                        'created_by' => Auth::id(),
                        'updated_by' => Auth::id()
                    ]);
                }
            }
        }
        $security = $this->input('security', []);
        if (count($security)>0) {
            $security_count = count($security['id']);
            if ($security_count > 0) {
                for ($i = 0; $i < $security_count; $i++) {
                    $id = $security['id'][$i];
                    $price = $security['price'][$i];
                    BuildingService::create([
                        'service_id' => $id,
                        'building_id' => $model->id,
                        'price' => $price,
                        'type' => ServiceTypeEnum::SECURITY_SERVICE,
                        'created_by' => Auth::id(),
                        'updated_by' => Auth::id()
                    ]);
                }
            }
        }
    }

    private function saveOwners($model)
    {
        $model->owners()->syncWithPivotValues(
            [PersonService::getCurrentHrId()],
            [
                'created_by' => Auth::id(),
                'updated_by' => Auth::id()
            ]
        );
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
