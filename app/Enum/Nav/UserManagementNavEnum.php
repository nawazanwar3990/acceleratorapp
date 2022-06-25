<?php

namespace App\Enum\Nav;

use App\Enum\AbstractEnum;
use App\Enum\KeyWordEnum;

class UserManagementNavEnum extends AbstractEnum
{
    public const DEFINITION = KeyWordEnum::DEFINITION;
    public const PERMISSION = KeyWordEnum::PERMISSION;
    public const SYNC_PERMISSION = KeyWordEnum::SYNC_PERMISSION;
    public const ROLE = KeyWordEnum::ROLE;
    public const USER = KeyWordEnum::USER;
    public const HR_PERSON = KeyWordEnum::HR_PERSON;

    public static function getValues(): array
    {
        return [
            self::DEFINITION,
            self::PERMISSION,
            self::SYNC_PERMISSION,
            self::ROLE,
            self::USER,
            self::HR_PERSON
        ];
    }

    public static function getIcon($key = null): ?string
    {
        $routes = [
            self::DEFINITION => '<i class="mdi mdi-account"></i>',
            self::PERMISSION => '<i class="mdi mdi-account"></i>',
            self::SYNC_PERMISSION => '<i class="mdi mdi-account"></i>',
            self::ROLE => '<i class="far fa-user"></i>',
            self::USER => '<i class="far fa-user"></i>',
            self::HR_PERSON => '<i class="mdi mdi-account"></i>',
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
            self::DEFINITION => __(sprintf('%s.%s', 'general', self::DEFINITION)),
            self::PERMISSION => __(sprintf('%s.%s', 'general', self::PERMISSION)),
            self::SYNC_PERMISSION => __(sprintf('%s.%s', 'general', self::SYNC_PERMISSION)),
            self::ROLE => __(sprintf('%s.%s', 'general', self::ROLE)),
            self::USER => __(sprintf('%s.%s', 'general', self::USER)),
            self::HR_PERSON => __(sprintf('%s.%s', 'general', self::HR_PERSON)),
        ];
    }

    public static function getRoute($key = null)
    {
        $routes = array(
            self::HR_PERSON => route('dashboard.human-resource.index'),
            self::PERMISSION => route('dashboard.permissions.index'),
            self::SYNC_PERMISSION => route('dashboard.sync-permissions.index'),
            self::ROLE => route('dashboard.roles.index'),
            self::USER => route('dashboard.users.index'),
        );
        if (!is_null($key) && array_key_exists($key, $routes)) {
            return $routes[$key];
        } else {
            return null;
        }
    }
}
