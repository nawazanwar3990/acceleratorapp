<?php

namespace App\Services;

use App\Enum\MediaTypeEnum;
use App\Enum\RoleEnum;
use App\Enum\SubscriptionTypeEnum;
use App\Enum\TableEnum;
use App\Models\Freelancer;
use App\Models\Media;
use App\Models\Package;
use App\Models\Service;
use App\Models\Subscription;
use App\Models\User;
use App\Models\VerifyUser;
use App\Notifications\VerifyEmailLink;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Notification;

class FreelancerService
{
    public function __construct(
        private RoleService $roleService
    )
    {
    }

    public function saveStep1($type, $model): Freelancer
    {
        $model = $model ?? new Freelancer();
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
                GeneralService::manageAffiliations($model, 'sp');
                GeneralService::manageDocuments($model, 'sp');
            }
        }
        return $model;
    }

    public function saveServices($model)
    {
        $services = request()->input('services', array());
        if (count($services) > 0) {
            $model->services()->detach();
            $final_data = array();
            foreach ($services['limit'] as $service_slug => $service_value) {
                if ($service_value) {
                    $data = [
                        'service_id' => Service::whereSlug($service_slug)->value('id'),
                        'freelancer_id' => $model->id,
                        'service_type' => 'package',
                        'limit' => $service_value,
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now()
                    ];
                    $final_data[] = $data;
                }
            }
            \App\Models\FreelancerService::insert($final_data);
        }
        return $model;
    }

    public function saveUseInfo(
        $type,
        $payment_process,
        $model,
        $user_id
    ): Freelancer
    {
        if (!$model) {
            $model = new Freelancer();
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
            $user->roles()->sync($this->roleService->findBySlug(RoleEnum::FREELANCER));
            $model->user_id = $user->id;
            $model->save();
        }

        GeneralService::saveLogo($model, 'ba');
        GeneralService::saveCNIC($model, 'ba');
        GeneralService::manageQualifications($model);
        GeneralService::manageCertifications($model);
        GeneralService::manageExperiences($model);
        if (!$user_id) {
            $token = sha1(time());
            VerifyUser::updateOrCreate([
                'user_id' => $user->id
            ], [
                'token' => $token
            ]);
            $user->notify(new VerifyEmailLink($token));
        }
        return $model;
    }

    public function saveFocalPersonInfo($model)
    {
        $count = request()->input('fp_name', array());
        $data = request()->all();
        $records = array();
        if (count($count) > 0) {
            $model->focal_persons()->delete();
            for ($i = 0; $i < count($count); $i++) {
                $records[] = [
                    'fp_name' => $data['fp_name'][$i],
                    'fp_designation' => $data['fp_designation'][$i],
                    'fp_emp_type' => $data['fp_emp_type'][$i],
                    'fp_contact' => $data['fp_contact'][$i],
                    'fp_email' => $data['fp_email'][$i],
                ];
            }
        }
        if (count($records) > 0) {
            $model->focal_persons()->createMany($records);
        }
        return $model;
    }
}
