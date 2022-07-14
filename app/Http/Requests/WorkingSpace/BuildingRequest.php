<?php

namespace App\Http\Requests\WorkingSpace;

use App\Enum\MediaTypeEnum;
use App\Models\Media;
use App\Models\WorkingSpace\Building;
use App\Models\WorkingSpace\Floor;
use App\Services\PersonService;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class BuildingRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required']
        ];
    }

    public function createData()
    {
        $model = Building::create($this->all());
        if ($model) {
            $this->uploadMedia($model);
            $this->saveOwners($model);
            $this->manageFloors($model);
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


    private function saveOwners($model)
    {
        $model->owners()->sync([PersonService::getCurrentHrId()]);
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

    private function manageFloors($model)
    {
        $floors = $this->input('floor', array());
        if (count($floors) > 0) {
            $count = count($floors['name']);
            if ($count > 0) {
                for ($i = 0; $i < $count; $i++) {
                    $name = $floors['name'][$i];
                    $number = $floors['number'][$i];
                    $no_of_offices = $floors['no_of_offices'][$i];
                    Floor::create(
                        [
                            'building_id' => $model->id,
                            'name' => $name,
                            'number' => $number,
                            'no_of_offices' => $no_of_offices
                        ]
                    );
                }
            }
        }
    }
}
