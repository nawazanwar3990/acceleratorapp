<?php

namespace App\Enum;

class TableEnum extends AbstractEnum
{
    public const USERS = 'users';
    public const PASSWORD_RESETS = 'password_resets';
    public const SERVICES = 'services';
    public const MEDIA = 'media';
    public const FLOOR_TYPES = 'floor_types';
    public const HRS = 'hrs';
    public const FLOORS = 'floors';

    public const OFFICE_TYPES = 'office_types';
    public const OFFICES = 'offices';
    public const OFFICE_OWNER = 'office_owner';

    public const PLANS = 'plans';
    public const SETTINGS = 'settings';
    public const ROLES = 'roles';
    public const PERMISSIONS = 'permissions';
    public const ROLE_USER = 'role_user';
    public const ROLE_PERMISSION = 'role_permission';
    public const MODULES = 'modules';
    public const EVENTS = 'events';
    public const PACKAGES = 'packages';
    public const PACKAGE_MODULE = 'package_module';
    public const DURATIONS = 'durations';
    public const SUBSCRIPTIONS = 'subscriptions';
    public const PAYMENTS = 'payments';
    public const SUBSCRIPTION_LOGS = 'subscription_logs';
    public const BUILDINGS = 'buildings';
    public const BUILDING_OWNER = 'building_owner';
    public const HR_EDUCATION = 'hr_education';
    public const HR_JOB = 'hr_job';
    public const HR_SERVICE = 'hr_service';
    public const PLAN_SERVICE = 'plan_service';

    public const FLOOR_OWNER = 'floor_owner';
    public const OFFICE_PLAN = 'office_plan';

    public static function getValues(): array
    {
        return [];
    }

    public static function getTranslationKeys(): array
    {
        return [];
    }
}
