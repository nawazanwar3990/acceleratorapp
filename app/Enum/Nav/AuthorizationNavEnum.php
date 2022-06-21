<?php

namespace App\Enum\Nav;

use App\Enum\AbstractEnum;
use App\Enum\KeyWordEnum;

class AuthorizationNavEnum extends AbstractEnum
{
    public const PERMISSIONS = KeyWordEnum::PERMISSIONS;
    public const SYNC_PERMISSIONS = KeyWordEnum::SYNC_PERMISSIONS;
    public const ROLES = KeyWordEnum::ROLES;
    public const USERS = KeyWordEnum::USERS;

    public static function getValues(): array
    {
        return [
            self::PERMISSIONS,
            self::SYNC_PERMISSIONS,
            self::ROLES,
            self::USERS,
        ];
    }

    public static function getIcon($key = null): ?string
    {
        $routes = [
            self::PERMISSIONS => '<i class="mdi mdi-account"></i>',
            self::SYNC_PERMISSIONS => '<i class="mdi mdi-account"></i>',
            self::ROLES => '<i class="far fa-user"></i>',
            self::USERS => '<i class="far fa-user"></i>',
        ];
        if (!is_null($key) && array_key_exists($key, $routes)) {
            return $routes[$key];
        } else {
            return null;
        }
    }

    public static function getTranslationKeys(): array
    {
        return [
            self::PERMISSIONS => __(sprintf('%s.%s', 'general', self::PERMISSIONS)),
            self::SYNC_PERMISSIONS => __(sprintf('%s.%s', 'general', self::SYNC_PERMISSIONS)),
            self::ROLES => __(sprintf('%s.%s', 'general', self::ROLES)),
            self::USERS => __(sprintf('%s.%s', 'general', self::USERS)),
        ];
    }

    public static function getRoute($key = null)
    {
        $routes = array(
            self::PERMISSIONS => route('dashboard.permissions.index'),
            self::SYNC_PERMISSIONS => route('dashboard.sync-permissions.index'),
            self::ROLES => route('dashboard.roles.index'),
            self::USERS => route('dashboard.users.index'),
        );
        if (!is_null($key) && array_key_exists($key, $routes)) {
            return $routes[$key];
        } else {
            return null;
        }
    }
}
