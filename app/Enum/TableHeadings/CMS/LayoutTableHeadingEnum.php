<?php
declare(strict_types=1);

namespace App\Enum\TableHeadings\CMS;

use App\Enum\AbstractEnum;
use function __;

class LayoutTableHeadingEnum extends AbstractEnum
{
    public const NAME = 'name';
    public const MENU_TYPE = 'menu_type';
    public const PAGE_TITLE = 'page_title';
    public const PAGE_DESCRIPTION = 'page_description';
    public const PAGE_KEYWORD = 'page_keyword';
    public const EXTRA_CSS = 'extra_css';
    public const EXTRA_JS = 'extra_js';
    public const HEADER_LOGO = 'header_logo';
    public const FOOTER_LOGO = 'footer_logo';
    public const ACTIVE = 'active';

    public static function getValues(): array
    {
        return [];
    }

    public static function getTranslationKeys(): array
    {
        return [
            self::NAME => __(sprintf('%s.%s', 'general', self::NAME)),
            self::MENU_TYPE => __(sprintf('%s.%s', 'general', self::MENU_TYPE)),
            self::PAGE_TITLE => __(sprintf('%s.%s', 'general', self::PAGE_TITLE)),
            self::PAGE_DESCRIPTION => __(sprintf('%s.%s', 'general', self::PAGE_DESCRIPTION)),
            self::PAGE_KEYWORD => __(sprintf('%s.%s', 'general', self::PAGE_KEYWORD)),
            self::EXTRA_CSS => __(sprintf('%s.%s', 'general', self::EXTRA_CSS)),
            self::EXTRA_JS => __(sprintf('%s.%s', 'general', self::EXTRA_JS)),
            self::HEADER_LOGO => __(sprintf('%s.%s', 'general', self::HEADER_LOGO)),
            self::FOOTER_LOGO => __(sprintf('%s.%s', 'general', self::FOOTER_LOGO)),
            self::ACTIVE => __(sprintf('%s.%s', 'general', self::ACTIVE)),
        ];
    }
}
