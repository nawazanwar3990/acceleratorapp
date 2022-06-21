<?php

namespace App\Http\Requests\RealEstate\FixedAssets;

use App\Models\RealEstate\FixedAssets\AssetsInventory;
use App\Models\RealEstate\Media;
use App\Services\RealEstate\BuildingService;
use App\Traits\General;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class AssetsInventoryRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'asset_code' => 'required',
            'asset_name' => 'required',
            'quantity' => 'integer|min:1|nullable',
        ];
    }

    public function createData()
    {
        $model = AssetsInventory::create($this->all());;
        if ($model) {
            $this->uploadMedia($model);
        }
        return true;
    }

    public function updateData($id)
    {
        $model = AssetsInventory::findorFail($id);
        if ($model){
            $this->UpdateUploadMedia($model);
            $model->update($this->all());
        }
        return true;
    }

    public function deleteData($id): bool
    {
        $model = AssetsInventory::findorFail($id);
        if ($model) {
            $model->deleted_by = Auth::user()->id;
            $model->save();
            $model->delete();
        }

        return true;
    }

    private function uploadMedia($model)
    {
        $documents = $this->file('documents', []);
        if (count($documents)) {
            foreach ($documents as $document) {
                $fileName = General::generateFileName($document);
                $path = 'uploads/fixed-assets/documents/' . $fileName;

                $document->move('uploads/fixed-assets/documents', $fileName);

                Media::create([
                    'filename' => $path,
                    'record_id' => $model->id,
                    'record_type' => 'fixed_assets',
                    'building_id' => BuildingService::getBuildingId(),
                    'created_by' => Auth::user()->id,
                    'updated_by' => Auth::user()->id,
                ]);
            }
        }
    }

    private function UpdateUploadMedia($model)
    {
        $deleteData = Media::where('record_type','fixed_assets')->where('record_id',$model->id)->delete();
        $documents = $this->file('documents', []);
        if (count($documents) || $deleteData) {
            foreach ($documents as $document) {
                $fileName = General::generateFileName($document);
                $path = 'uploads/fixed-assets/documents/' . $fileName;

                $document->move('uploads/fixed-assets/documents', $fileName);

                Media::create([
                    'filename' => $path,
                    'record_id' => $model->id,
                    'record_type' => 'fixed_assets',
                    'building_id' => BuildingService::getBuildingId(),
                    'created_by' => Auth::user()->id,
                    'updated_by' => Auth::user()->id,
                ]);
            }
        }
    }
}
