<?php

namespace App\Http\Requests\Authorization;

use App\Models\Authorization\User;
use App\Models\RealEstate\HumanResource\Hr;
use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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

    public function deleteData(User $user): ?bool
    {
        $hr = Hr::find($user->hr_id);
        $hr->user_id = null;
        $hr->save();
        $user->deleted_by = auth()->id();
        $user->save();
        return $user->delete();
    }
}
