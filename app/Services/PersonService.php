<?php

namespace App\Services;
use App\Enum\RoleEnum;
use App\Models\Package;
use App\Models\Subscription;
use App\Models\User;
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

    public static function pluck_customers()
    {
        return User::whereHas('roles', function ($q) {
            $q->where('slug', '=', RoleEnum::CUSTOMER);
        })
            ->select(DB::raw('CONCAT(first_name, " ", last_name) AS name, id'))
            ->pluck('name', 'id');
    }

    public function findUserById($id)
    {
        return User::find($id);
    }

    public static function userForDropdown()
    {
        return User::where('active', 1)->orderBy('first_name', 'ASC')->pluck('first_name', 'id');
    }

    public function findByEmail($email)
    {
        return User::whereEmail($email)->first();
    }

    public function findByEmailOrToken($value)
    {
        return User::where('email', $value)->orWhere('payment_token_number', $value)->first();
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

    public static function hasRole($role)
    {
        return Auth::user()->hasRole($role);
    }

    public static function getBaServices(): array
    {
        $data = array();
        $services = Auth::user()->ba->services;
        if (count($services) > 0) {
            foreach ($services as $service) {
                $data[] = $service->slug;
            }
        }
        return $data;
    }
}
