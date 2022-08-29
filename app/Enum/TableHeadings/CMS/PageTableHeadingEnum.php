<?php
declare(strict_types=1);

namespace App\Enum\TableHeadings\CMS;

use App\Enum\AbstractEnum;
use function __;

class PageTableHeadingEnum extends AbstractEnum
{
    public const LAYOUT_ID = 'layout_id';
    public const PAGE_TITLE = 'page_title';
    public const PAGE_URL = 'page_url';
    public const ORDER = 'order';
    public static function getValues(): array
    {
        return [];
    }

    public static function getTranslationKeys(): array
    {
        return [
            self::LAYOUT_ID => __(sprintf('%s.%s', 'general', self::LAYOUT_ID)),
            self::PAGE_TITLE => __(sprintf('%s.%s', 'general', self::PAGE_TITLE)),
            self::PAGE_URL => __(sprintf('%s.%s', 'general', self::PAGE_URL)),
            self::ORDER => __(sprintf('%s.%s', 'general', self::ORDER))
        ];
    }
}
