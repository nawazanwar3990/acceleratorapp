<?php

namespace App\Enum\LeftNavBar;

use App\Enum\AbstractEnum;
use App\Enum\KeyWordEnum;

class CMSNavEnum extends AbstractEnum
{
    public const MENU = 'menu';
    public static function getValues(): array
    {
        return [
            self::MENU
        ];
    }

    public static function getIcon($key = null): ?string
    {
        $routes = [
            self::MENU => '<i class="mdi mdi-account"></i>'
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
            self::MENU => __(sprintf('%s.%s', 'general.left-bar', self::MENU)),
        ];
    }
    public static function getRoute($key = null)
    {
        $routes = array(
            self::MENU => route('cms.menus.index')
        );
        if (!is_null($key) && array_key_exists($key, $routes)) {
            return $routes[$key];
        } else {
            return null;
        }
    }
}
