<?php

namespace App\Enum\LeftNavBar;

use App\Enum\AbstractEnum;
use App\Enum\KeyWordEnum;

class CoWorkingSpaceNavEnum extends AbstractEnum
{
    public const BUILDING = KeyWordEnum::BUILDING;
    public const OFFICE = KeyWordEnum::OFFICE;
    public const FLOOR = KeyWordEnum::FLOOR;
    public const OFFICE_TYPE = KeyWordEnum::OFFICE_TYPE;
    public const FLOOR_TYPE = KeyWordEnum::FLOOR_TYPE;

    public static function getValues(): array
    {
        return [
            self::BUILDING,
            self::OFFICE,
            self::FLOOR,
            self::OFFICE_TYPE,
            self::FLOOR_TYPE
        ];
    }

    public static function getIcon($key = null): ?string
    {
        $routes = [
            self::BUILDING => '<i class="mdi mdi-account"></i>',
            self::OFFICE => '<i class="mdi mdi-account"></i>',
            self::FLOOR => '<i class="mdi mdi-account"></i>',
            self::OFFICE_TYPE => '<i class="mdi mdi-account"></i>',
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
            self::BUILDING => __(sprintf('%s.%s', 'general.left_bar', self::BUILDING)),
            self::FLOOR_TYPE => __(sprintf('%s.%s', 'general.left_bar', self::FLOOR_TYPE)),
            self::FLOOR => __(sprintf('%s.%s', 'general.left_bar', self::FLOOR)),
            self::OFFICE_TYPE => __(sprintf('%s.%s', 'general.left_bar', self::OFFICE_TYPE)),
            self::OFFICE => __(sprintf('%s.%s', 'general.left_bar', self::OFFICE))
        ];
    }

    public static function getAdminWorkingSpaces(): array
    {
        return [
            self::BUILDING => __(sprintf('%s.%s', 'general.left_bar', self::BUILDING)),
            self::FLOOR => __(sprintf('%s.%s', 'general.left_bar', self::FLOOR)),
            self::OFFICE => __(sprintf('%s.%s', 'general.left_bar', self::OFFICE))
        ];
    }

    public static function getRoute($key = null)
    {
        $routes = array(
            self::BUILDING => route('dashboard.buildings.index'),
            self::FLOOR_TYPE => route('dashboard.floor-types.index'),
            self::FLOOR => route('dashboard.floors.index'),
            self::OFFICE_TYPE => route('dashboard.office-types.index'),
            self::OFFICE => route('dashboard.offices.index')
        );
        if (!is_null($key) && array_key_exists($key, $routes)) {
            return $routes[$key];
        } else {
            return null;
        }
    }

    public static function getWebsiteRoute($key = null, $params = null)
    {
        $routes = array(
            self::BUILDING => ($params) ? route('website.buildings.index', $params) : route('website.buildings.index'),
            self::FLOOR => ($params) ? route('website.floors.index', $params) : route('website.floors.index'),
            self::OFFICE => ($params) ? route('website.offices.index', $params) : route('website.offices.index')
        );
        if (!is_null($key) && array_key_exists($key, $routes)) {
            return $routes[$key];
        } else {
            return null;
        }
    }
}
