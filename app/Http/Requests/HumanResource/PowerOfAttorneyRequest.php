<?php

namespace App\Http\Requests\HumanResource;

use App\Models\HumanResource\PowerOfAttorney;
use App\Models\HumanResource\PowerOfAttorneyVerification;
use App\Models\HumanResource\PowerOfAttorneyWitness;
use App\Models\Media;
use App\Services\RealEstate\BuildingService;
use App\Traits\General;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class PowerOfAttorneyRequest extends FormRequest
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
            //
        ];
    }

    public function createData()
    {
        $model = PowerOfAttorney::create($this->all());
        if ($model) {
            $this->uploadMedia($model);
            $this->storeVerificationPOA($model);
            $this->storeWitnessPOA($model);
        }

        return $model;
    }

    public function storeVerificationPOA($model){
        foreach ($this->verified_hr_id as $verified_hr_id) {
            PowerOfAttorneyVerification::create([
                'poa_id' => $model->id,
                'verified_hr_id' => $verified_hr_id,
                'created_by' => Auth::id(),
                'building_id' => BuildingService::getBuildingId(),
            ]);
        }
    }

    public function storeWitnessPOA($model){
        foreach ($this->witness_hr_id as $witness_hr_id) {
            PowerOfAttorneyWitness::create([
                'poa_id' => $model->id,
                'witness_hr_id' => $witness_hr_id,
                'created_by' => Auth::id(),
                'building_id' => BuildingService::getBuildingId(),
            ]);
        }
    }

    private function uploadMedia($model)
    {
        $documents = $this->file('documents', []);
        if (count($documents)) {
            foreach ($documents as $document) {
                $fileName = General::generateFileName($document);
                $path = 'uploads/poa/documents/' . $fileName;

                $document->move('uploads/poa/documents', $fileName);

                Media::create([
                    'filename' => $path,
                    'record_id' => $model->id,
                    'record_type' => 'poa_document',
                    'building_id' => BuildingService::getBuildingId(),
                    'created_by' => Auth::user()->id,
                    'updated_by' => Auth::user()->id,
                ]);
            }
        }
    }

    public function updateData($id)
    {
        $model = PowerOfAttorney::findorFail($id);
        $model->update($this->all());
        if ($model) {
            $this->uploadMedia($model);
            $this->updateVerificationNominee($model);
            $this->updateWitnessNominee($model);
        }
        return $model;
    }

    public function updateVerificationNominee($model)
    {
        PowerOfAttorneyVerification::wherePoaId($model->id)->delete();
        foreach ($this->verified_hr_id as $verified_hr_id) {
            PowerOfAttorneyVerification::create([
                'nominee_id' => $model->id,
                'verified_hr_id' => $verified_hr_id,
                'created_by' => Auth::id(),
                'building_id' => BuildingService::getBuildingId(),
            ]);
        }
    }

    private function updateWitnessNominee($model)
    {
        PowerOfAttorneyWitness::wherePoaId($model->id)->delete();
        foreach ($this->witness_hr_id as $witness_hr_id) {
            PowerOfAttorneyWitness::create([
                'nominee_id' => $model->id,
                'witness_hr_id' => $witness_hr_id,
                'created_by' => Auth::id(),
                'building_id' => BuildingService::getBuildingId(),
            ]);
        }
    }

    public function deleteData($id)
    {
        $model = PowerOfAttorney::findorFail($id);
        if ($model) {
            $model->deleted_by = Auth::user()->id;
            $model->save();
            $model->delete();
        }
        return true;
    }
}
