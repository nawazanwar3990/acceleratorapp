<?php

namespace App\Http\Requests\RealEstate\BuildingUnits;

use App\Models\Floor;
use App\Services\RealEstate\BuildingService;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class FloorRequest extends FormRequest
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
            'floor_name' => ['required'],
            'floor_number' => ['required'],
            'floor_type_id' => ['required'],
        ];
    }

    public function createData() {
        return Floor::create($this->all());
    }

    public function updateData($id) {
        Floor::whereBuildingId(BuildingService::getBuildingId())->findorFail($id)->update($this->all());
        return true;
    }

    public function deleteData($id) {
        $model = Floor::whereBuildingId(BuildingService::getBuildingId())->findorFail($id);
        if ($model) {
            $model->deleted_by = Auth::user()->id;
            $model->save();
            $model->delete();
        }

        return true;
    }
}
