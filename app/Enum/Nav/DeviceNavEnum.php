<?php

namespace App\Enum\Nav;

use App\Enum\AbstractEnum;
use App\Enum\KeyWordEnum;

class DeviceNavEnum extends AbstractEnum
{
    public const Device = KeyWordEnum::DEVICE;


    public static function getValues(): array
    {
        return [
            self::Device,

        ];
    }

    public static function getIcon($key = null): ?string
    {
        $routes = [
            self::Device => '<i class="mdi mdi-account"></i>',

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
            self::Device => __(sprintf('%s.%s', 'general', self::Device)),

        ];
    }

    public static function getRoute($key = null)
    {
        $routes = array(
            self::Device => route('dashboard.devices.index'),

        );
        if (!is_null($key) && array_key_exists($key, $routes)) {
            return $routes[$key];
        } else {
            return null;
        }
    }
}
