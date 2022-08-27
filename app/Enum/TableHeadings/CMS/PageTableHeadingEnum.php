<?php
declare(strict_types=1);

namespace App\Enum\TableHeadings\CMS;

use App\Enum\AbstractEnum;
use function __;

class PageTableHeadingEnum extends AbstractEnum
{
    public const MENU_ID = 'menu_id';
    public const LAYOUT_ID = 'layout_id';
    public const PAGE_TITLE = 'page_title';
    public const PAGE_DESCRIPTION = 'page_description';
    public const PAGE_KEYWORD = 'page_keyword';
    public const EXTRA_CSS = 'extra_css';
    public const EXTRA_JS = 'extra_js';
    public const ACTIVE = 'active';

    public static function getValues(): array
    {
        return [];
    }

    public static function getTranslationKeys(): array
    {
        return [
            self::MENU_ID => __(sprintf('%s.%s', 'general', self::MENU_ID)),
            self::LAYOUT_ID => __(sprintf('%s.%s', 'general', self::LAYOUT_ID)),
            self::PAGE_TITLE => __(sprintf('%s.%s', 'general', self::PAGE_TITLE)),
            self::PAGE_DESCRIPTION => __(sprintf('%s.%s', 'general', self::PAGE_DESCRIPTION)),
            self::PAGE_KEYWORD => __(sprintf('%s.%s', 'general', self::PAGE_KEYWORD)),
            self::EXTRA_CSS => __(sprintf('%s.%s', 'general', self::EXTRA_CSS)),
            self::EXTRA_JS => __(sprintf('%s.%s', 'general', self::EXTRA_JS)),
            self::ACTIVE => __(sprintf('%s.%s', 'general', self::ACTIVE)),
        ];
    }
}
