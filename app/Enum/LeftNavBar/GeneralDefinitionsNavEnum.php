<?php
namespace App\Enum\LeftNavBar;

use App\Enum\AbstractEnum;
use App\Enum\KeyWordEnum;

class GeneralDefinitionsNavEnum extends AbstractEnum
{
    public const SERVICES = KeyWordEnum::SERVICES;

//    public const COMMODITY_TYPES = KeyWordEnum::COMMODITY_TYPES;

    public static function getValues(): array
    {
        return [
            self::SERVICES,
            self::FLOOR_NAMES,
            self::FLOOR_TYPES,
            self::FLAT_TYPES,
//            self::COMMODITY_TYPES,
        ];
    }

    public static function getIcon($key = null): ?string
    {
        $routes = [
            self::SERVICES => '<i class="mdi mdi-account"></i>',
            self::FLOOR_NAMES => '<i class="mdi mdi-account"></i>',
            self::FLOOR_TYPES => '<i class="mdi mdi-account"></i>',
            self::FLAT_TYPES => '<i class="mdi mdi-account"></i>',
//            self::COMMODITY_TYPES => '<i class="mdi mdi-account"></i>',
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
            self::SERVICES => __(sprintf('%s.%s', 'general', self::SERVICES)),
            self::FLOOR_NAMES => __(sprintf('%s.%s', 'general', self::FLOOR_NAMES)),
            self::FLOOR_TYPES => __(sprintf('%s.%s', 'general', self::FLOOR_TYPES)),
            self::FLAT_TYPES => __(sprintf('%s.%s', 'general', self::FLAT_TYPES)),
//            self::COMMODITY_TYPES => __(sprintf('%s.%s', 'general', self::COMMODITY_TYPES)),
        ];
    }

    public static function getRoute($key = null)
    {
        $routes = array(
            self::SERVICES => route('dashboard.service.index'),
            self::FLOOR_NAMES => route('dashboard.floor-name.index'),
            self::FLOOR_TYPES => route('dashboard.floor-type.index'),
            self::FLAT_TYPES => route('dashboard.flat-type.index'),
//            self::COMMODITY_TYPES => route('dashboard.commodity-type.index'),
        );
        if (!is_null($key) && array_key_exists($key, $routes)) {
            return $routes[$key];
        } else {
            return null;
        }
    }
}
