<?php
namespace App\Services;

use App\Enum\ServiceEnum;
use App\Models\ServiceManagement\Service;

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

    public static function getGeneralServicesForDropdown() {
        return Service::where('type',ServiceEnum::GENERAL_SERVICE)->orderBy('name', 'ASC')->pluck('name', 'id');
    }

    public static function getSecurityServicesForDropdown() {
        return Service::where('type', ServiceEnum::SECURITY_SERVICE)->orderBy('name', 'ASC')->pluck('name', 'id');
    }

    public static function getAllServicesForDropdown() {
        return Service::orderBy('name', 'ASC')->pluck('name', 'id');
    }
}
