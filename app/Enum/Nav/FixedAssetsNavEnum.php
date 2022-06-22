<?php
namespace App\Enum\Nav;

use App\Enum\AbstractEnum;
use App\Enum\KeyWordEnum;

class FixedAssetsNavEnum extends AbstractEnum
{
    public const ASSETS_INVENTORY = KeyWordEnum::ASSETS_INVENTORY;
    public const ASSETS_LOCATION = KeyWordEnum::ASSETS_LOCATION;
    public const ASSETS_UNIT = KeyWordEnum::ASSETS_UNIT;

    public static function getValues(): array
    {
        return [
            self::ASSETS_INVENTORY,
            self::ASSETS_LOCATION,
            self::ASSETS_UNIT,
        ];
    }

    public static function getIcon($key = null): ?string
    {
        $routes = [
            self::ASSETS_INVENTORY => '<i class="mdi mdi-account"></i>',
            self::ASSETS_LOCATION => '<i class="mdi mdi-account"></i>',
            self::ASSETS_UNIT => '<i class="mdi mdi-account"></i>',
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
            self::ASSETS_INVENTORY => __(sprintf('%s.%s', 'general', self::ASSETS_INVENTORY)),
            self::ASSETS_LOCATION => __(sprintf('%s.%s', 'general', self::ASSETS_LOCATION)),
            self::ASSETS_UNIT => __(sprintf('%s.%s', 'general', self::ASSETS_UNIT)),
        ];
    }

    public static function getRoute($key = null)
    {
        $routes = array(
            self::ASSETS_INVENTORY => route('dashboard.assets-inventory.index'),
            self::ASSETS_LOCATION => route('dashboard.assets-location.index'),
            self::ASSETS_UNIT => route('dashboard.assets-unit.index'),
        );
        if (!is_null($key) && array_key_exists($key, $routes)) {
            return $routes[$key];
        } else {
            return null;
        }
    }
}
