<?php

namespace App\Http\Requests\WorkingSpace;
use App\Enum\MediaTypeEnum;
use App\Enum\ServiceTypeEnum;
use App\Models\Media;
use App\Models\WorkingSpace\Flat;
use App\Models\WorkingSpace\FlatService;
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
        $general = $this->input('general', []);
        if (count($general)>0){
            $general_count = count($general['id']);
            if ($general_count > 0) {
                for ($i = 0; $i < $general_count; $i++) {
                    $id = $general['id'][$i];
                    $price = $general['price'][$i];
                    FlatService::create([
                        'service_id' => $id,
                        'floor_id' => $model->id,
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
                    FlatService::create([
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
