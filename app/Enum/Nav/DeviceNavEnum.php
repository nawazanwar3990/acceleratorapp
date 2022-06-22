<?php
namespace App\Enum\Nav;

use App\Enum\AbstractEnum;
use App\Enum\KeyWordEnum;

class DeviceNavEnum extends AbstractEnum
{
    public static function getValues(): array
    {
        return [

        ];
    }

    public static function getIcon($key = null): ?string
    {
        $routes = [

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

        ];
    }

    public static function getRoute($key = null)
    {
        $routes = array(

        );
        if (!is_null($key) && array_key_exists($key, $routes)) {
            return $routes[$key];
        } else {
            return null;
        }
    }
}
