<?php

namespace App\Http\Requests\RealEstate\HumanResource;

use App\Models\RealEstate\HumanResource\Nominee;
use App\Models\RealEstate\HumanResource\NomineeVerification;
use App\Models\RealEstate\HumanResource\NomineeWitness;
use App\Models\RealEstate\Media;
use App\Services\RealEstate\BuildingService;
use App\Traits\General;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class NomineeRequest extends FormRequest
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
        $model = Nominee::create($this->all());
        if ($model) {
            $this->uploadMedia($model);
            $this->storeVerificationNominee($model);
            $this->storeWitnessNominee($model);
        }

        return $model;
    }

    public function storeVerificationNominee($model){
        foreach ($this->verified_hr_id as $verified_hr_id) {
            NomineeVerification::create([
                'nominee_id' => $model->id,
                'verified_hr_id' => $verified_hr_id,
                'created_by' => Auth::id(),
                'building_id' => BuildingService::getBuildingId(),
            ]);
        }
    }

    public function storeWitnessNominee($model){
        foreach ($this->witness_hr_id as $witness_hr_id) {
            NomineeWitness::create([
                'nominee_id' => $model->id,
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
                $path = 'uploads/nominee/documents/' . $fileName;

                $document->move('uploads/nominee/documents', $fileName);

                Media::create([
                    'filename' => $path,
                    'record_id' => $model->id,
                    'record_type' => 'nominee_document',
                    'building_id' => BuildingService::getBuildingId(),
                    'created_by' => Auth::user()->id,
                    'updated_by' => Auth::user()->id,
                ]);
            }
        }
    }

    public function updateData($id)
    {
        $model = Nominee::findorFail($id);
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
        NomineeVerification::whereNomineeId($model->id)->delete();
        foreach ($this->verified_hr_id as $verified_hr_id) {
            NomineeVerification::create([
                'nominee_id' => $model->id,
                'verified_hr_id' => $verified_hr_id,
                'created_by' => Auth::id(),
                'building_id' => BuildingService::getBuildingId(),
            ]);
        }
    }

    private function updateWitnessNominee($model)
    {
        NomineeWitness::whereNomineeId($model->id)->delete();
        foreach ($this->witness_hr_id as $witness_hr_id) {
            NomineeWitness::create([
                'nominee_id' => $model->id,
                'witness_hr_id' => $witness_hr_id,
                'created_by' => Auth::id(),
                'building_id' => BuildingService::getBuildingId(),
            ]);
        }
    }

    public function deleteData($id)
    {
        $model = Nominee::whereBuildingId(BuildingService::getBuildingId())->findorFail($id);
        if ($model) {
            $model->deleted_by = Auth::user()->id;
            $model->save();
            $model->delete();
        }
        return true;
    }
}
