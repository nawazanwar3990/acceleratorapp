<?php
namespace App\Enum\LeftNavBar;

use App\Enum\AbstractEnum;
use App\Enum\KeyWordEnum;

class SystemConfigurationNavEnum extends AbstractEnum
{
    public const SETTING = KeyWordEnum::SETTING;
    public static function getValues(): array
    {
        return [
            self::SETTING
        ];
    }

    public static function getIcon($key = null): ?string
    {
        $routes = [
            self::SETTING => '<i class="mdi mdi-account"></i>'
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
            self::SETTING => __(sprintf('%s.%s', 'general', self::SETTING))
        ];
    }

    public static function getRoute($key = null)
    {
        $routes = array(
            self::SETTING => route('dashboard.settings.index'),
        );
        if (!is_null($key) && array_key_exists($key, $routes)) {
            return $routes[$key];
        } else {
            return null;
        }
    }
}
