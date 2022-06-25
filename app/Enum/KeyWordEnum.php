<?php

namespace App\Enum;

class KeyWordEnum extends AbstractEnum
{

    public const DASHBOARD = 'dashboard';
    //plan management
    public const PLAN_MANAGEMENT = 'plan_management';
    public const PLAN = 'plan';
    public const PLAN_LIST = 'plan_list';
    public const PLAN_NEW = 'new_plan';
    // system management
    public const SYSTEM_CONFIGURATION = 'system_configuration';
    public const SETTING = 'setting';
    //user management
    public const USER_MANAGEMENT = 'user_management';
    public const PERMISSION = 'permissions';
    public const ROLE = 'roles';
    public const USER = 'users';
    public const SYNC_PERMISSION = 'sync_permission';
    public const RELATIONS = 'relation';
    public const NATIONALITY = 'nationality';
    public const COUNTRY = 'country';
    public const PROVINCE = 'province';
    public const DISTRICT = 'district';
    public const DEPARTMENT = 'department';
    public const DESIGNATION = 'designation';
    public const PROFESSION = 'profession';
    public const ORGANIZATION = 'organization';
    // event management
    public const EVENT_MANAGEMENT = 'event_management';
    public const EVENT = 'event';
    public const EVENT_LIST = 'event_list';
    public const EVENT_NEW = 'new_event';
    // flat management
    public const FLAT_MANAGEMENT = 'flat_management';
    public const FLAT = 'flat';
    public const FLAT_TYPE = 'flat_type';
    public const FLOOR = 'floor';
    public const FLOOR_TYPE = 'floor_type';
    //service management
    public const SERVICE_MANAGEMENT = 'service_management';
    public const SERVICE = 'service';
    //definition
    public const DEFINITION = 'definition';
    public const HR_PERSON = 'hr_person';
    public const RELATION = 'relation';

    static function getConstants()
    {
        $oClass = new \ReflectionClass(__CLASS__);
        return $oClass->getConstants();
    }

    public static function getValues(): array
    {
        return KeyWordEnum::getConstants();
    }

    public static function getTranslationKeys(): array
    {
        return [];
    }
}
