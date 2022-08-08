<?php

namespace App\Services;

use App\Enum\MediaTypeEnum;
use App\Enum\RoleEnum;
use App\Enum\SubscriptionTypeEnum;
use App\Models\Freelancer;
use App\Models\Media;
use App\Models\Package;
use App\Models\Subscription;
use App\Models\User;
use App\Models\VerifyUser;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
                $this->manageAffiliations($model);
            }
        }
        return $model;
    }

    public function saveServices($model)
    {
        $services = request()->input('services', array());
        if (count($services) > 0) {
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

        $this->saveLogo($model);
        $this->saveIdcards($model);

        $this->manageQualifications($model);
        $this->manageCertifications($model);
        $this->manageExperiences($model);

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

    public function applySubscription($type): bool
    {
        $subscription_id = request()->input('subscription_id');
        $subscribed_id = request()->input('subscribed_id');

        $alreadySubscription = Subscription::where('subscribed_id', $subscribed_id);
        if ($alreadySubscription->exists()) {
            DB::statement('SET FOREIGN_KEY_CHECKS=0;');
            $alreadySubscription->delete();
            DB::statement('SET FOREIGN_KEY_CHECKS=1;');
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

    public function saveFocalPersonInfo($type, $model)
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

    private function saveLogo($model): void
    {
        if (request()->has('logo')) {
            $model->logo()->delete();
            $logo = request()->file('logo');
            $logoName = GeneralService::generateFileName($logo);
            $logoPath = 'uploads/sp/images/' . $logoName;
            $logo->move('uploads/sp/images', $logoName);
            Media::create(
                [
                    'record_id' => $model->id,
                    'record_type' => MediaTypeEnum::SP_LOGO,
                    'filename' => $logoPath,
                    'created_by' => Auth::id(),
                    'updated_by' => Auth::id()
                ]
            );
        }
    }

    private function saveIdcards($model)
    {

        if (request()->has('id_card_front')) {
            $model->front_id_card()->delete();
            $id_card_front = request()->file('id_card_front');
            $id_card_front_name = GeneralService::generateFileName($id_card_front);
            $id_card_front_path = 'uploads/sp/images/' . $id_card_front_name;
            $id_card_front->move('uploads/sp/images', $id_card_front_name);
            Media::create(
                [
                    'record_id' => $model->id,
                    'record_type' => MediaTypeEnum::SP_FRONT_ID_CARD,
                    'filename' => $id_card_front_path,
                    'created_by' => Auth::id(),
                    'updated_by' => Auth::id()
                ]
            );
        }
        if (request()->has('id_card_back')) {
            $model->back_id_card()->delete();
            $id_card_back = request()->file('id_card_back');
            $id_card_back_name = GeneralService::generateFileName($id_card_back);
            $id_card_back_path = 'uploads/sp/images/' . $id_card_back_name;
            $id_card_back->move('uploads/sp/images', $id_card_back_name);
            Media::create(
                [
                    'record_id' => $model->id,
                    'record_type' => MediaTypeEnum::SP_BACK_ID_CARD,
                    'filename' => $id_card_back_path,
                    'created_by' => Auth::id(),
                    'updated_by' => Auth::id()
                ]
            );
        }
    }

    private function manageQualifications($model): void
    {

        $data = request()->input('qualifications', []);
        if (count($data) > 0) {
            $model->qualifications()->delete();
            $count = $data['degree'];
            $final = array();
            if (count($count) > 0) {
                for ($i = 0; $i < count($count); $i++) {
                    $final[] = [
                        'degree' => $data['degree'][$i] ?? null,
                        'institute' => $data['institute'][$i] ?? null,
                        'year_of_passing' => $data['year_of_passing'][$i] ?? null,
                        'grade' => $data['grade'][$i] ?? null,
                    ];
                }
            }
            $model->qualifications()->createMany($final);
        }

    }

    private function manageCertifications($model): void
    {
        $data = request()->input('certifications', []);

        if (count($data) > 0) {
            $model->certifications()->delete();

            $count = $data['certificate_name'];
            $final = array();
            if (count($count) > 0) {
                for ($i = 0;
                     $i < count($count);
                     $i++) {
                    $final[] = ['certificate_name' => $data['certificate_name'][$i] ?? null,
                        'institute' => $data['institute'][$i] ?? null,
                        'year' => $data['year'][$i] ?? null,
                        'any_distinction' => $data['any_distinction'][$i] ?? null,];
                }
            }
            $model->certifications()->createMany($final);
        }
    }

    private function manageExperiences($model): void
    {
        $data = request()->input('experiences', []);
        if (count($data) > 0) {
            $count = $data['company_name'];
            $final = array();
            if (count($count) > 0) {
                for ($i = 0; $i < count($count); $i++) {
                    $final[] = [
                        'company_name' => $data['company_name'][$i] ?? null,
                        'designation' => $data['designation'][$i] ?? null,
                        'duration' => $data['duration'][$i] ?? null,
                        'any_achievement' => $data['any_achievement'][$i] ?? null,
                    ];
                }
            }
            $model->experiences()->createMany($final);
        }

    }

    private function manageAffiliations($model): void
    {
        $data = request()->input('affiliations', []);
        if (count($data) > 0) {
            $count = $data['affiliated_by'];
            $final = array();
            if (count($count) > 0) {
                for ($i = 0; $i < count($count); $i++) {
                    $final[] = [
                        'affiliated_by' => $data['affiliated_by'][$i] ?? null,
                        'affiliation_detail' => $data['affiliation_detail'][$i] ?? null,
                        'affiliation_certificate' => $this->generateAffiliationCertificate($_FILES['affiliations'], $i)
                    ];
                }
            }
            $model->affiliations = $final;
            $model->save();
        }

    }

    private function generateAffiliationCertificate($file, $index): ?string
    {
        $uploaded_file = $file['name']['affiliation_certificate'][$index];
        if ($uploaded_file) {
            $new_file = uniqid() . "." . strtolower(pathinfo($uploaded_file, PATHINFO_EXTENSION));
            $file_tmp = $file['tmp_name']['affiliation_certificate'][$index];
            $path = "uploads/sp/images/" . $new_file;
            move_uploaded_file($file_tmp, $path);
            return $path;
        } else {
            return null;
        }
    }
}
