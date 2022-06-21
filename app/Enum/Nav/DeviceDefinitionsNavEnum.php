<?php
namespace App\Enum\Nav;

use App\Enum\AbstractEnum;
use App\Enum\KeyWordEnum;

class DeviceDefinitionsNavEnum extends AbstractEnum
{
    public const DEVICE_TYPE = KeyWordEnum::DEVICE_TYPE;
    public const DEVICE_MODEL = KeyWordEnum::DEVICE_MODEL;
    public const DEVICE_MAKE = KeyWordEnum::DEVICE_MAKE;
    public const DEVICE_LOCATION = KeyWordEnum::DEVICE_LOCATION;
    public const DEVICE_OPERATING_SYSTEM = KeyWordEnum::DEVICE_OPERATING_SYSTEM;
    public const DEVICE_CLASS = KeyWordEnum::DEVICE_CLASS;


    public static function getValues(): array
    {
        return [
            self::DEVICE_TYPE,
            self::DEVICE_MODEL,
            self::DEVICE_MAKE,
            self::DEVICE_LOCATION,
            self::DEVICE_OPERATING_SYSTEM,
            self::DEVICE_CLASS,

        ];
    }

    public static function getIcon($key = null): ?string
    {
        $routes = [
            self::DEVICE_TYPE => '<i class="mdi mdi-account"></i>',
            self::DEVICE_MODEL => '<i class="mdi mdi-account"></i>',
            self::DEVICE_MAKE => '<i class="mdi mdi-account"></i>',
            self::DEVICE_LOCATION => '<i class="mdi mdi-account"></i>',
            self::DEVICE_OPERATING_SYSTEM => '<i class="mdi mdi-account"></i>',
            self::DEVICE_CLASS => '<i class="mdi mdi-account"></i>',
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
            self::DEVICE_TYPE => __(sprintf('%s.%s', 'general', self::DEVICE_TYPE)),
            self::DEVICE_MODEL => __(sprintf('%s.%s', 'general', self::DEVICE_MODEL)),
            self::DEVICE_MAKE => __(sprintf('%s.%s', 'general', self::DEVICE_MAKE)),
            self::DEVICE_LOCATION => __(sprintf('%s.%s', 'general', self::DEVICE_LOCATION)),
            self::DEVICE_OPERATING_SYSTEM => __(sprintf('%s.%s', 'general', self::DEVICE_OPERATING_SYSTEM)),
            self::DEVICE_CLASS => __(sprintf('%s.%s', 'general', self::DEVICE_CLASS)),

        ];
    }

    public static function getRoute($key = null)
    {
        $routes = array(
            self::DEVICE_TYPE => route('dashboard.device-types.index'),
            self::DEVICE_MODEL => route('dashboard.device-models.index'),
            self::DEVICE_MAKE => route('dashboard.device-makes.index'),
            self::DEVICE_LOCATION => route('dashboard.device-locations.index'),
            self::DEVICE_OPERATING_SYSTEM => route('dashboard.device-operating-systems.index'),
            self::DEVICE_CLASS => route('dashboard.device-classes.index'),
        );
        if (!is_null($key) && array_key_exists($key, $routes)) {
            return $routes[$key];
        } else {
            return null;
        }
    }
}
