<?php

namespace App\Services;

use App\Enum\MediaTypeEnum;
use App\Enum\RoleEnum;
use App\Models\Hr;
use App\Models\Media;
use App\Models\Package;
use App\Models\Province;
use App\Models\Subscription;
use App\Models\User;
use App\Models\Users\Country;
use App\Models\Users\District;
use App\Models\Users\HrCast;
use App\Models\Users\HrDepartment;
use App\Models\Users\HrDesignation;
use App\Models\Users\HrNationality;
use App\Models\Users\HrOrganization;
use App\Models\Users\HrProfession;
use App\Models\Users\HrRelation;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
        $pic = Media::where('record_type', 'hr_first_image')
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

    public static function getCurrentHrId()
    {
        return Auth::user()->hr_id;
    }

    public static function pluck_customers()
    {
        return User::whereHas('roles', function ($q) {
            $q->where('slug', '=', RoleEnum::CUSTOMER);
        })
            ->select(DB::raw('CONCAT(first_name, " ", last_name) AS name, id'))
            ->pluck('name', 'id');
    }

    public function store($data): User
    {
        $model = Hr::create($data);
        $user = $this->makeItUser($model, $data);
        if (request()->has('package_id')) {
            $package_id = request()->input('package_id');
            $this->addSubscription($user, $package_id);
            $this->uploadMedia($model);
        }
        return $user;
    }

    private function makeItUser($model, $data): User
    {
        $password = $data['password'] ?? "user123";
        $user = new User();
        $user->hr_id = $model->id;
        $user->first_name = $model->first_name;
        $user->last_name = $model->last_name;
        $user->user_name = uniqid();
        $user->email = $model->email;
        $user->normal_password = $password;
        $user->password = Hash::make($password);
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

    private function addSubscription($user, $package_id): void
    {

        $package = Package::find($package_id);
        $limit = $package->duration_limit;
        $from_date = Carbon::now();
        $duration_type = $package->duration_type->slug;
        $subscription = new Subscription();
        $subscription->subscribed_id = $user->id;
        $subscription->package_id = $package_id;
        $subscription->price = $package->price;
        $subscription->expire_date = GeneralService::get_remaining_time($duration_type, $limit, $from_date);
        $subscription->save();
    }

    private function uploadMedia($model): void
    {
        if (request()->file('scanned_document')) {
            $uploadedFile = request()->file('scanned_document');
            $fileName = GeneralService::generateFileName($uploadedFile);
            $path = 'uploads/hr/documents/' . $fileName;
            $uploadedFile->move('uploads/hr/documents', $fileName);
            Media::create([
                'filename' => $path,
                'record_id' => $model->id,
                'record_type' => MediaTypeEnum::HR_DOCUMENT,
                'created_by' => Auth::id(),
                'updated_by' => Auth::id()
            ]);
        }
        if (request()->file('scanned_signature')) {
            $uploadedFile = request()->file('scanned_signature');
            $path = 'uploads/hr/signature/' . GeneralService::generateFileName($uploadedFile);
            Image::make($uploadedFile)->save($path);
            Media::create([
                'filename' => $path,
                'record_id' => $model->id,
                'record_type' => MediaTypeEnum::HR_SIGNATURE,
                'created_by' => Auth::id(),
                'updated_by' => Auth::id()
            ]);
        }
        if (request()->file('first_image')) {
            $uploadedFile = request()->file('first_image');
            $path = 'uploads/hr/images/' . GeneralService::generateFileName($uploadedFile);
            Image::make($uploadedFile)->save($path);
            Media::create([
                'filename' => $path,
                'record_id' => $model->id,
                'record_type' => MediaTypeEnum::HR_FIRST_IMAGE,
                'created_by' => Auth::id(),
                'updated_by' => Auth::id()
            ]);
        }
        if (request()->file('second_image')) {
            $uploadedFile = request()->file('second_image');
            $path = 'uploads/hr/images/' . GeneralService::generateFileName($uploadedFile);
            Image::make($uploadedFile)->save($path);
            Media::create([
                'filename' => $path,
                'record_id' => $model->id,
                'record_type' => MediaTypeEnum::HR_SECOND_IMAGE,
                'created_by' => Auth::id(),
                'updated_by' => Auth::id()
            ]);
        }
        if (request()->file('third_image')) {
            $uploadedFile = request()->file('third_image');
            $path = 'uploads/hr/images/' . GeneralService::generateFileName($uploadedFile);
            Image::make($uploadedFile)->save($path);
            Media::create([
                'filename' => $path,
                'record_id' => $model->id,
                'record_type' => MediaTypeEnum::HR_THIRD_IMAGE,
                'created_by' => Auth::id(),
                'updated_by' => Auth::id()
            ]);
        }
        if (request()->file('fourth_image')) {
            $uploadedFile = request()->file('fourth_image');
            $path = 'uploads/hr/images/' . GeneralService::generateFileName($uploadedFile);
            Image::make($uploadedFile)->save($path);
            Media::create([
                'filename' => $path,
                'record_id' => $model->id,
                'record_type' => MediaTypeEnum::HR_FOURTH_IMAGE,
                'created_by' => Auth::id(),
                'updated_by' => Auth::id()
            ]);
        }
    }

    public static function hasRole($role)
    {
        return Auth::user()->hasRole($role);
    }
}
