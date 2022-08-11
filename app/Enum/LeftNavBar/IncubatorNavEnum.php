<?php

namespace App\Enum\LeftNavBar;

use App\Enum\AbstractEnum;
use App\Enum\KeyWordEnum;

class IncubatorNavEnum extends AbstractEnum
{
    public const BUILDING = KeyWordEnum::BUILDING;
    public const OFFICE = KeyWordEnum::OFFICE;
    public const FLOOR = KeyWordEnum::FLOOR;

    public static function getValues(): array
    {
        return [
            self::BUILDING,
            self::OFFICE,
            self::FLOOR
        ];
    }

    public static function getIcon($key = null): ?string
    {
        $routes = [
            self::BUILDING => '<i class="mdi mdi-account"></i>',
            self::OFFICE => '<i class="mdi mdi-account"></i>',
            self::FLOOR => '<i class="mdi mdi-account"></i>',
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
            self::BUILDING => __(sprintf('%s.%s', 'general.left-bar', self::BUILDING)),
            self::FLOOR => __(sprintf('%s.%s', 'general.left-bar', self::FLOOR)),
            self::OFFICE => __(sprintf('%s.%s', 'general.left-bar', self::OFFICE))
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
            self::FLOOR => route('dashboard.floors.index'),
            self::OFFICE => route('dashboard.offices.index')
        );
        if (!is_null($key) && array_key_exists($key, $routes)) {
            return $routes[$key];
        } else {
            return null;
        }
    }
}
