<?php

namespace App\Services;

use App\Models\Devices\DeviceClass;
use App\Models\Devices\DeviceLocation;
use App\Models\Devices\DeviceMake;
use App\Models\Devices\DeviceModel;
use App\Models\Devices\DeviceOperatingSystem;
use App\Models\Devices\DeviceType;
use App\Models\RealEstate\Definition\HumanResource\HrBusiness;

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

    public static function chackParentExsit($id,$model)
    {
        $data = $model::whereParentId($id)->count();
        if ($data > 0){
            return true;
        } else{
            return false;
        }
    }
}
