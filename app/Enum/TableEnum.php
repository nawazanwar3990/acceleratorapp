<?php

namespace App\Enum;

class TableEnum extends AbstractEnum
{

    public const USERS = 'users';
    public const VISITOR_BOOKS = 'visitor_books';
    public const POSTAL_RECEIVES = 'postal_receives';
    public const SYSTEM_SETTINGS = 'system_settings';
    public const COMPLAINS = 'complains';
    public const ASSETS_INVENTORIES = 'assets_inventories';
    public const PHONE_CALL_LOGS = 'phone_call_logs';
    public const SALE_ENQUIRIES = 'sale_enquiries';
    public const POSTAL_DISPATCHES = 'postal_dispatches';
    public const ASSETS_LOCATION = 'assets_locations';
    public const BUILDINGS = 'buildings';
    public const SOURCES = 'sources';
    public const ASSETS_UNITS = 'assets_units';
    public const CALL_TYPES = 'call_types';
    public const REFERENCES = 'references';
    public const PURPOSES = 'purposes';
    public const COMPLAIN_TYPES = 'complain_types';
    public const ACCOUNT_HEADS = 'account_heads';
    public const EXPENSE_HEADS = 'expense_heads';
    public const EXPENSES = 'expenses';
    public const MEDIA = 'media';
    public const SERVICES = 'services';
    public const FLOOR_NAMES = 'floor_names';
    public const FLOOR_TYPES = 'floor_types';
    public const BUILDING_SERVICES = 'building_services';
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
    public const BUSINESS_OWNERS = 'building_owners';
    public const FLAT_TYPES = 'flat_types';
    public const FLATS = 'flats';
    public const FLAT_OWNERS = 'flat_owners';
    public const VOUCHER_PREFIXES = 'voucher_prefixes';
    public const FISCAL_YEARS = 'fiscal_years';
    public const TRANSACTIONS = 'transactions';
    public const SALES = 'sales';
    public const COMMODITY_TYPES = 'commodity_types';
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
    public const EMPLOYEE_LOANS = 'employee_loans';
    public const QUOTATIONS = 'quotations';
    public const QUOTATION_INSTALLMENTS = 'quotation_installments';
    public const BUSINESSES = 'businesses';
    public const SALES_COMMODITIES = 'sales_commodities';

    public const TABLE_NOTIFICATIONS = 'notifications';
    public const ROLES = 'roles';
    public const PERMISSIONS = 'permissions';
    public const ROLE_USER = 'role_user';
    public const ROLE_PERMISSION = 'role_permission';

    public const MODULES = 'modules';
    public const PLANS ='plans' ;

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
