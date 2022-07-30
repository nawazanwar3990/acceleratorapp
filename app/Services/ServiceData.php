<?php

namespace App\Services;

use App\Enum\RoleEnum;
use App\Enum\ServiceTypeEnum;
use App\Models\Service;
use Illuminate\Support\Facades\Auth;

class ServiceData
{
    public static function get_package_services_range($id = null)
    {
        $data = array();
        $data['∞'] = 'Un Limited';
        for ($i = 0; $i < 1000; $i++) {
            $data[$i] = $i;
        }
        if (!is_null($id)) {
            $data = $data[$id];
        }
        return $data;
    }

    public static function getServiceTypeDropdown($id = null)
    {
        $data = [
            1 => 'General ServiceTableHeading',
            2 => 'Security ServiceTableHeading',
        ];
        if (!is_null($id)) {
            $data = $data[$id];
        }

        return $data;
    }
    public static function get_business_accelerator_services()
    {
        return Service::where('type', ServiceTypeEnum::BUSINESS_ACCELERATOR_SERVICE)
            ->whereStatus(true)
            ->orderBy('name', 'ASC')->get();
    }
    public static function get_freelancer_services()
    {
        return Service::where('type', ServiceTypeEnum::FREELANCER_SERVICE)
            ->whereStatus(true)
            ->orderBy('name', 'ASC')->get();
    }
    public static function getBasicServices()
    {
        return Service::where('type', ServiceTypeEnum::BASIC_SERVICE)
            ->whereCreatedBy(Auth::id())
            ->whereStatus(true)
            ->orderBy('name', 'ASC')->get();
    }

    public static function getAdditionalServices()
    {
        return Service::where('type', ServiceTypeEnum::ADDITIONAL_SERVICE)
            ->whereCreatedBy(Auth::id())
            ->whereStatus(true)
            ->orderBy('name', 'ASC')->get();
    }

    public static function getAllServicesForDropdown()
    {
        return Service::orderBy('name', 'ASC')
            ->whereStatus(true)
            ->pluck('name', 'id');
    }

    public function listServicesByPagination()
    {
        $type = request()->query('type');
        $services = Service::where('type', $type);
        if (!PersonService::hasRole(RoleEnum::SUPER_ADMIN)) {
            $services = Service::where('created_by', Auth::id());
        }
        return $services->orderBy('id', 'DESC')->paginate(20);
    }

    public static function getParentFreelancerServicesDropdown()
    {
        return Service::whereType(ServiceTypeEnum::FREELANCER_SERVICE)->whereNull('parent_id')->orderBy('name', 'ASC')->pluck('name', 'id');
    }
    public static function getParentMentorServicesDropdown()
    {
        return Service::whereType(ServiceTypeEnum::MENTOR_SERVICE)
            ->whereNull('parent_id')->orderBy('name', 'ASC')->pluck('name', 'id');
    }
    public static function getFreelancerServicesDropdown()
    {
        return Service::whereType(ServiceTypeEnum::FREELANCER_SERVICE)->orderBy('name', 'ASC')->pluck('name', 'id');
    }
}
