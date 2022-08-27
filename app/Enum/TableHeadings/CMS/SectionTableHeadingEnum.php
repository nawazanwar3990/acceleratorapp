<?php
declare(strict_types=1);

namespace App\Enum\TableHeadings\CMS;

use App\Enum\AbstractEnum;
use function __;

class SectionTableHeadingEnum extends AbstractEnum
{
    public const PAGE_ID = 'page_id';
    public const ORDER = 'order';
    public const HTML = 'html';
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
            self::PAGE_ID => __(sprintf('%s.%s', 'general', self::PAGE_ID)),
            self::ORDER => __(sprintf('%s.%s', 'general', self::ORDER)),
            self::HTML => __(sprintf('%s.%s', 'general', self::HTML)),
            self::EXTRA_CSS => __(sprintf('%s.%s', 'general', self::EXTRA_CSS)),
            self::EXTRA_JS => __(sprintf('%s.%s', 'general', self::EXTRA_JS)),
            self::ACTIVE => __(sprintf('%s.%s', 'general', self::ACTIVE)),
        ];
    }
}
