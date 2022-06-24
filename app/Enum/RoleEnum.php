<?php

declare(strict_types=1);

namespace App\Enum;

use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class RoleEnum extends AbstractEnum
{
    public const ROLE_SUPER_ADMIN = 'super-admin';
    public const SERVICE_PROVIDER = 'service-provider';
    public const INCUBATOR = 'incubator';
    public const FREELANCER = 'freelancer';
    public const MENTOR = 'mentor';
    public const CLIENT = 'client';
    public const CUSTOMER = 'customer';

    public static function getValues(): array
    {
        return [
            self::ROLE_SUPER_ADMIN,
            self::SERVICE_PROVIDER,
            self::INCUBATOR,
            self::FREELANCER,
            self::MENTOR,
            self::CLIENT,
            self::CUSTOMER
        ];
    }

    public static function getTranslationKeys(): array
    {
        return [
            self::ROLE_SUPER_ADMIN => __(self::ROLE_SUPER_ADMIN),
            self::SERVICE_PROVIDER => __(self::SERVICE_PROVIDER),
            self::INCUBATOR => __(self::INCUBATOR),
            self::FREELANCER => __(self::FREELANCER),
            self::MENTOR => __(self::MENTOR),
            self::CLIENT => __(self::CLIENT),
            self::CUSTOMER => __(self::CUSTOMER),
        ];
    }

    public static function check_permission($user, $permission): bool
    {
        $permissions = self::get_query($user);
        $key = CacheEnum::CHECK_PERMISSION."_".$permission;
        return Cache::remember($key, 3600, function () use($key,$permissions,$permission) {
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
        return Cache::remember(CacheEnum::CURRENT_USER_PERMISSION,3600, function () {
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
