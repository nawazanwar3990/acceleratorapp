<?php

namespace App\Enum;

class TableEnum extends AbstractEnum
{

    public const USERS = 'users';
    public const SETTINGS = 'settings';
    public const COMPLAINS = 'complains';
    public const SOURCES = 'sources';
    public const REFERENCES = 'references';
    public const PURPOSES = 'purposes';

    public const MEDIA = 'media';
    public const SERVICES = 'services';
    public const FLOOR_NAMES = 'floor_names';
    public const FLOOR_TYPES = 'floor_types';

    public const FLOORS = 'floors';
    public const HR_CASTS = 'hr_casts';
    public const HR_RELATIONS = 'hr_relations';
    public const HRS = 'hrs';
    public const HR_NATIONALITIES = 'hr_nationalities';
    public const HR_EMPLOYEE_TYPES = 'hr_employee_types';
    public const HR_TAX_TYPES = 'hr_tax_types';
    public const HR_TAX_STATUSES = 'hr_tax_statuses';
    public const HR_MINISTRIES = 'hr_ministries';
    public const HR_ORGANIZATIONS = 'hr_organizations';
    public const HR_DEPARTMENT = 'hr_departments';
    public const HR_DESIGNATION = 'hr_designations';
    public const HR_PROFESSIONS = 'hr_professions';
    public const COUNTRIES = 'countries';
    public const PROVINCES = 'provinces';
    public const DISTRICTS = 'districts';
    public const TEHSILS = 'tehsils';
    public const COLONIES = 'colonies';
    public const HR_BUSINESSES = 'hr_businesses';
    public const FLAT_TYPES = 'flat_types';
    public const FLATS = 'flats';
    public const FLAT_OWNER = 'flat_owner';
    public const VOUCHER_PREFIXES = 'voucher_prefixes';
    public const SALES = 'sales';
    public const INSTALLMENT_PLANS = 'installment_plans';
    public const NOMINEES = 'nominees';
    public const PURCHASERS = 'purchasers';
    public const BROKERS = 'brokers';
    public const INSTALLMENTS = 'installments';
    public const POA = 'power_of_attorneys';
    public const PURCHASES = 'purchases';

    public const DEVICE_CLASSES = 'device_classes';
    public const DEVICE_LOCATIONS = 'device_locations';
    public const DEVICE_MAKES = 'device_makes';
    public const DEVICE_MODELS = 'device_models';
    public const DEVICE_OPERATING_SYSTEMS = 'device_operating_systems';
    public const DEVICE_TYPES = 'device_types';
    public const DEVICES = 'devices';
    public const EMPLOYEES = 'employees';
    public const SALARIES = 'salaries';
    public const QUOTATION_INSTALLMENTS = 'quotation_installments';

    public const TABLE_NOTIFICATIONS = 'notifications';
    public const ROLES = 'roles';
    public const PERMISSIONS = 'permissions';
    public const ROLE_USER = 'role_user';
    public const ROLE_PERMISSION = 'role_permission';

    public const MODULES = 'modules';
    public const PLANS = 'plans';
    public const EVENTS = 'events';
    public const FLAT_SERVICE = 'flat_service';

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
