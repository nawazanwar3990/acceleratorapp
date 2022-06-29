<?php

namespace App\Enum;

class KeyWordEnum extends AbstractEnum
{

    public const DASHBOARD = 'dashboard';
    //plan management
    public const PLAN_MANAGEMENT = 'plan_management';
    public const PLAN = 'plan';
    public const INSTALLMENT = 'installment';
    public const INSTALLMENT_TERM = 'installment_term';
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
    public const CO_WORKING_SPACE = 'working_space';
    public const BUILDING = 'building';
    public const SHOP = 'shop';
    public const FLAT = 'flat';
    public const ROOM = 'room';
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
    //Freelancers Portal
    public const FREELANCERS_PORTAL = 'freelancers_portal';
    public const FREELANCERS = 'freelancers';

    const PACKAGE_MANAGEMENT = 'package_management';
    public const PACKAGE = 'package';
    public const MODULE = 'module';
    public const DURATION = 'duration';
    public const FREELANCER = 'freelancer';
    public const INVESTOR = 'investor';
   public const SERVICE_PROVIDER = 'service_provider';
   public const VENDOR = 'vendor';
   public const CLIENT = 'client';

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
