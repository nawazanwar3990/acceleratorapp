<?php

namespace App\Http\Requests\Authorization;
use App\Enum\TableEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PersonRequest extends FormRequest
{
    public function authorize(): bool
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
}
