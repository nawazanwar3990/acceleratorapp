<?php

declare(strict_types=1);

namespace App\Enum;

use App\Models\PackageManagement\Module;
use App\Models\UserManagement\Permission;
use App\Models\UserManagement\Role;
use App\Models\UserManagement\RolePermission;

class ModuleEnum extends AbstractEnum
{
    private static $permissions;

    public static function getValues(): array
    {
        return [
        ];
    }

    public static function get_all_modules($ability = null): array
    {
        return [
            KeyWordEnum::DASHBOARD,
            KeyWordEnum::PACKAGE_MANAGEMENT => array(
                $ability . KeyWordEnum::MODULE,
                $ability . KeyWordEnum::DURATION,
                $ability . KeyWordEnum::PACKAGE,
                $ability . KeyWordEnum::SUBSCRIPTION,
                $ability . KeyWordEnum::SUBSCRIPTION_LOG,
                $ability . KeyWordEnum::PAYMENT,
            ),
            KeyWordEnum::USER_MANAGEMENT => array(
                $ability . KeyWordEnum::ROLE,
                $ability . KeyWordEnum::PERMISSION,
                $ability . KeyWordEnum::USER,
                $ability . KeyWordEnum::SYNC_PERMISSION
            ),
            KeyWordEnum::SERVICE_MANAGEMENT => array(
                $ability . KeyWordEnum::SERVICE
            ),
            KeyWordEnum::FREELANCER_MANAGEMENT => array(
                $ability . KeyWordEnum::FREELANCER
            ),
            KeyWordEnum::BUSINESS_ACCELERATOR => array(
                $ability . KeyWordEnum::BUSINESS_ACCELERATOR
            ),
            KeyWordEnum::CUSTOMER_MANAGEMENT => array(
                $ability . KeyWordEnum::CUSTOMER
            ),
            KeyWordEnum::PLAN_MANAGEMENT => array(
                $ability . KeyWordEnum::PLAN
            ),
            KeyWordEnum::CO_WORKING_SPACE => array(
                $ability . KeyWordEnum::BUILDING,
                $ability . KeyWordEnum::FLOOR_TYPE,
                $ability . KeyWordEnum::FLOOR,
                $ability . KeyWordEnum::OFFICE_TYPE,
                $ability . KeyWordEnum::OFFICE
            )
        ];
    }

    public static function get_package_modules()
    {
        return array(
            KeyWordEnum::CO_WORKING_SPACE => array(
                KeyWordEnum::BUILDING,
                KeyWordEnum::FLOOR,
                KeyWordEnum::OFFICE
            )
        );
    }

    public static function get_all_custom_permissions(): array
    {
        return [

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
        self::add_permissions_to_super_admin();
        self::add_admin_permissions();
        self::$permissions = array();
        self::add_customer_permissions();
    }

    public static function add_customer_permissions()
    {
        $permissions = self::customer_permissions();
        $role = Role::where('slug', RoleEnum::CUSTOMER)->first();
        foreach ($permissions as $parent_key => $parent_value) {
            if (is_array($parent_value)) {
                self::get_view_permission_by_slug($parent_key);
                foreach ($parent_value as $value) {
                    self::get_view_permission_by_slug($value);
                }
            } else {
                self::get_view_permission_by_slug($parent_value);
            }
        }
        $role->permissions()->sync(self::$permissions);
    }

    public static function add_admin_permissions()
    {
        $permissions = self::admin_permissions();
        $role = Role::where('slug', RoleEnum::BUSINESS_ACCELERATOR)->first();
        foreach ($permissions as $parent_key => $parent_value) {
            if (is_array($parent_value)) {
                self::get_view_permission_by_slug($parent_key);
                foreach ($parent_value as $value) {
                    self::get_permissions_by_slug($value);
                }
            } else {
                self::get_permissions_by_slug($parent_value);
            }
        }
        $role->permissions()->sync(self::$permissions);

    }

    public static function customer_permissions()
    {
        return array(
            KeyWordEnum::CO_WORKING_SPACE => array(
                KeyWordEnum::BUILDING,
                KeyWordEnum::FLOOR,
                KeyWordEnum::OFFICE
            ),
        );
    }

    public static function admin_permissions()
    {
        return array(
            KeyWordEnum::SERVICE_MANAGEMENT => array(
                KeyWordEnum::SERVICE
            ),
            KeyWordEnum::PACKAGE_MANAGEMENT => array(
                KeyWordEnum::PACKAGE,
                KeyWordEnum::SUBSCRIPTION,
                KeyWordEnum::SUBSCRIPTION_LOG,
                KeyWordEnum::PAYMENT
            ),
            KeyWordEnum::CO_WORKING_SPACE => array(
                KeyWordEnum::BUILDING,
                KeyWordEnum::FLOOR_TYPE,
                KeyWordEnum::FLOOR,
                KeyWordEnum::OFFICE_TYPE,
                KeyWordEnum::OFFICE
            ),
            KeyWordEnum::PLAN_MANAGEMENT => array(
                KeyWordEnum::PLAN
            )
        );
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

    private static function get_view_permission_by_slug($slug)
    {
        $slug = AbilityEnum::VIEW . "_" . $slug;
        $permission = Permission::where('slug', $slug)->value('id');
        self::$permissions[] = $permission;
    }

    private static function get_permissions_by_slug($slug)
    {
        $view_slug = AbilityEnum::VIEW . "_" . $slug;
        self::$permissions[] = Permission::where('slug', $view_slug)->value('id');

        $create_slug = AbilityEnum::CREATE . "_" . $slug;
        self::$permissions[] = Permission::where('slug', $create_slug)->value('id');

        $update_slug = AbilityEnum::UPDATE . "_" . $slug;
        self::$permissions[] = Permission::where('slug', $update_slug)->value('id');

        $delete_slug = AbilityEnum::DELETE . "_" . $slug;
        self::$permissions[] = Permission::where('slug', $delete_slug)->value('id');
    }
}
