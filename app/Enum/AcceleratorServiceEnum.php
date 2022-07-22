<?php

declare(strict_types=1);

namespace App\Enum;

use App\Models\User;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class AcceleratorServiceEnum extends AbstractEnum
{
    public const FREELANCER = KeyWordEnum::FREELANCER;
    public const INVESTOR = KeyWordEnum::INVESTOR;
    public const INCUBATOR = KeyWordEnum::INCUBATOR;

    public static function getValues(): array
    {
        return [
            self::FREELANCER,
            self::INVESTOR,
            self::INCUBATOR
        ];
    }

    public static function getTranslationKeys(): array
    {
        return [
            self::INCUBATOR => __('general.' . self::INCUBATOR),
            self::FREELANCER => __('general.' . self::FREELANCER),
            self::INVESTOR => __('general.' . self::INVESTOR)
        ];
    }

    public static function getImage($key)
    {
        $images = array(
            self::INCUBATOR => asset('images/screen2.jpg'),
            self::FREELANCER => asset('images/screen3.jpg'),
            self::INVESTOR => asset('images/screen4.jpg')
        );
        if (!is_null($key) && array_key_exists($key, $images)) {
            return $images[$key];
        } else {
            return null;
        }
    }

    public static function getRoute($key)
    {
        $images = array(
            self::INCUBATOR => route('website.offices.index'),
            self::FREELANCER => route('website.freelancers.index'),
            self::INVESTOR => route('website.investors.index'),
        );
        if (!is_null($key) && array_key_exists($key, $images)) {
            return $images[$key];
        } else {
            return null;
        }
    }

    public static function getRouteName($key): ?string
    {
        $routes = array(
            self::INCUBATOR => 'website.co-working-spaces.index',
            self::FREELANCER => 'website.freelancers.index',
            self::INVESTOR => 'website.investors.index',
        );
        if (!is_null($key) && array_key_exists($key, $routes)) {
            return $routes[$key];
        } else {
            return null;
        }
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
    public static function listAllAdminsByPaginations(){
        return User::whereHas('roles',function ($q){
            $q->where('slug',RoleEnum::ADMIN);
        })->paginate(20);
    }
}
