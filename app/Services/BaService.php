<?php

namespace App\Services;

use App\Enum\AcceleratorTypeEnum;
use App\Models\BA;
use App\Models\Hr;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class BaService
{

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

        if ($user->save()) {
            $model->user_id = $user->id;
            $model->save();
        }
        return $model;
    }
}
