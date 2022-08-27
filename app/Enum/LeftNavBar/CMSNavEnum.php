<?php

namespace App\Enum\LeftNavBar;

use App\Enum\AbstractEnum;
use App\Enum\KeyWordEnum;

class CMSNavEnum extends AbstractEnum
{
    public const MENU = 'menu';
    public const PAGE = 'page';
    public const LAYOUT = 'layout';
    public const SECTION = 'section';

    public static function getValues(): array
    {
        return [
            self::MENU,
            self::PAGE,
            self::LAYOUT,
            self::SECTION
        ];
    }

    public static function getIcon($key = null): ?string
    {
        $routes = [
            self::MENU => '<i class="mdi mdi-account"></i>',
            self::PAGE => '<i class="mdi mdi-account"></i>',
            self::LAYOUT => '<i class="mdi mdi-account"></i>',
            self::SECTION => '<i class="mdi mdi-account"></i>'
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
            self::LAYOUT => __(sprintf('%s.%s', 'general.left-bar', self::LAYOUT)),
            self::MENU => __(sprintf('%s.%s', 'general.left-bar', self::MENU)),
            self::PAGE => __(sprintf('%s.%s', 'general.left-bar', self::PAGE)),
            self::SECTION => __(sprintf('%s.%s', 'general.left-bar', self::SECTION)),
        ];
    }

    public static function getRoute($key = null)
    {
        $routes = array(
            self::MENU => route('cms.menus.index'),
            self::PAGE => route('cms.pages.index'),
            self::LAYOUT => route('cms.layouts.index'),
            self::SECTION => route('cms.sections.index')
        );
        if (!is_null($key) && array_key_exists($key, $routes)) {
            return $routes[$key];
        } else {
            return null;
        }
    }
}
