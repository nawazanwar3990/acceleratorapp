<?php
namespace App\Services;

use App\Models\ServiceManagement\Service;

class ServiceData
{
    public static function getFreelanceServiceForDropdown($id = null)
    {
        return Service::where('type', 'freelancers_service')->orderBy('name', 'ASC')->pluck('name', 'id');
    }

    public static function getGeneralServicesForDropdown() {
        return Service::where('type', 'general_services')->orderBy('name', 'ASC')->pluck('name', 'id');
    }

    public static function getSecurityServicesForDropdown() {
        return Service::where('type', 'security_services')->orderBy('name', 'ASC')->pluck('name', 'id');
    }

    public static function getAllServicesForDropdown() {
        return Service::orderBy('name', 'ASC')->pluck('name', 'id');
    }
}
