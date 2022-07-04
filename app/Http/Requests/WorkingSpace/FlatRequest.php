<?php

namespace App\Http\Requests\WorkingSpace;
use App\Enum\MediaTypeEnum;
use App\Enum\ServiceTypeEnum;
use App\Models\Media;
use App\Models\WorkingSpace\Flat;
use App\Models\WorkingSpace\Floor;
use App\Services\GeneralService;
use App\Services\PersonService;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class FlatRequest extends FormRequest
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
        $model = Flat::create($this->all());
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
                $path = 'uploads/flats/documents/' . $fileName;
                $document->move('uploads/flats/documents', $fileName);
                Media::create([
                    'filename' => $path,
                    'record_id' => $model->id,
                    'record_type' => MediaTypeEnum::FLAT_DOCUMENT,
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
                $imagePath = 'uploads/flats/images/' . $imageName;
                $image->move('uploads/flats/images', $imageName);
                Media::create([
                    'filename' => $imagePath,
                    'record_id' => $model->id,
                    'record_type' => MediaTypeEnum::FLAT_IMAGE,
                    'building_id' => $model->id,
                    'created_by' => Auth::id(),
                    'updated_by' => Auth::id()
                ]);
            }
        }
    }

    private function saveServices($model)
    {
        $general_services = $this->input('general_services', []);
        if (count($general_services) > 0) {
            $model->services()->attach(
                $general_services,
                [
                    'created_by' => Auth::id(),
                    'updated_by' => Auth::id(),
                    'type' => ServiceTypeEnum::GENERAL_SERVICE
                ]
            );
        }
        $security_services = $this->input('security_services', []);
        if (count($security_services) > 0) {
            $model->services()->attach(
                $security_services,
                [
                    'created_by' => Auth::id(),
                    'updated_by' => Auth::id(),
                    'type' => ServiceTypeEnum::SECURITY_SERVICE
                ]
            );
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
        return Flat::findorFail($id)->update($this->all());

    }

    public function deleteData($id): bool
    {
        $model = Flat::findorFail($id);
        if ($model) {
            $model->deleted_by = Auth::user()->id;
            $model->save();
            $model->delete();
        }
        return true;
    }
}
