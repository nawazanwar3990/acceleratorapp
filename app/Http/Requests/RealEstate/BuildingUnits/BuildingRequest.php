<?php

namespace App\Http\Requests\RealEstate\BuildingUnits;

use App\Enum\TableEnum;
use App\Models\Building;
use App\Models\BuildingOwner;
use App\Models\BuildingServices;
use App\Models\HumanResource\Hr;
use App\Models\Media;
use App\Services\RealEstate\BuildingService;
use App\Services\SeederService;
use App\Traits\General;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class BuildingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
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

    public function createData() {
        $model = Building::create($this->all());
        if ($model) {
            $this->uploadMedia($model);
//            $this->saveServices($model);
//            $this->saveOwners($model);
            SeederService::runSeeder(SeederService::getPrefixSeeders($model->id), TableEnum::VOUCHER_PREFIXES);
        }
        return $model;
    }

    private function uploadMedia($buildingModel) {
        $documents = $this->file('documents', []);
        if (count($documents)) {
            foreach ($documents as $document) {
                $fileName = General::generateFileName($document);
                $path = 'uploads/buildings/documents/' . $fileName;

                $document->move('uploads/buildings/documents', $fileName);

                Media::create([
                    'filename' => $path,
                    'record_id' => $buildingModel->id,
                    'record_type' => 'building_document',
                    'building_id' => $buildingModel->id,
                    'created_by' => Auth::user()->id,
                    'updated_by' => Auth::user()->id,
                ]);
            }
        }

//        $images = $this->file('images');
//        if (count($images)) {
//            foreach ($images as $image) {
//                $path = 'uploads/buildings/images/' . General::generateFileName($image);
//                $photo = Image::make($image)->save($path);
//
//                Media::create([
//                    'filename' => $path,
//                    'record_id' => $buildingModel->id,
//                    'record_type' => 'building_image',
//                    'building_id' => $buildingModel->id,
//                    'created_by' => Auth::user()->id,
//                    'updated_by' => Auth::user()->id,
//                ]);
//            }
//        }

    }

    private function saveServices($buildingModel) {
        $services = $this->input('general_services', []);
        if (count($services)) {
            foreach ($services as $service) {
                BuildingServices::create([
                    'service_id' => $service,
                    'service_type' => 'general',
                    'building_id' => $buildingModel->id,
                    'created_by' => Auth::user()->id,
                    'updated_by' => Auth::user()->id,
                ]);
            }
        }
        $services = $this->input('security_services', []);
        if (count($services)) {
            foreach ($services as $service) {
                BuildingServices::create([
                    'service_id' => $service,
                    'service_type' => 'security',
                    'building_id' => $buildingModel->id,
                    'created_by' => Auth::user()->id,
                    'updated_by' => Auth::user()->id,
                ]);
            }
        }
    }

    private function saveOwners($buildingModel) {
        $owners = $this->input('owners', []);
        if (count($owners)) {
            foreach ($owners as $owner) {
                if (is_numeric($owner)) {
                    $hrRecord = Hr::find($owner);
                    if ($hrRecord) {
                        BuildingOwner::create([
                            'hr_id' => $hrRecord->id,
                            'building_id' => $buildingModel->id,
                            'created_by' => Auth::user()->id,
                            'updated_by' => Auth::user()->id,
                        ]);
                    }
                }
            }
        }
    }

    public function updateData($id)
    {
        return Building::findorFail($id)->update($this->all());

    }

    public function deleteData($id): bool
    {
        $model = Building::findorFail($id);
        if ($model) {
            $model->deleted_by = Auth::user()->id;
            $model->save();
            $model->delete();
        }

        return true;
    }
}
