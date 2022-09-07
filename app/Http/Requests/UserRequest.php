<?php

namespace App\Http\Requests;

use App\Enum\MethodEnum;
use App\Enum\RoleEnum;
use App\Enum\TableEnum;
use App\Models\Customer;
use App\Models\Role;
use App\Models\User;
use App\Models\VerifyUser;
use App\Notifications\VerifyEmailLink;
use App\Services\GeneralService;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use function auth;

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

    public function createCustomer(): Customer
    {
        $customer = new Customer();
        $customer->save();

        $first_name = $this->input('first_name');
        $last_name = $this->input('last_name');
        $email = $this->input('email');
        $security_question_name = $this->input('security_question_name');
        $security_question_value = $this->input('security_question_value');
        $know_about_us = $this->input('know_about_us');

        $user = new User();
        $user->first_name = $first_name;
        $user->last_name = $last_name;
        $user->email = $email;

        $password = $this->input('password');

        $user->normal_password = $password;
        $user->password = Hash::make($password);

        $user->security_question_name = $security_question_name;
        $user->security_question_value = $security_question_value;
        $user->know_about_us = $know_about_us;

        if ($user->save()) {
            $role = Role::whereSlug(RoleEnum::CUSTOMER)->value('id');
            $user->roles()->sync([$role]);
            $user->customer()->save($customer);
            GeneralService::saveLogo($customer, 'customer');
        }
        $token = sha1(time());
        VerifyUser::updateOrCreate([
            'user_id' => $user->id
        ], [
            'token' => $token
        ]);
        $user->notify(new VerifyEmailLink($token));
        return $customer;
    }
}
