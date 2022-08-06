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
    public static function get_mentor_services()
    {
        return Service::with('children')->where('type', ServiceTypeEnum::MENTOR)
            ->whereStatus(true)
            ->where('parent_id',null)
            ->orderBy('name', 'ASC')->get();
    }
    public static function get_mentor_package_services()
    {
        return Service::with('children')->where('type', ServiceTypeEnum::MENTOR)
            ->whereStatus(true)
            ->where('parent_id','!=',null)
            ->orderBy('name', 'ASC')->get();
    }
    public static function get_mentor_child_services($parent_id)
    {
        return Service::with('children')->where('type', ServiceTypeEnum::MENTOR)
            ->whereStatus(true)
            ->where('parent_id',$parent_id)
            ->orderBy('name', 'ASC')->get();
    }
    public static function getBasicServices()
    {
        return Service::where('type', ServiceTypeEnum::BASIC)
            ->whereCreatedBy(Auth::id())
            ->whereStatus(true)
            ->orderBy('name', 'ASC')->get();
    }

    public static function getAdditionalServices()
    {
        return Service::where('type', ServiceTypeEnum::ADDITIONAL)
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
}
