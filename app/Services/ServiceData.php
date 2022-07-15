<?php

namespace App\Services;

use App\Enum\ServiceTypeEnum;
use App\Models\Services\Service;
use Illuminate\Support\Facades\Auth;

class ServiceData
{
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

    public static function getGeneralServicesForDropdown()
    {
        return Service::where('type', ServiceTypeEnum::GENERAL_SERVICE)
            ->whereCreatedBy(Auth::id())
            ->orderBy('name', 'ASC')->pluck('name', 'id');
    }

    public static function getSecurityServicesForDropdown()
    {
        return Service::where('type', ServiceTypeEnum::SECURITY_SERVICE)
            ->whereCreatedBy(Auth::id())
            ->orderBy('name', 'ASC')->pluck('name', 'id');
    }

    public static function getBasicServices()
    {
        return Service::where('type', ServiceTypeEnum::BASIC_SERVICE)
            ->whereCreatedBy(Auth::id())
            ->orderBy('name', 'ASC')->get();
    }

    public static function getAdditionalServices()
    {
        return Service::where('type', ServiceTypeEnum::ADDITIONAL_SERVICE)
            ->whereCreatedBy(Auth::id())
            ->orderBy('name', 'ASC')->get();
    }

    public static function getAllServicesForDropdown()
    {
        return Service::orderBy('name', 'ASC')->pluck('name', 'id');
    }

    public function listServicesByPagination()
    {
        return Service::where('created_by', Auth::id())->paginate(20);
    }

    public static function getParentFreelancerServicesDropdown()
    {
        return Service::whereType(ServiceTypeEnum::FREELANCER_SERVICE)->whereNull('parent_id')->orderBy('name', 'ASC')->pluck('name', 'id');
    }

    public static function getFreelancerServicesDropdown()
    {
        return Service::whereType(ServiceTypeEnum::FREELANCER_SERVICE)->orderBy('name', 'ASC')->pluck('name', 'id');
    }
}
