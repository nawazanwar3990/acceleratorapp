<?php
declare(strict_types=1);

namespace App\Enum\TableHeadings\CMS;

use App\Enum\AbstractEnum;
use function __;

class LayoutTableHeadingEnum extends AbstractEnum
{
    public const NAME = 'name';
    public const MENU_TYPE = 'menu_type';
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
            self::HEADER_LOGO => __(sprintf('%s.%s', 'general', self::HEADER_LOGO)),
            self::FOOTER_LOGO => __(sprintf('%s.%s', 'general', self::FOOTER_LOGO)),
            self::ACTIVE => __(sprintf('%s.%s', 'general', self::ACTIVE)),
        ];
    }
}
