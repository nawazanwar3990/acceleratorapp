<?php

declare(strict_types=1);

namespace App\Enum;

use App\Enum\AbstractEnum;

class IncubatorTypeEnum extends AbstractEnum
{
    public const BUILDING = 'building';
    public const FLOOR = 'floor';
    public const OFFICE = 'office';

    public static function getValues(): array
    {
        return array(
            self::BUILDING,
            self::FLOOR,
            self::OFFICE
        );
    }

    public static function getRoute($key)
    {
        $images = array(
            self::BUILDING => route('dashboard.buildings.index'),
            self::FLOOR => route('dashboard.floors.index'),
            self::OFFICE => route('dashboard.offices.index'),
        );
        if (!is_null($key) && array_key_exists($key, $images)) {
            return $images[$key];
        } else {
            return null;
        }
    }

    public static function getImage($key)
    {
        $images = array(
            self::BUILDING => asset('images/icon/business_accelerator.png'),
            self::FLOOR => asset('images/icon/business_accelerator.png'),
            self::OFFICE => asset('images/icon/business_accelerator.png')
        );
        if (!is_null($key) && array_key_exists($key, $images)) {
            return $images[$key];
        } else {
            return null;
        }
    }

    public static function getTranslationKeys(): array
    {
        return array(
            self::BUILDING => 'Manage All Buildings',
            self::FLOOR => 'Manage All Offices',
            self::OFFICE => 'Manage All Offices',
        );
    }
}
