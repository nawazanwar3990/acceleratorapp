<?php

namespace App\Services;

use App\Enum\ServiceTypeEnum;
use App\Models\ServiceManagement\Service;
use Illuminate\Support\Facades\Auth;

class ServiceData
{
    public static function getServiceTypeDropdown($id = null)
    {
        $data = [
            1 => 'General Service',
            2 => 'Security Service',
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

    public static function getGeneralServices()
    {
        return Service::where('type', ServiceTypeEnum::GENERAL_SERVICE)
            ->whereCreatedBy(Auth::id())
            ->orderBy('name', 'ASC')->get();
    }

    public static function getSecurityServices()
    {
        return Service::where('type', ServiceTypeEnum::SECURITY_SERVICE)
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
}
