<?php

namespace App\Services;

use App\Enum\AcceleratorTypeEnum;
use App\Enum\RoleEnum;
use App\Enum\ServiceTypeEnum;
use App\Enum\SubscriptionTypeEnum;
use App\Enum\TableEnum;
use App\Mail\VerifyMail;
use App\Models\BA;
use App\Models\Package;
use App\Models\Service;
use App\Models\Subscription;
use App\Models\User;
use App\Models\VerifyUser;
use App\Notifications\VerifyEmailLink;
use App\Services\RoleService;
use Carbon\Carbon;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class BaService
{
    public function __construct(
        private RoleService $roleService
    )
    {
    }

    public function saveStep1($type, $model): BA
    {
        $model = $model ?? new BA();
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
            $model->company_date_of_initiation = request()->input('company_date_of_initiation', null);
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
            $other_services = request()->input('other_services', array());
            if (count($other_services) > 0) {
                $model->other_services = json_encode($other_services);
                $model->save();
            }
        }
        return $model;
    }

    public function saveStep4($type, $model, $user_id)
    {
        $user = ($user_id) ? User::find($user_id) : new User();

        $password = request()->input('password', null);
        $email = request()->input('email', null);

        $first_name = request()->input('first_name', null);
        $last_name = request()->input('last_name', null);

        $user->email = $email;

        $user->first_name = $first_name;
        $user->last_name = $last_name;

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
        $verifyUser = VerifyUser::create([
            'user_id' => $user->id,
            'token' => sha1(time())
        ]);

        $verifyUser->user->verified = 1;
        $date = date("Y-m-d g:i:s");
        $verifyUser->user->email_verified_at = $date;
        $verifyUser->user->save();

        //$user->notify(new VerifyEmailLink());
        return $model;
    }

    public function saveStep5($type): bool
    {
        $subscription_id = request()->input('subscription_id');
        $subscribed_id = request()->input('subscribed_id');

        $alreadySubscription = Subscription::where('subscribed_id', $subscribed_id);
        if ($alreadySubscription->exists()) {
            $alreadySubscription->delete();
        }

        $payment_token_number = request()->input('payment_token_number');
        $payment_addition_information = request()->input('payment_addition_information');

        $subscribed = User::find($subscribed_id);
        $subscribed->payment_token_number = $payment_token_number;
        $subscribed->save();

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
