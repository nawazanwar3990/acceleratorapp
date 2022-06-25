<?php

namespace App\Http\Requests\RealEstate\HumanResource;

use App\Enum\TableEnum;
use App\Models\HumanResource\Hr;
use App\Models\Media;
use App\Services\Accounts\VoucherService;
use App\Services\RealEstate\BuildingService;
use App\Traits\General;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Intervention\Image\Facades\Image;

class HrRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        if ($this->has('model_id')) {
            return [
                'first_name' => ['required'],
                'last_name' => ['required'],
                'email' => ['required', Rule::unique(TableEnum::USERS, 'email')
                    ->ignore($this->input('model_id'))],
                'cell_1' => ['required'],
            ];
        } else {
            return [
                'first_name' => ['required'],
                'last_name' => ['required'],
                'email' => ['required', Rule::unique(TableEnum::USERS, 'email')],
                'cell_1' => ['required'],
            ];
        }
    }

    public function createData() {
        $model = Hr::create($this->all());
        if ($model) {
            $this->uploadMedia($model);
            VoucherService::updateNumber('HR');
        }
        return $model;
    }

    public function updateData($id) {
        $model = Hr::whereBuildingId(BuildingService::getBuildingId())->findorFail($id)->update($this->all());
        if ($model) {
            $model = Hr::find($id);
            $this->uploadMedia($model);
        }
        return $model;
    }

    public function deleteData($id) {
        $model = Hr::findorFail($id);
        if ($model) {
            $model->deleted_by = Auth::user()->id;
            $model->save();
            $model->delete();
        }
        return true;
    }

    private function uploadMedia($hrModel) {
        //scanned document
        if ($this->file('scanned_document')) {
            $uploadedFile = $this->file('scanned_document');
            $fileName = General::generateFileName($uploadedFile);
            $path = 'uploads/HR/documents/' . $fileName;
            $uploadedFile->move('uploads/HR/documents', $fileName);
            Media::create([
                'filename' => $path,
                'record_id' => $hrModel->id,
                'record_type' => 'hr_document',
                'building_id' => BuildingService::getBuildingId(),
                'created_by' => Auth::user()->id,
                'updated_by' => Auth::user()->id,
            ]);
        }

        //signature
        if ($this->file('scanned_signature')) {
            $uploadedFile = $this->file('scanned_signature');
            $path = 'uploads/HR/signature/' . General::generateFileName($uploadedFile);
            Image::make($uploadedFile)->save($path);
            Media::create([
                'filename' => $path,
                'record_id' => $hrModel->id,
                'record_type' => 'hr_signature',
                'building_id' => BuildingService::getBuildingId(),
                'created_by' => Auth::user()->id,
                'updated_by' => Auth::user()->id,
            ]);
        }

        //images
        if ($this->file('first_image')) {
            $uploadedFile = $this->file('first_image');
            $path = 'uploads/HR/images/' . General::generateFileName($uploadedFile);
            Image::make($uploadedFile)->save($path);
            Media::create([
                'filename' => $path,
                'record_id' => $hrModel->id,
                'record_type' => 'hr_first_image',
                'building_id' => BuildingService::getBuildingId(),
                'created_by' => Auth::user()->id,
                'updated_by' => Auth::user()->id,
            ]);
        }
        if ($this->file('second_image')) {
            $uploadedFile = $this->file('second_image');
            $path = 'uploads/HR/images/' . General::generateFileName($uploadedFile);
            Image::make($uploadedFile)->save($path);
            Media::create([
                'filename' => $path,
                'record_id' => $hrModel->id,
                'record_type' => 'hr_second_image',
                'building_id' => BuildingService::getBuildingId(),
                'created_by' => Auth::user()->id,
                'updated_by' => Auth::user()->id,
            ]);
        }
        if ($this->file('third_image')) {
            $uploadedFile = $this->file('third_image');
            $path = 'uploads/HR/images/' . General::generateFileName($uploadedFile);
            Image::make($uploadedFile)->save($path);
            Media::create([
                'filename' => $path,
                'record_id' => $hrModel->id,
                'record_type' => 'hr_third_image',
                'building_id' => BuildingService::getBuildingId(),
                'created_by' => Auth::user()->id,
                'updated_by' => Auth::user()->id,
            ]);
        }
        if ($this->file('fourth_image')) {
            $uploadedFile = $this->file('fourth_image');
            $path = 'uploads/HR/images/' . General::generateFileName($uploadedFile);
            Image::make($uploadedFile)->save($path);
            Media::create([
                'filename' => $path,
                'record_id' => $hrModel->id,
                'record_type' => 'hr_fourth_image',
                'building_id' => BuildingService::getBuildingId(),
                'created_by' => Auth::user()->id,
                'updated_by' => Auth::user()->id,
            ]);
        }
    }
}
