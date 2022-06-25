<?php

namespace App\Http\Requests\FlatManagement;
use App\Models\FlatManagement\Flat;
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
        return Flat::create($this->all());
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
