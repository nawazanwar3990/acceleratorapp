<?php

namespace App\Enum\LeftNavBar;

use App\Enum\AbstractEnum;
use App\Enum\KeyWordEnum;

class CMSNavEnum extends AbstractEnum
{
    public const PAGE = 'page';
    public const LAYOUT = 'layout';
    public const SECTION = 'section';
    public const BLOG = 'blog';
    public const SLIDER = 'slider';
    public const DESCRIPTIVE = 'descriptive';
    public const WHAT_WE_OFFER = 'what_we_offer';
    public const HOW_IT_WORK = 'how_it_work';
    public const TEAM = 'team';

    public static function getValues(): array
    {
        return [
            self::PAGE,
            self::LAYOUT,
            self::SECTION,
            self::BLOG,
            self::SLIDER,
            self::DESCRIPTIVE,
            self::WHAT_WE_OFFER,
            self::HOW_IT_WORK,
            self::TEAM
        ];
    }

    public static function getIcon($key = null): ?string
    {
        $routes = [
            self::PAGE => '<i class="mdi mdi-account"></i>',
            self::LAYOUT => '<i class="mdi mdi-account"></i>',
            self::SECTION => '<i class="mdi mdi-account"></i>',
            self::BLOG => '<i class="mdi mdi-account"></i>',
            self::SLIDER => '<i class="mdi mdi-account"></i>',
            self::DESCRIPTIVE => '<i class="mdi mdi-account"></i>',
            self::WHAT_WE_OFFER => '<i class="mdi mdi-account"></i>',
            self::HOW_IT_WORK => '<i class="mdi mdi-account"></i>',
            self::TEAM => '<i class="mdi mdi-account"></i>',
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
            self::PAGE => __(sprintf('%s.%s', 'general.left-bar', self::PAGE)),
            self::SECTION => __(sprintf('%s.%s', 'general.left-bar', self::SECTION)),
            self::BLOG => __(sprintf('%s.%s', 'general.left-bar', self::BLOG)),
            self::SLIDER => __(sprintf('%s.%s', 'general.left-bar', self::SLIDER)),
            self::DESCRIPTIVE => __(sprintf('%s.%s', 'general.left-bar', self::DESCRIPTIVE)),
            self::WHAT_WE_OFFER => __(sprintf('%s.%s', 'general.left-bar', self::WHAT_WE_OFFER)),
            self::HOW_IT_WORK => __(sprintf('%s.%s', 'general.left-bar', self::HOW_IT_WORK)),
            self::TEAM => __(sprintf('%s.%s', 'general.left-bar', self::TEAM)),
        ];
    }

    public static function getRoute($key = null)
    {
        $routes = array(
            self::PAGE => route('cms.pages.index'),
            self::LAYOUT => route('cms.layouts.index'),
            self::SECTION => route('cms.pages.index'),
            self::BLOG => route('cms.blogs.index'),
            self::SLIDER => route('cms.sliders.index'),
            self::DESCRIPTIVE => route('cms.descriptive.index'),
            self::WHAT_WE_OFFER => route('cms.what-we-offers.index'),
            self::HOW_IT_WORK => route('cms.how-it-works.index'),
            self::TEAM => route('cms.teams.index'),
        );
        if (!is_null($key) && array_key_exists($key, $routes)) {
            return $routes[$key];
        } else {
            return null;
        }
    }
}
