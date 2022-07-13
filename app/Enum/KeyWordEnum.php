<?php

namespace App\Enum;

class KeyWordEnum extends AbstractEnum
{

    public const DASHBOARD = 'dashboard';
    //plan management
    public const PLAN_MANAGEMENT = 'plan_management';
    public const  PLAN = 'plan';
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
    public const CO_WORKING_SPACE = 'co_working_space';
    public const BUILDING = 'building';

    public const OFFICE = 'office';
    public const OFFICE_TYPE = 'office_type';
    public const FLOOR = 'floor';
    public const FLOOR_TYPE = 'floor_type';
    //service management
    public const SERVICE_MANAGEMENT = 'service_management';
    public const SERVICE = 'service';
    //definition
    public const DEFINITION = 'definition';
    public const HR_PERSON = 'hr_person';
    public const RELATION = 'relation';
    //Freelancers
    public const FREELANCER_MANAGEMENT = 'freelancer_management';
    public const FREELANCER = 'freelancer';
    //Packages
    const PACKAGE_MANAGEMENT = 'package_management';
    public const PACKAGE = 'package';
    public const MODULE = 'module';
    public const DURATION = 'duration';
    public const INVESTOR = 'investor';
    public const SERVICE_PROVIDER = 'service-provider';
    public const VENDOR = 'vendor';
    public const CLIENT = 'client';
    public const SUBSCRIPTION = 'subscription';
    public const PAYMENT = 'payment';
    public const SUBSCRIPTION_LOG = 'subscription_log';
    public const SUPER_ADMIN = 'super-admin';
    public const CUSTOMER = 'customer';
    public const BUSINESS_ACCELERATOR = 'business-accelerator';
    public const CUSTOMER_MANAGEMENT = 'customer_management';
    public const SALE_MANAGEMENT = 'sale_management';
    public const INVESTOR_MANAGEMENT = 'investor_management';
    public const LIST = 'list';
    public const CREATE = 'create';

    public const BASIC_SERVICE = 'basic_service';
    public const ADDITIONAL_SERVICE ='additional_service' ;


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
