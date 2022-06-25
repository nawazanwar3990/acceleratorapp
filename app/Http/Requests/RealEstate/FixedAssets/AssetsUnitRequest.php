<?php

namespace App\Http\Requests\RealEstate\FixedAssets;

use App\Models\FixedAssets\AssetsUnit;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class AssetsUnitRequest extends FormRequest
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
            'name'=>'required'
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'status' => $this->boolean('status'),
        ]);
    }

    public function createData() {
        return AssetsUnit::create($this->all());
    }

    public function updateData($id)
    {
        return AssetsUnit::findorFail($id)->update($this->all());

    }

    public function deleteData($id): bool
    {
        $model = AssetsUnit::findorFail($id);
        dd($model);
        if ($model) {
            $model->deleted_by = Auth::user()->id;
            $model->save();
            $model->delete();
        }

        return true;
    }
}
