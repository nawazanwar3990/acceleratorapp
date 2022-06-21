<?php
namespace App\Enum\Nav;

use App\Enum\AbstractEnum;
use App\Enum\KeyWordEnum;

class BuildingUnitsNavEnum extends AbstractEnum
{
    public const BUILDINGS = KeyWordEnum::BUILDINGS;
    public const FLOORS = KeyWordEnum::FLOORS;
    public const SHOPS = KeyWordEnum::FLATS_SHOPS;
    public const SHARED_SPACE = KeyWordEnum::SHARED_SPACE;
    public const BUILDING_UNITS_ALLOTMENT = KeyWordEnum::BUILDING_UNITS_ALLOTMENT;

    public static function getValues(): array
    {
        return [
            self::BUILDINGS,
            self::FLOORS,
            self::SHOPS,
            self::SHARED_SPACE,
            self::BUILDING_UNITS_ALLOTMENT,
        ];
    }

    public static function getIcon($key = null): ?string
    {
        $routes = [
            self::BUILDINGS => '<i class="bx bxs-dashboard "></i>',
            self::FLOORS => '<i class="bx bxs-dashboard "></i>',
            self::SHOPS => '<i class="bx bxs-dashboard "></i>',
            self::SHARED_SPACE => '<i class="bx bxs-dashboard "></i>',
            self::BUILDING_UNITS_ALLOTMENT => '<i class="bx bxs-dashboard "></i>',
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
            self::BUILDINGS => __(sprintf('%s.%s', 'general', self::BUILDINGS)),
            self::FLOORS => __(sprintf('%s.%s', 'general', self::FLOORS)),
            self::SHOPS => __(sprintf('%s.%s', 'general', self::SHOPS)),
            self::SHARED_SPACE => __(sprintf('%s.%s', 'general', self::SHARED_SPACE)),
            self::BUILDING_UNITS_ALLOTMENT => __(sprintf('%s.%s', 'general', self::BUILDING_UNITS_ALLOTMENT)),
        ];
    }

    public static function getRoute($key = null)
    {
        $routes = array(
            self::BUILDINGS => route('dashboard.buildings.index'),
            self::FLOORS => route('dashboard.floors.index'),
            self::SHOPS => route('dashboard.flats-shops.index'),
            self::SHARED_SPACE => route('dashboard'),
            self::BUILDING_UNITS_ALLOTMENT => route('dashboard'),
        );
        if (!is_null($key) && array_key_exists($key, $routes)) {
            return $routes[$key];
        } else {
            return null;
        }
    }
}
