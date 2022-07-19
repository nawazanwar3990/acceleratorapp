<?php

declare(strict_types=1);

namespace App\Enum;

use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class RoleEnum extends AbstractEnum
{
    public const SUPER_ADMIN = KeyWordEnum::SUPER_ADMIN;
    public const BUSINESS_ACCELERATOR = KeyWordEnum::BUSINESS_ACCELERATOR;
    public const CUSTOMER = KeyWordEnum::CUSTOMER;
    public const FREELANCER = KeyWordEnum::FREELANCER;
    public const INVESTOR = KeyWordEnum::INVESTOR;

    public static function getValues(): array
    {
        return [
            self::SUPER_ADMIN,
            self::BUSINESS_ACCELERATOR,
            self::CUSTOMER,
            self::FREELANCER,
            self::INVESTOR
        ];
    }

    public static function getTranslationKeys(): array
    {
        return [
            self::SUPER_ADMIN => __('general.' . self::SUPER_ADMIN),
            self::BUSINESS_ACCELERATOR => __('general.' . self::BUSINESS_ACCELERATOR),
            self::CUSTOMER => __('general.' . self::CUSTOMER),
            self::FREELANCER => __('general.' . self::FREELANCER),
            self::INVESTOR => __('general.' . self::INVESTOR),
        ];
    }
    public static function check_permission($user, $permission): bool
    {
        $permissions = self::get_query($user);
        $key = CacheEnum::CHECK_PERMISSION . "_" . $permission;
        return Cache::remember($key, 3600, function () use ($key, $permissions, $permission) {
            $permissions = $permissions->where('permissions.slug', $permission);
            if ($permissions->exists()) {
                return true;
            } else {
                return false;
            }
        });
    }

    public static function get_role_permission_array(): array
    {
        return Cache::remember(CacheEnum::CURRENT_USER_PERMISSION, 3600, function () {
            return self::get_query(Auth::user())->pluck('permissions.slug')->toArray();
        });
    }

    public static function get_query($user): Builder
    {
        return DB::table(TableEnum::PERMISSIONS)
            ->join(TableEnum::ROLE_PERMISSION, 'role_permission.permission_id', 'permissions.id')
            ->join(TableEnum::ROLES, 'role_permission.role_id', 'roles.id')
            ->join(TableEnum::ROLE_USER, 'role_user.role_id', 'roles.id')
            ->join(TableEnum::USERS, 'role_user.user_id', 'users.id')
            ->where('users.id', $user->id);
    }
}
