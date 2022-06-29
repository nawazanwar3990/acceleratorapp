<?php

declare(strict_types=1);

namespace App\Enum;

use App\Models\PackageManagement\Module;
use App\Models\UserManagement\Permission;
use App\Models\UserManagement\RolePermission;

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
            KeyWordEnum::PACKAGE_MANAGEMENT=>array(
                $ability . KeyWordEnum::MODULE,
                $ability . KeyWordEnum::DURATION,
                $ability . KeyWordEnum::PACKAGE,
            ),
            KeyWordEnum::VENDOR,
            KeyWordEnum::CLIENT,
            KeyWordEnum::USER_MANAGEMENT => array(
                $ability . KeyWordEnum::ROLE,
                $ability . KeyWordEnum::PERMISSION,
                $ability . KeyWordEnum::USER,
                $ability . KeyWordEnum::SYNC_PERMISSION,
                $ability . KeyWordEnum::RELATIONS,
                $ability . KeyWordEnum::COUNTRY,
                $ability . KeyWordEnum::PROVINCE,
                $ability . KeyWordEnum::DISTRICT,
                $ability . KeyWordEnum::DEPARTMENT,
                $ability . KeyWordEnum::DESIGNATION,
                $ability . KeyWordEnum::PROFESSION,
                $ability . KeyWordEnum::ORGANIZATION,
                $ability . KeyWordEnum::HR_PERSON
            ),
            KeyWordEnum::SERVICE_MANAGEMENT=>array(
                $ability . KeyWordEnum::SERVICE
            ),
            KeyWordEnum::FREELANCERS_PORTAL=>array(
                $ability . KeyWordEnum::FREELANCERS
            ),
            KeyWordEnum::CO_WORKING_SPACE=>array(
                $ability . KeyWordEnum::BUILDING,
                $ability . KeyWordEnum::SHOP,
                $ability . KeyWordEnum::ROOM,
                $ability . KeyWordEnum::FLAT_TYPE,
                $ability . KeyWordEnum::FLOOR_TYPE,
                $ability . KeyWordEnum::FLOOR,
                $ability . KeyWordEnum::FLAT
            ),
            KeyWordEnum::FREELANCER,
            KeyWordEnum::INVESTOR,
            KeyWordEnum::SERVICE_PROVIDER,
            KeyWordEnum::EVENT_MANAGEMENT => array(
                $ability . KeyWordEnum::EVENT
            ),
            KeyWordEnum::SYSTEM_CONFIGURATION => array(
                $ability . KeyWordEnum::SETTING
            ),
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
