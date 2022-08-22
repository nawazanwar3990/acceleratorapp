<?php

namespace App\Services;

use App\Enum\RoleEnum;
use App\Models\BA;
use App\Models\User;
use App\Models\VerifyUser;
use App\Notifications\VerifyEmailLink;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Notification;

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
        if (\auth()->user()) {
            $model->created_by = Auth::id();
        }
        $model->save();
        return $model;
    }

    public function saveCompanyProfile($model)
    {
        $model->company_name = request()->input('company_name', null);
        $model->is_register_company = request()->input('is_register_company', null);
        $model->company_no_of_emp = request()->input('company_no_of_emp', null);
        $model->company_date_of_initiation = request()->input('company_date_of_initiation', null);
        $model->company_contact_no = request()->input('company_contact_no', null);
        $model->company_email = request()->input('company_email', null);
        $model->company_address = request()->input('company_address', null);
        if ($model->save()) {
            if ($model->is_register_company == 'yes') {
                GeneralService::manageAffiliations($model, 'ba');
                GeneralService::manageDocuments($model, 'ba');
            }
        }
        return $model;
    }

    public function saveServices($model)
    {
        $services = request()->input('services', array());
        if (count($services) > 0) {
            $model->services()->detach();
            $model->services()->attach($services, ['service_type' => 'package']);
        }
        if (request()->has('other_services')) {
            $other_services = request()->input('other_services', array());
            if (count($other_services) > 0) {
                foreach ($other_services as $other_service) {
                    if ($other_service != '') {
                        \App\Models\BaService::create([
                            'ba_id' => $model->id,
                            'service_type' => 'other',
                            'service_name' => $other_service
                        ]);
                    }
                }
            }
        }
        return $model;
    }

    public function saveUseInfo(
        $type,
        $payment_process,
        $model,
        $user_id
    ): BA
    {
        if (!$model) {
            $model = new BA();
            $model->type = $type;
            $model->payment_process = $payment_process;
            $model->save();
        }
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

        GeneralService::saveLogo($model, 'ba');
        GeneralService::saveCNIC($model, 'ba');
        GeneralService::manageQualifications($model);
        GeneralService::manageCertifications($model);
        GeneralService::manageExperiences($model);

        VerifyUser::create([
            'user_id' => $user->id,
            'token' => sha1(time())
        ]);

        /* $verifyUser->user->verified = 1;
         $date = date("Y-m-d g:i:s");
         $verifyUser->user->email_verified_at = $date;
         $verifyUser->user->save();*/
        if ($user->email) {
            $model->user->notify(new VerifyEmailLink());
        }
        //$user->notify(new VerifyEmailLink());
        return $model;
    }
}
