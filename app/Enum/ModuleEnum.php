<?php

declare(strict_types=1);

namespace App\Enum;

use App\Models\Authorization\Permission;
use App\Models\Authorization\RolePermission;
use App\Models\Module;

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
            KeyWordEnum::DEFINITION => array(
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
                )
            ),
            KeyWordEnum::USER_MANAGEMENT_SYSTEM => array(

                $ability . KeyWordEnum::HR_PERSONS,
                $ability . KeyWordEnum::ROLE,
                $ability . KeyWordEnum::PERMISSION,
                $ability . KeyWordEnum::USER,
                $ability . KeyWordEnum::SYNC_PERMISSION

            ),
            KeyWordEnum::FRONT_DESK_MANAGEMENT_SYSTEM,
            KeyWordEnum::INVOICE_TICKET_AND_ACCOUNTING,
            KeyWordEnum::REPORTING_AND_STAT_HANDLING,
            KeyWordEnum::SYSTEM_CONFIGURATION,
            KeyWordEnum::SERVICE_CREATION,
            KeyWordEnum::PACKAGES_PLAIN => array(
                $ability . KeyWordEnum::PLAN
            ),
            KeyWordEnum::FREELANCE_AND_MENTOR,
            KeyWordEnum::CO_WORKING_SPACE_ALLOTMENT_AND_HANDLING,
            KeyWordEnum::MEETING_APPOINTMENT_AND_EVENT_MANAGEMENT,


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
                            } else {
                                self::make_module($outer_key, $inner_key, $child_value);
                                self::add_permission($child_value, null);
                            }
                        }
                    } else {
                        self::make_module($outer_key, null, $inner_value);
                        self::add_permission($inner_value, null);
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
