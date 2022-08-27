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
    public const CONTACT_US = 'contact_us';
    public const FAQ_TOPIC = 'faq_topic';
    public const FAQ_SECTION = 'faq_section';

    public static function getValues(): array
    {
        return [
            self::MENU,
            self::PAGE,
            self::LAYOUT,
            self::SECTION,
            self::CONTACT_US,
            self::FAQ_TOPIC,
            self::FAQ_SECTION
        ];
    }

    public static function getIcon($key = null): ?string
    {
        $routes = [
            self::MENU => '<i class="mdi mdi-account"></i>',
            self::PAGE => '<i class="mdi mdi-account"></i>',
            self::LAYOUT => '<i class="mdi mdi-account"></i>',
            self::SECTION => '<i class="mdi mdi-account"></i>',
            self::CONTACT_US => '<i class="mdi mdi-account"></i>',
            self::FAQ_TOPIC => '<i class="mdi mdi-account"></i>',
            self::FAQ_SECTION => '<i class="mdi mdi-account"></i>',
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
            self::CONTACT_US => __(sprintf('%s.%s', 'general.left-bar', self::CONTACT_US)),
            self::FAQ_TOPIC => __(sprintf('%s.%s', 'general.left-bar', self::FAQ_TOPIC)),
            self::FAQ_SECTION => __(sprintf('%s.%s', 'general.left-bar', self::FAQ_SECTION)),
        ];
    }

    public static function getRoute($key = null)
    {
        $routes = array(
            self::MENU => route('cms.menus.index'),
            self::PAGE => route('cms.pages.index'),
            self::LAYOUT => route('cms.layouts.index'),
            self::SECTION => route('cms.sections.index'),
            self::CONTACT_US => route('cms.contact-us.index'),
            self::FAQ_TOPIC => route('cms.faq-topics.index'),
            self::FAQ_SECTION => route('cms.faq-sections.index')
        );
        if (!is_null($key) && array_key_exists($key, $routes)) {
            return $routes[$key];
        } else {
            return null;
        }
    }
}
