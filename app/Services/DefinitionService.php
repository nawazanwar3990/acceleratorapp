<?php

namespace App\Services;

use App\Enum\RoleEnum;
use App\Models\Users\Role;
use App\Models\Devices\DeviceClass;
use App\Models\Devices\DeviceLocation;
use App\Models\Devices\DeviceMake;
use App\Models\Devices\DeviceModel;
use App\Models\Devices\DeviceOperatingSystem;
use App\Models\Devices\DeviceType;

class DefinitionService
{
    public static function get_device_type_dropdown()
    {
        return DeviceType::pluck('name', 'id');
    }

    public static function get_device_make_dropdown()
    {
        return DeviceMake::pluck('name', 'id');
    }

    public static function get_device_model_dropdown()
    {
        return DeviceModel::pluck('name', 'id');
    }

    public static function get_device_location_dropdown()
    {
        return DeviceLocation::pluck('name', 'id');
    }

    public static function get_device_class_dropdown()
    {
        return DeviceClass::pluck('name', 'id');
    }

    public static function get_device_operating_system_dropdown()
    {
        return DeviceOperatingSystem::pluck('name', 'id');
    }

    public static function chackParentExsit($id, $model)
    {
        $data = $model::whereParentId($id)->count();
        if ($data > 0) {
            return true;
        } else {
            return false;
        }
    }

    public static function pluck_services_roles()
    {
        return Role::whereIn('slug', [
            RoleEnum::INCUBATOR,
            RoleEnum::SERVICE_PROVIDER,
            RoleEnum::MENTOR,
            RoleEnum::CUSTOMER
        ])->pluck('name', 'id');
    }
    public static function list_services_roles()
    {
        return Role::whereIn('slug', [
            RoleEnum::INCUBATOR,
            RoleEnum::SERVICE_PROVIDER,
            RoleEnum::MENTOR,
            RoleEnum::CUSTOMER
        ])->get();
    }
}
