<?php
declare(strict_types=1);

namespace App\Enum\TableHeadings\CMS;

use App\Enum\AbstractEnum;
use function __;

class FaqTopicTableHeadingEnum extends AbstractEnum
{
    public const NAME = 'name';
    public const PAGE_ID = 'page_id';
    public const ALL_PAGES = 'all_pages';
    public const ORDER = 'order';
    public const ICON = 'icon';
    public const ACTIVE = 'active';

    public static function getValues(): array
    {
        return [];
    }

    public static function getTranslationKeys(): array
    {
        return [
            self::NAME => __(sprintf('%s.%s', 'general', self::NAME)),
            self::PAGE_ID => __(sprintf('%s.%s', 'general', self::PAGE_ID)),
            self::ALL_PAGES => __(sprintf('%s.%s', 'general', self::ALL_PAGES)),
            self::ORDER => __(sprintf('%s.%s', 'general', self::ORDER)),
            self::ICON => __(sprintf('%s.%s', 'general', self::ICON)),
            self::ACTIVE => __(sprintf('%s.%s', 'general', self::ACTIVE)),
        ];
    }
}
