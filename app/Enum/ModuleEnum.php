<?php

declare(strict_types=1);

namespace App\Enum;

use App\Models\Authorization\Permission;
use App\Models\Authorization\RolePermission;
use App\Models\Module;
use App\Services\GeneralService;

class ModuleEnum extends AbstractEnum
{
    public static function getValues(): array
    {
        return [
        ];
    }

    public static function get_all_modules($ability = null): array
    {
        return [
            KeyWordEnum::DASHBOARD,
            KeyWordEnum::DEFINITIONS => array(
                KeyWordEnum::GENERAL => array(
                    $ability . KeyWordEnum::SERVICES,
                    $ability . KeyWordEnum::FLOOR_NAMES,
                    $ability . KeyWordEnum::FLOOR_TYPES,
                    $ability . KeyWordEnum::FLAT_TYPES,
//                    $ability . KeyWordEnum::COMMODITY_TYPES,
                ),
                KeyWordEnum::HUMAN_RESOURCE => array(
                    $ability . KeyWordEnum::RELATIONS,
                    $ability . KeyWordEnum::CAST,
                    $ability . KeyWordEnum::TAX_TYPE,
                    $ability . KeyWordEnum::TAX_STATUS,
                    $ability . KeyWordEnum::NATIONALITY,
                    $ability . KeyWordEnum::COUNTRY,
                    $ability . KeyWordEnum::PROVINCE,
                    $ability . KeyWordEnum::DISTRICT,
                    $ability . KeyWordEnum::TEHSIL,
                    $ability . KeyWordEnum::COLONY,
                    $ability . KeyWordEnum::DEPARTMENT,
                    $ability . KeyWordEnum::DESIGNATION,
                    $ability . KeyWordEnum::MINISTRY,
                    $ability . KeyWordEnum::PROFESSION,
                    $ability . KeyWordEnum::ORGANIZATION,
                    $ability . KeyWordEnum::HR_BUSINESS,
                ),
                KeyWordEnum::DEVICE => array(
                    $ability . KeyWordEnum::DEVICE_TYPE,
                    $ability . KeyWordEnum::DEVICE_MODEL,
                    $ability . KeyWordEnum::DEVICE_MAKE,
                    $ability . KeyWordEnum::DEVICE_LOCATION,
                    $ability . KeyWordEnum::DEVICE_OPERATING_SYSTEM,
                    $ability . KeyWordEnum::DEVICE_CLASS,
                )
            ),
            KeyWordEnum::DEVICE_MANAGEMENT => array(
                $ability . KeyWordEnum::DEVICE
            ),
            KeyWordEnum::BUILDING_UNITS => array(
                $ability . KeyWordEnum::BUILDINGS,
                $ability . KeyWordEnum::FLOORS,
                $ability . KeyWordEnum::FLATS_SHOPS,
                $ability . KeyWordEnum::SHARED_SPACE,
                $ability . KeyWordEnum::BUILDING_UNITS_ALLOTMENT,
            ),
            KeyWordEnum::HUMAN_RESOURCE => array(
                $ability . KeyWordEnum::HR_PERSONS,
                $ability . KeyWordEnum::SUPPLIERS,
                $ability . KeyWordEnum::SELLERS,
                $ability . KeyWordEnum::BUYERS,
                $ability . KeyWordEnum::EMPLOYEES,
                $ability . KeyWordEnum::BROKERS,
                $ability . KeyWordEnum::NOMINEE_REGISTRATION,
            ),
            KeyWordEnum::FRONT_DESK => array(
                KeyWordEnum::FRONT_DESK_SETUP => array(
                    $ability . KeyWordEnum::CALL_TYPE,
                    $ability . KeyWordEnum::COMPLAIN_TYPE,
                    $ability . KeyWordEnum::SOURCE,
                    $ability . KeyWordEnum::REFERENCE,
                    $ability . KeyWordEnum::PURPOSE,
                ),
                $ability . KeyWordEnum::SALES_ENQUIRY,
                $ability . KeyWordEnum::VISITOR_BOOK,
                $ability . KeyWordEnum::PHONE_CALL_LOG,
                $ability . KeyWordEnum::POSTAL_DISPATCH,
                $ability . KeyWordEnum::POSTAL_RECEIVE,
                $ability . KeyWordEnum::COMPLAIN,
            ),
            KeyWordEnum::FIXED_ASSETS => array(
                $ability . KeyWordEnum::ASSETS_INVENTORY,
                $ability . KeyWordEnum::ASSETS_LOCATION,
                $ability . KeyWordEnum::ASSETS_UNIT,
            ),
            KeyWordEnum::SALES => array(
                $ability . KeyWordEnum::TITLE_TRANSFER,
                $ability . KeyWordEnum::SALES_LISTING,
                $ability . KeyWordEnum::COMMODITY_DEAL_CLOSING,
                $ability . KeyWordEnum::INSTALLMENT_PLANS,
                $ability . KeyWordEnum::INSTALLMENT_TERM,
                $ability . KeyWordEnum::SALES_QUOTATION,
            ),
            KeyWordEnum::INCOME_EXPENSE => array(
                $ability . KeyWordEnum::INCOME_HEAD,
                $ability . KeyWordEnum::INCOME_COLLECTION,
                $ability . KeyWordEnum::INCOME_STATEMENT,
                $ability . KeyWordEnum::EXPENSE_HEAD,
                $ability . KeyWordEnum::EXPENSES,
                $ability . KeyWordEnum::EXPENSES_STATEMENT,
            ),
            KeyWordEnum::ACCOUNTS => array(
                KeyWordEnum::VOUCHERS => array(
                    $ability . KeyWordEnum::BUYER_CASH_RECEIVING,
                    $ability . KeyWordEnum::BUYER_INSTALLMENT_RECEIVING,
                    $ability . KeyWordEnum::SUPPLIER_PAYMENT,
                    $ability . KeyWordEnum::SELLER_PAYMENT,
                    $ability . KeyWordEnum::BROKER_PAYMENT,
                    $ability . KeyWordEnum::DEBIT_VOUCHER,
                    $ability . KeyWordEnum::CREDIT_VOUCHER,
                    $ability . KeyWordEnum::OPENING_BALANCE_VOUCHER,
                ),

                KeyWordEnum::LEDGERS => array(
                    $ability . KeyWordEnum::SUPPLIER_LEDGER,
                    $ability . KeyWordEnum::SELLER_LEDGER,
                    $ability . KeyWordEnum::BUYER_LEDGER,
                    $ability . KeyWordEnum::BROKER_LEDGER,
                    $ability . KeyWordEnum::GENERAL_LEDGER,
                ),

                KeyWordEnum::PAYROLL => array(
                    $ability . KeyWordEnum::ADVANCE_SALARY,
                    $ability . KeyWordEnum::SALARY_RECORDS,
                ),

                KeyWordEnum::EMPLOYEE_LOAN => array(
                    $ability . KeyWordEnum::EMPLOYEE_LOAN_RECORDS,
                    $ability . KeyWordEnum::EMPLOYEE_LOAN_RECEIVING,
                ),
                $ability . KeyWordEnum::CREATE_ACCOUNT_HEAD,
            ),
            KeyWordEnum::REPORTS => array(
                $ability . KeyWordEnum::CASH_BOOK,
                $ability . KeyWordEnum::PROFIT_LOSS,
                $ability . KeyWordEnum::BALANCE_SHEET,
                $ability . KeyWordEnum::BROKER_REPORT,
                $ability . KeyWordEnum::AGING_REPORT,
                $ability . KeyWordEnum::PENDING_COLLECTIONS,
                $ability . KeyWordEnum::COLLECTED_PAYMENTS,
                $ability . KeyWordEnum::CASH_ONLY_DEALINGS,
                $ability . KeyWordEnum::COMMODITY_ONLY_DEALINGS,
                $ability . KeyWordEnum::CASH_COMMODITY_DEALINGS,
                $ability . KeyWordEnum::COMMODITY_EXPECTED_VALUE,
                $ability . KeyWordEnum::FLAT_WISE_PROFIT_LOSS,
                $ability . KeyWordEnum::SALES_REPORT,
                $ability . KeyWordEnum::BROKER_WISE_SALES,
                $ability . KeyWordEnum::PURCHASE_REPORT,
                $ability . KeyWordEnum::STOCK_REPORT,
            ),
            KeyWordEnum::INVENTORY => array(
                $ability . KeyWordEnum::PURCHASE_STOCK,
                $ability . KeyWordEnum::OWN_STOCK,
                $ability . KeyWordEnum::INVESTOR_STOCK,
            ),
            KeyWordEnum::AUTHORIZATION => array(
                $ability . KeyWordEnum::PERMISSIONS,
                $ability . KeyWordEnum::SYNC_PERMISSIONS,
                $ability . KeyWordEnum::ROLES,
                $ability . KeyWordEnum::USERS,
            ),
            KeyWordEnum::PRINT => array(
                $ability . KeyWordEnum::INSTALLMENT_PLANS,
                $ability . KeyWordEnum::FLAT_OWNERS,
                $ability . KeyWordEnum::NOMINEE_PRINT,
                $ability . KeyWordEnum::HR_PRINT,
                $ability . KeyWordEnum::TITLE_TRANSFER_PRINT,
            ),
            KeyWordEnum::SETTINGS => array(
                $ability . KeyWordEnum::SYSTEM_SETTINGS,
                $ability . KeyWordEnum::BUSINESS_SETTINGS,
            )
        ];
    }

    public static function get_all_custom_permissions(): array
    {
        return [
            /*
             *  Format should be like the below Commented Code
            'all_is_well'
            */
        ];
    }

    public static function getTranslationKeys(): array
    {
        return array();
    }

    public static function sync_module_permissions()
    {
        foreach (self::get_all_modules() as $outer_key => $outer_value) {
            if (is_array($outer_value)) {
                self::make_module($outer_key, $outer_key, $outer_key);
                self::add_permission($outer_key, 'parent');
                foreach ($outer_value as $inner_key => $inner_value) {
                    if (is_array($inner_value)) {
                        self::make_module($outer_key, $inner_key, $inner_key);
                        self::add_permission($inner_key, 'parent');
                        foreach ($inner_value as $child_key => $child_value) {
                            if (is_array($child_value)) {
                                self::add_permission($child_key, 'parent');
                            }else{
                                self::make_module($outer_key, $inner_key, $child_value);
                                self::add_permission($child_value, null);
                            }
                        }
                    } else {
                        self::make_module($outer_key, null, $inner_value);
                        self::add_permission($inner_value,null);
                    }
                }
            } else {
                self::make_module($outer_key, null, $outer_value);
                self::add_permission($outer_value, 'parent');
            }
        }
        self::add_custom_permissions();
        self::add_permissions_to_super_admin();
    }

    private static function add_permissions_to_super_admin()
    {
        foreach (Permission::all() as $permission) {

            RolePermission::updateOrCreate([
                'permission_id' => $permission->id,
                'role_id' => 1
            ], [
                'permission_id' => $permission->id,
                'role_id' => 1
            ]);
        }
    }

    private static function make_module($outer_key, $inner_key, $value)
    {
        Module::updateOrCreate([
            'name' => $value
        ], [
            'name' => $value,
            'parent_type' => $outer_key,
            'child_type' => $inner_key
        ]);
    }

    private static function add_permission($permission, $parent)
    {
        if ($parent) {
            $name = AbilityEnum::VIEW . " " . ucwords(str_replace('_', ' ', $permission));
            $slug = AbilityEnum::VIEW . "_" . strtolower(str_replace(' ', '_', $permission));
            Permission::updateOrCreate([
                'slug' => $slug
            ], [
                'name' => $name,
                'function_name' => str_replace('_', ' ', $permission)
            ]);
        } else {
            foreach (AbilityEnum::getValues() as $ability) {
                $name = $ability . " " . ucwords(str_replace('_', ' ', $permission));
                $slug = $ability . "_" . strtolower(str_replace(' ', '_', $permission));
                Permission::updateOrCreate([
                    'slug' => $slug
                ], [
                    'name' => $name,
                    'function_name' => str_replace('_', ' ', $permission)
                ]);
            }
        }
    }

    private static function add_custom_permissions()
    {
        foreach (self::get_all_custom_permissions() as $custom_permission) {
            $slug = strtolower(str_replace(' ', '_', $custom_permission));
            Permission::updateOrCreate([
                'slug' => $slug
            ], [
                'name' => $custom_permission,
                'function_name' => str_replace('_', ' ', $custom_permission)
            ]);
        }
    }
}
