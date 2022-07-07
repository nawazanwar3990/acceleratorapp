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
    const BUILDINGS = 'buildings';
    const BUILDING_OWNER = 'building_owner';
    const BUILDING_SERVICE = 'building_service';
    const SALES = 'sales';
    const FLAT_PRICE_LOGS = 'flat_price_logs';

    const QUOTATION_INSTALLMENTS = 'quotation_installments';
    const QUOTATIONS = 'quotations';
    const PURCHASERS = 'purchaser';
    const TRANSACTIONS = 'transaction';
    const FISCAL_YEARS = 'fiscal_years';
    const BROKERS = 'brokers';
    const ACCOUNT_HEADS = 'account_heads';
    const EXPENSE_HEADS = 'expense_heads';
    const EXPENSES = 'expenses';
    const FLOOR_SERVICE = 'floor_service';
    const FLOOR_OWNER = 'floor_owner';

    const FLAT_PLAN = 'flat_plan';
    const FLOOR_PLAN = 'floor_plan';
    const BUILDING_PLAN = 'building_plan';
    const HR_EDUCATION = 'hr_education';
    const HR_JOB = 'hr_job';


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
