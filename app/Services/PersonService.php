<?php

namespace App\Services;

use App\Models\Authorization\User;
use App\Models\RealEstate\Definition\General\Colony;
use App\Models\RealEstate\Definition\General\Country;
use App\Models\RealEstate\Definition\General\District;
use App\Models\RealEstate\Definition\General\Province;
use App\Models\RealEstate\Definition\General\Tehsil;
use App\Models\RealEstate\Definition\HumanResource\HrBusiness;
use App\Models\RealEstate\Definition\HumanResource\HrCast;
use App\Models\RealEstate\Definition\HumanResource\HrDepartment;
use App\Models\RealEstate\Definition\HumanResource\HrDesignation;
use App\Models\RealEstate\Definition\HumanResource\HrEmployeeType;
use App\Models\RealEstate\Definition\HumanResource\HrMinistry;
use App\Models\RealEstate\Definition\HumanResource\HrNationality;
use App\Models\RealEstate\Definition\HumanResource\HrOrganization;
use App\Models\RealEstate\Definition\HumanResource\HrProfession;
use App\Models\RealEstate\Definition\HumanResource\HrRelation;
use App\Models\RealEstate\Definition\HumanResource\HrTaxStatus;
use App\Models\RealEstate\Definition\HumanResource\HrTaxType;
use App\Models\RealEstate\HumanResource\Employee;
use App\Models\RealEstate\HumanResource\Hr;
use App\Models\RealEstate\Media;
use App\Services\RealEstate\BuildingService;
use App\Traits\General;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;
use function __;
use function url;

class PersonService
{

    public static function maritalStatusForDropdown($id = null)
    {
        $data = [
            'married' => __('general.married'),
            'unmarried' => __('general.unmarried'),
        ];
        if (!is_null($id)) {
            $data = $data[$id];
        }
        return $data;
    }

    public static function HrForDropdown()
    {
        return Hr::orderBy('first_name', 'ASC')->pluck('first_name', 'id');
    }

    public static function relationsForDropdown()
    {
        return HrRelation::where('status', true)->orderBy('name', 'ASC')->pluck('name', 'id');
    }

    public static function castsForDropdown()
    {
        return HrCast::where('status', true)->orderBy('name', 'ASC')->pluck('name', 'id');
    }

    public static function nationalitiesForDropdown()
    {
        return HrNationality::where('status', true)->orderBy('name', 'ASC')->pluck('name', 'id');
    }

    public static function countriesForDropdown()
    {
        return Country::where('status', true)->orderBy('name', 'ASC')->pluck('name', 'id');
    }

    public static function provincesForDropdown($countryID = null)
    {
        if (is_null($countryID)) {
            return Province::where('status', true)->orderBy('name', 'ASC')->pluck('name', 'id');
        } else {
            return Province::where('status', true)->where('country_id', $countryID)->orderBy('name', 'ASC')->pluck('name', 'id');
        }
    }

    public static function districtsForDropdown()
    {
        return District::where('status', true)->orderBy('name', 'ASC')->pluck('name', 'id');
    }

    public static function tehsilsForDropdown()
    {
        return Tehsil::where('status', true)->orderBy('name', 'ASC')->pluck('name', 'id');
    }

    public static function coloniesForDropdown()
    {
        return Colony::where('status', true)->orderBy('name', 'ASC')->pluck('name', 'id');
    }

    public static function genderForDropdown($id = null)
    {
        $data = [
            'male' => __('general.male'),
            'female' => __('general.female'),
            'transgender' => __('general.transgender'),
        ];
        if (!is_null($id)) {
            $data = $data[$id];
        }
        return $data;
    }

    public static function employeeTypeForDropdown($id = null)
    {
//        return HrEmployeeType::where('parent_id', 0)->orderBy('name', 'ASC')->pluck('name', 'id');
        $data = [
            'govt' => __('general.government'),
            'private' => __('general.private'),
            'own' => __('general.own_business'),
        ];
        if (!is_null($id)) {
            $data = $data[$id];
        }
        return $data;
    }

    public static function employeeSubTypeForDropdown($id = null)
    {
        return HrEmployeeType::where('parent_id', '!=', 0)->orderBy('name', 'ASC')->pluck('name', 'id');
    }

    public static function taxTypeForDropdown($id = null)
    {
        return HrTaxType::where('status', true)->orderBy('name', 'ASC')->pluck('name', 'id');
    }

    public static function taxStatusForDropdown($id = null)
    {
        return HrTaxStatus::where('status', true)->orderBy('name', 'ASC')->pluck('name', 'id');
    }

    public static function ministryForDropdown($id = null)
    {
        return HrMinistry::where('status', true)->orderBy('name', 'ASC')->pluck('name', 'id');
    }

    public static function organizationsForDropdown($id = null)
    {
        return HrOrganization::where('status', true)->orderBy('name', 'ASC')->pluck('name', 'id');
    }

    public static function departmentForDropdown($id = null)
    {
        return HrDepartment::where('status', true)->orderBy('name', 'ASC')->pluck('name', 'id');
    }

    public static function designationForDropdown($id = null)
    {
        return HrDesignation::where('status', true)->orderBy('name', 'ASC')->pluck('name', 'id');
    }

    public static function gradesForDropdown($id = null)
    {
        for ($i = 1; $i <= 20; $i++) {
            $data[$i] = $i;
        }
        if (!is_null($id)) {
            $data = $data[$id];
        }
        return $data;
    }

    public static function professionsForDropdown($id = null)
    {
        return HrProfession::where('status', true)->orderBy('name', 'ASC')->pluck('name', 'id');
    }

    public static function serviceOrRetiredForDropdown($id = null)
    {
        $data = [
            'serving' => __('general.serving'),
            'retired' => __('general.retired'),
        ];
        if (!is_null($id)) {
            $data = $data[$id];
        }
        return $data;
    }

    public static function ownerOrPartnerForDropdown($id = null)
    {
        $data = [
            'owner' => __('general.owner'),
            'partner' => __('general.partner'),
        ];
        if (!is_null($id)) {
            $data = $data[$id];
        }
        return $data;
    }

    public static function businessTypesForDropdown($id = null)
    {
        return HrBusiness::where('parent_id', 0)->orderBy('name', 'ASC')->pluck('name', 'id');
    }

    public static function businessSubTypesForDropdown($id = null)
    {
        return HrBusiness::where('parent_id', '!=', 0)->orderBy('name', 'ASC')->pluck('name', 'id');
    }

    public static function buildingNoOfFloorsForDropdown($id = null)
    {
        for ($i = 1; $i < 30; $i++) {
            $data[$i] = $i;
        }
        if (!is_null($id)) {
            $data = $data[$id];
        }
        return $data;
    }

    public static function buildingFacingsForDropdown($id = null)
    {
        $data = [
            1 => __('general.east'),
            2 => __('general.west'),
            3 => __('general.south'),
            4 => __('general.north'),
            5 => __('general.north_east'),
            6 => __('general.north_west'),
            7 => __('general.south_east'),
            8 => __('general.south_west'),
        ];
        if (!is_null($id)) {
            $data = $data[$id];
        }
        return $data;
    }

    public static function getHrFirstPicture($hrID)
    {
        $pic = Media::whereBuildingId(BuildingService::getBuildingId())
            ->where('record_type', 'hr_first_image')
            ->where('record_id', $hrID)
            ->first();
        if ($pic) {
            return url($pic->filename);
        }

        return url('theme/images/user-picture.png');
    }

    public static function getHrById($id)
    {
        if ($id == null) {
            return false;
        }
        return Hr::find($id);
    }

    public static function getHrDetails($request)
    {
        $output = ['success' => false, 'msg' => __('general.something_went_wrong')];
        if ($request->ajax()) {
            if ($request->has('hrID')) {
                $hrID = $request->get('hrID');
                $hr = Hr::whereBuildingId(BuildingService::getBuildingId())
                    ->with('relation')->find($hrID);
                if ($hr) {
                    $pic = PersonService::getHrFirstPicture($hr->id);
                    $output = ['success' => true, 'msg' => '', 'record' => $hr, 'full_name' => $hr->full_name, 'pic' => $pic];
                } else {
                    $output = ['success' => false, 'msg' => __('general.no_record_found')];
                }

            }
        }
        return $output;
    }

    public static function getHrDetailsForEmployee($request)
    {
        $output = ['success' => false, 'msg' => __('general.something_went_wrong')];
        if ($request->ajax()) {
            if ($request->has('hrID')) {
                $hrID = $request->get('hrID');
                $existingRecord = Employee::whereBuildingId(BuildingService::getBuildingId())->where('hr_id', $hrID)->first();
                if ($existingRecord) {
                    $output = ['success' => false, 'msg' => __('general.employee_already_exists')];
                } else {
                    $hr = Hr::whereBuildingId(BuildingService::getBuildingId())
                        ->with('relation')->find($hrID);
                    if ($hr) {
                        $pic = PersonService::getHrFirstPicture($hr->id);
                        $output = ['success' => true, 'msg' => '', 'record' => $hr, 'full_name' => $hr->full_name, 'pic' => $pic];
                    } else {
                        $output = ['success' => false, 'msg' => __('general.no_record_found')];
                    }
                }
            }
        }
        return $output;
    }

    public function store($data): User
    {
        $model = Hr::create($data);
        return $this->makeItUser($model, $data);
    }

    private function makeItUser($model, $data): User
    {
        $user = new User();
        $user->hr_id = $model->id;
        $user->first_name = $model->first_name;
        $user->last_name = $model->last_name;
        $user->user_name = uniqid();
        $user->email = $model->email;
        $user->normal_password = $data['password'];
        $user->password = Hash::make($data['password']);

        if ($user->save()) {

            if (isset($data['role_id'])) {
                $user->roles()->sync([$data['role_id']]);
            }
            $model->user_id = $user->id;
            $model->save();
        }
        return $user;
    }

    public function findUserById($id)
    {
        return User::find($id);
    }

    public static function userForDropdown()
    {
        return User::where('active', 1)->orderBy('first_name', 'ASC')->pluck('first_name', 'id');
    }

    public function findByEmail(mixed $email)
    {
        return User::whereEmail($email)->first();
    }
}
