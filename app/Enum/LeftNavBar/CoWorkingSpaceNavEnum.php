<?php
namespace App\Enum\LeftNavBar;

use App\Enum\AbstractEnum;
use App\Enum\KeyWordEnum;

class CoWorkingSpaceNavEnum extends AbstractEnum
{
    public const BUILDING = KeyWordEnum::BUILDING;
    public const FLAT = KeyWordEnum::FLAT;
    public const FLOOR = KeyWordEnum::FLOOR;
    public const FLAT_TYPE = KeyWordEnum::FLAT_TYPE;
    public const FLOOR_TYPE = KeyWordEnum::FLOOR_TYPE;

    public static function getValues(): array
    {
        return [
            self::BUILDING,
            self::FLAT,
            self::FLOOR,
            self::FLAT_TYPE,
            self::FLOOR_TYPE
        ];
    }

    public static function getIcon($key = null): ?string
    {
        $routes = [
            self::BUILDING => '<i class="mdi mdi-account"></i>',
            self::FLAT => '<i class="mdi mdi-account"></i>',
            self::FLOOR => '<i class="mdi mdi-account"></i>',
            self::FLAT_TYPE => '<i class="mdi mdi-account"></i>',
            self::FLOOR_TYPE => '<i class="mdi mdi-account"></i>'
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
            self::BUILDING => __(sprintf('%s.%s', 'general', self::BUILDING)),
            self::FLOOR_TYPE => __(sprintf('%s.%s', 'general', self::FLOOR_TYPE)),
            self::FLOOR => __(sprintf('%s.%s', 'general', self::FLOOR)),
            self::FLAT_TYPE => __(sprintf('%s.%s', 'general', self::FLAT_TYPE)),
            self::FLAT => __(sprintf('%s.%s', 'general', self::FLAT))
        ];
    }

    public static function getRoute($key = null)
    {
        $routes = array(
            self::BUILDING => route('dashboard.buildings.index'),
            self::FLOOR_TYPE => route('dashboard.flat-types.index'),
            self::FLOOR => route('dashboard.floors.index'),
            self::FLAT_TYPE => route('dashboard.flat-types.index'),
            self::FLAT => route('dashboard.flats.index')
        );
        if (!is_null($key) && array_key_exists($key, $routes)) {
            return $routes[$key];
        } else {
            return null;
        }
    }
}
