<?php
namespace App\Enum\Nav;

use App\Enum\AbstractEnum;
use App\Enum\KeyWordEnum;

class SettingsNavEnum extends AbstractEnum
{
    public const SYSTEM_SETTINGS = KeyWordEnum::SYSTEM_SETTINGS;
    public const BUSINESS_SETTINGS = KeyWordEnum::BUSINESS_SETTINGS;


    public static function getValues(): array
    {
        return [
            self::SYSTEM_SETTINGS,
            self::BUSINESS_SETTINGS,
        ];
    }

    public static function getIcon($key = null): ?string
    {
        $routes = [
            self::SYSTEM_SETTINGS => '<i class="mdi mdi-account"></i>',
            self::BUSINESS_SETTINGS => '<i class="mdi mdi-account"></i>',
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
            self::SYSTEM_SETTINGS => __(sprintf('%s.%s', 'general', self::SYSTEM_SETTINGS)),
            self::BUSINESS_SETTINGS => __(sprintf('%s.%s', 'general', self::BUSINESS_SETTINGS)),
        ];
    }

    public static function getRoute($key = null)
    {
        $routes = array(
            self::SYSTEM_SETTINGS => route('dashboard.system-settings.index'),
            self::BUSINESS_SETTINGS => route('dashboard.business-settings.index'),
        );
        if (!is_null($key) && array_key_exists($key, $routes)) {
            return $routes[$key];
        } else {
            return null;
        }
    }
}
