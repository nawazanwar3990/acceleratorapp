<?php
declare(strict_types=1);

namespace App\Enum\TableHeadings\CMS;

use App\Enum\AbstractEnum;
use function __;

class MenuTableHeadingEnum extends AbstractEnum
{
    public const TYPE = 'type';
    public const NAME = 'name';
    public const ICON = 'icon';
    public const PARENT = 'parent';
    public const ORDER = 'order';
    public const ACTIVE = 'active';
    public static function getValues(): array
    {
        return [];
    }

    public static function getTranslationKeys(): array
    {
        return [
            self::TYPE => __(sprintf('%s.%s', 'general', self::TYPE)),
            self::NAME => __(sprintf('%s.%s', 'general', self::NAME)),
            self::ICON => __(sprintf('%s.%s', 'general', self::ICON)),
            self::PARENT => __(sprintf('%s.%s', 'general', self::PARENT)),
            self::ORDER => __(sprintf('%s.%s', 'general', self::ORDER)),
            self::ACTIVE => __(sprintf('%s.%s', 'general', self::ACTIVE)),
        ];
    }
}
