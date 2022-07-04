<?php

namespace App\Http\Requests\WorkingSpace;

use App\Enum\MediaTypeEnum;
use App\Enum\ServiceTypeEnum;
use App\Models\Media;
use App\Models\WorkingSpace\Floor;
use App\Models\WorkingSpace\FloorService;
use App\Services\GeneralService;
use App\Services\PersonService;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class FloorRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required',
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
        $model = Floor::create($this->all());
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
                $path = 'uploads/floors/documents/' . $fileName;
                $document->move('uploads/floors/documents', $fileName);
                Media::create([
                    'filename' => $path,
                    'record_id' => $model->id,
                    'record_type' => MediaTypeEnum::FLOOR_DOCUMENT,
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
                $imagePath = 'uploads/floors/images/' . $imageName;
                $image->move('uploads/floors/images', $imageName);
                Media::create([
                    'filename' => $imagePath,
                    'record_id' => $model->id,
                    'record_type' => MediaTypeEnum::FLOOR_IMAGE,
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
        $general_count = count($general['id']);
        if ($general_count > 0) {
            for ($i = 0; $i < $general_count; $i++) {
                $id = $general['id'][$i];
                $price = $general['price'][$i];
                FloorService::create([
                    'service_id' => $id,
                    'floor_id' => $model->id,
                    'price' => $price,
                    'type' => ServiceTypeEnum::GENERAL_SERVICE,
                    'created_by' => Auth::id(),
                    'updated_by' => Auth::id()
                ]);
            }
        }

        $security = $this->input('security', []);
        $security_count = count($security['id']);
        if ($security_count > 0) {
            for ($i = 0; $i < $security_count; $i++) {
                $id = $security['id'][$i];
                $price = $security['price'][$i];
                FloorService::create([
                    'service_id' => $id,
                    'floor_id' => $model->id,
                    'price' => $price,
                    'type' => ServiceTypeEnum::SECURITY_SERVICE,
                    'created_by' => Auth::id(),
                    'updated_by' => Auth::id()
                ]);
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
        return Floor::findorFail($id)->update($this->all());

    }

    public function deleteData($id): bool
    {
        $model = Floor::findorFail($id);
        if ($model) {
            $model->deleted_by = Auth::id();
            $model->save();
            $model->delete();
        }

        return true;
    }
}
