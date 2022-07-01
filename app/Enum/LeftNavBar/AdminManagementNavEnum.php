<?php
namespace App\Enum\LeftNavBar;

use App\Enum\AbstractEnum;
use App\Enum\KeyWordEnum;

class AdminManagementNavEnum extends AbstractEnum
{
    public const ADMIN = KeyWordEnum::ADMIN;
    public static function getValues(): array
    {
        return [
            self::ADMIN,
        ];
    }

    public static function getIcon($key = null): ?string
    {
        $routes = [
            self::ADMIN => '<i class="mdi mdi-account"></i>'


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
            self::ADMIN => __(sprintf('%s.%s', 'general', self::ADMIN)),
        ];
    }

    public static function getRoute($key = null)
    {
        $routes = array(
            self::ADMIN => route('dashboard.admins.index'),
        );
        if (!is_null($key) && array_key_exists($key, $routes)) {
            return $routes[$key];
        } else {
            return null;
        }
    }
}
