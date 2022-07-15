<?php

namespace App\Http\Requests\WorkingSpace;

use App\Enum\MediaTypeEnum;
use App\Models\Media;
use App\Models\WorkingSpace\Office;
use App\Services\GeneralService;
use App\Services\PersonService;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class OfficeRequest extends FormRequest
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
        $model = Office::create($this->all());
        if ($model) {
            $this->uploadMedia($model);
            $this->saveOwner($model);
            $this->savePlan($model);
        }
        return $model;
    }

    private function uploadMedia($model)
    {
        $documents = $this->file('documents', []);
        if (count($documents)) {
            foreach ($documents as $document) {
                $fileName = GeneralService::generateFileName($document);
                $path = 'uploads/offices/documents/' . $fileName;
                $document->move('uploads/offices/documents', $fileName);
                Media::create([
                    'filename' => $path,
                    'record_id' => $model->id,
                    'record_type' => MediaTypeEnum::OFFICE_DOCUMENT,
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
                $imagePath = 'uploads/offices/images/' . $imageName;
                $image->move('uploads/offices/images', $imageName);
                Media::create([
                    'filename' => $imagePath,
                    'record_id' => $model->id,
                    'record_type' => MediaTypeEnum::OFFICE_IMAGE,
                    'building_id' => $model->id,
                    'created_by' => Auth::id(),
                    'updated_by' => Auth::id()
                ]);
            }
        }
    }

    private function saveOwner($model)
    {
        $model->owners()->sync(PersonService::getCurrentHrId());
    }

    private function savePlan($model)
    {
        $plans = $this->input('plans', array());
        if (count($plans)) {
            $model->plans()->sync($plans);
        }
    }

    public function updateData($id)
    {
        return Office::findorFail($id)->update($this->all());

    }

    public function deleteData($id): bool
    {
        $model = Office::findorFail($id);
        if ($model) {
            $model->deleted_by = Auth::user()->id;
            $model->save();
            $model->delete();
        }
        return true;
    }
}
