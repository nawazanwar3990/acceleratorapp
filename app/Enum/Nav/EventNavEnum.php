<?php
namespace App\Enum\Nav;

use App\Enum\AbstractEnum;
use App\Enum\KeyWordEnum;

class EventNavEnum extends AbstractEnum
{
    public const EVENT_LIST = KeyWordEnum::EVENT_LIST;
    public const EVENT_NEW = KeyWordEnum::EVENT_NEW;


    public static function getValues(): array
    {
        return [
            self::EVENT_LIST,
            self::EVENT_NEW,
        ];
    }

    public static function getIcon($key = null): ?string
    {
        $routes = [
            self::EVENT_LIST => '<i class="mdi mdi-account"></i>',
            self::EVENT_NEW => '<i class="mdi mdi-account"></i>',


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
            self::EVENT_NEW => __(sprintf('%s.%s', 'general', self::EVENT_NEW)),
            self::EVENT_LIST => __(sprintf('%s.%s', 'general', self::EVENT_LIST)),

        ];
    }

    public static function getRoute($key = null)
    {
        $routes = array(
            self::EVENT_NEW => route('dashboard.events.create'),
            self::EVENT_LIST => route('dashboard.events.index'),
        );
        if (!is_null($key) && array_key_exists($key, $routes)) {
            return $routes[$key];
        } else {
            return null;
        }
    }
}
