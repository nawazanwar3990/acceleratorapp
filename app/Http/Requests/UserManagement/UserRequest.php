<?php

namespace App\Http\Requests\UserManagement;

use App\Enum\MethodEnum;
use App\Enum\TableEnum;
use App\Models\UserManagement\Hr;
use App\Models\UserManagement\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    public function rules()
    {
        if (in_array($this->method(), [
            MethodEnum::PUT,
            MethodEnum::POST
        ])) {
            if ($this->method() == MethodEnum::PUT) {
                $model_id = $this->get('model_id');
                return [
                    'email' => ['required', Rule::unique(TableEnum::USERS)->ignore($model_id)]
                ];
            } else {
                return [
                    'email' => ['required', Rule::unique(TableEnum::USERS)]
                ];
            }
        } else {
            return [];
        }
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
