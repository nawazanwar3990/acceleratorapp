<?php

namespace App\Services;

use App\Enum\MediaTypeEnum;
use App\Enum\RoleEnum;
use App\Enum\SubscriptionTypeEnum;
use App\Models\Media;
use App\Models\Mentor;
use App\Models\Package;
use App\Models\Subscription;
use App\Models\User;
use App\Models\VerifyUser;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class MentorService
{
    public function __construct(
        private RoleService $roleService
    )
    {
    }

    public function saveServices($model): Mentor
    {
        $services = request()->input('services',array());
        if (count($services)>0){
            $model->services = json_encode($services);
            $model->save();
        }
        if (request()->has('other_services')) {
            $other_services = request()->input('other_services', array());
            $model->other_services = json_encode($other_services);
            $model->save();
        }
        return $model;
    }

    public function saveUseInfo(
        $payment_process,
        $model,
        $user_id
    ): Mentor
    {
        if (!$model) {
            $model = new Mentor();
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
            $user->roles()->sync($this->roleService->findBySlug(RoleEnum::MENTOR));
            $model->user_id = $user->id;
            $model->save();
        }

        GeneralService::saveLogo($model, 'mentor');
        GeneralService::saveCNIC($model, 'mentor');
        GeneralService::manageQualifications($model);
        GeneralService::manageCertifications($model);
        GeneralService::manageProjects($model);

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
}
