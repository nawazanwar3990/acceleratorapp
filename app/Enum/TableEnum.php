<?php

namespace App\Enum;

class TableEnum extends AbstractEnum
{
    const USERS = 'users';
    const PASSWORD_RESETS = 'password_resets';
    const SERVICES = 'services';
    const MEDIA = 'media';
    const FLOOR_TYPES = 'floor_types';
    const HR_RELATIONS = 'hr_relations';
    const HR_ORGANIZATIONS = 'hr_organizations';
    const HR_DEPARTMENT = 'hr_departments';
    const HR_PROFESSIONS = 'hr_professions';
    const HR_DESIGNATION = 'hr_designations';
    const COUNTRIES = 'countries';
    const PROVINCES = 'provinces';
    const DISTRICTS = 'districts';
    const HRS = 'hrs';
    const FLOORS = 'floors';
    const FLAT_TYPES = 'flat_types';
    const FLATS = 'flats';
    const FLAT_SERVICE = 'flat_service';
    const FLAT_OWNER = 'flat_owner';
    const PLANS = 'plans';
    const INSTALLMENT_TERMS = 'installment_terms';
    const INSTALLMENTS = 'installments';
    const SETTINGS = 'settings';
    const ROLES = 'roles';
    const PERMISSIONS = 'permissions';
    const ROLE_USER = 'role_user';
    const ROLE_PERMISSION = 'role_permission';
    const MODULES = 'modules';
    const EVENTS = 'events';
    const PACKAGES = 'packages';
    const PACKAGE_MODULE = 'package_module';
    const DURATIONS = 'durations';
    const SUBSCRIPTIONS = 'subscriptions';
    const PAYMENTS = 'payments';
    const SUBSCRIPTION_LOGS = 'subscription_logs';


    /**
     * @inheritDoc
     */
    public static function getValues(): array
    {
        return [];
    }

    /**
     * @inheritDoc
     */
    public static function getTranslationKeys(): array
    {
        return [];
    }
}
