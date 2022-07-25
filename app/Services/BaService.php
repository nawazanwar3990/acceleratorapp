<?php

namespace App\Services;

use App\Enum\AcceleratorTypeEnum;
use App\Enum\RoleEnum;
use App\Enum\SubscriptionTypeEnum;
use App\Models\BA;
use App\Models\Package;
use App\Models\Subscription;
use App\Models\User;
use App\Services\RoleService;
use Carbon\Carbon;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;

class BaService
{
    public function __construct(
        private RoleService $roleService
    )
    {
    }

    public function saveStep1($type): BA
    {
        $model = new BA();
        $model->type = $type;
        $model->save();
        return $model;
    }

    public function saveStep2($type, $model)
    {
        if ($type == AcceleratorTypeEnum::COMPANY) {
            $model->company_name = request()->input('company_name', null);
            $model->is_register_company = request()->input('is_register_company', null);
            $model->company_no_of_emp = request()->input('company_no_of_emp', null);
            $model->company_rate_of_initiation = request()->input('company_rate_of_initiation', null);
            $model->company_contact_no = request()->input('company_contact_no', null);
            $model->company_email = request()->input('company_email', null);
            $model->company_address = request()->input('company_address', null);
            if ($model->save()) {
                if ($model->is_register_company == 'yes') {
                    $company_institutes = request()->input('company_institutes', array());
                    $model->company_institutes = json_encode($company_institutes);
                    $model->save();
                }
                return $model;
            }
        }
        return $model;
    }

    public function saveStep3($type, $model)
    {
        if ($type == AcceleratorTypeEnum::COMPANY) {
            $services = request()->input('services');
            $model->services()->sync($services);
        }
        return $model;
    }

    public function saveStep4($type, $model)
    {
        $user = new User();

        $password = request()->input('password', null);
        $email = request()->input('email', null);

        $user->email = $email;
        $user->normal_password = $password;
        $user->password = Hash::make($password);
        $user->security_question_name = request()->input('security_question_name');
        $user->security_question_value = request()->input('security_question_value');
        $user->know_about_us = request()->input('know_about_us');

        if ($user->save()) {
            $user->roles()->sync($this->roleService->findBySlug(RoleEnum::BUSINESS_ACCELERATOR));
            $model->user_id = $user->id;
            $model->save();
        }
        event(new Registered($user));
        return $model;
    }

    public function saveStep5($type): bool
    {
        $subscription_id = request()->input('subscription_id');
        $subscribed_id = request()->input('subscribed_id');
        $payment_token_number = request()->input('payment_token_number');
        $payment_addition_information = request()->input('payment_addition_information');

        $subscription = new Subscription();

        $subscription->subscribed_id = $subscribed_id;
        $subscription->subscription_id = $subscription_id;
        $subscription->subscription_type = SubscriptionTypeEnum::PACKAGE;

        $package = Package::find($subscription_id);
        $limit = $package->duration_limit;
        $from_date = Carbon::now();
        $duration_type = $package->duration_type->slug;
        $price = $package->price;
        $subscription->price = $price;
        $subscription->created_by = auth()->id();
        $subscription->renewal_date = Carbon::now();
        $subscription->expire_date = GeneralService::get_remaining_time($duration_type, $limit, $from_date);
        $subscription->status = 'pending';
        $subscription->payment_token_number = $payment_token_number;
        $subscription->payment_addition_information = $payment_addition_information;
        if ($subscription->save()) {
            return true;
        } else {
            return false;
        }

    }
}
