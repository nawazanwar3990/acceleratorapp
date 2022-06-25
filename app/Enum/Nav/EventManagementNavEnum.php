<?php
namespace App\Enum\Nav;

use App\Enum\AbstractEnum;
use App\Enum\KeyWordEnum;

class EventManagementNavEnum extends AbstractEnum
{
    public const EVENT = KeyWordEnum::EVENT;
    public static function getValues(): array
    {
        return [
            self::EVENT,
        ];
    }

    public static function getIcon($key = null): ?string
    {
        $routes = [
            self::EVENT => '<i class="mdi mdi-account"></i>'


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
            self::EVENT => __(sprintf('%s.%s', 'general', self::EVENT)),
        ];
    }

    public static function getRoute($key = null)
    {
        $routes = array(
            self::EVENT => route('dashboard.events.index'),
        );
        if (!is_null($key) && array_key_exists($key, $routes)) {
            return $routes[$key];
        } else {
            return null;
        }
    }
}
