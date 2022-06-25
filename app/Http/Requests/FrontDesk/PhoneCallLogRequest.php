<?php

namespace App\Http\Requests\FrontDesk;

use App\Models\FrontDesk\PhoneCallLog;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class PhoneCallLogRequest extends FormRequest
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
            'name' => 'required',
        ];
    }

    public function  createData(){
        return PhoneCallLog::create($this->all());
    }

    public function updateData($id)
    {
        return PhoneCallLog::findorFail($id)->update($this->all());
    }

    public function deleteData($id): bool
    {
        $model = PhoneCallLog::findorFail($id);
        if ($model) {
            $model->deleted_by = Auth::user()->id;
            $model->save();
            $model->delete();
        }

        return true;
    }
}
