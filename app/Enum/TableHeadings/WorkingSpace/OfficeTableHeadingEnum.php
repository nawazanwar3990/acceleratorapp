<?php
declare(strict_types=1);

namespace App\Enum\TableHeadings\WorkingSpace;

use App\Enum\AbstractEnum;
use function __;

class OfficeTableHeadingEnum extends AbstractEnum
{
    public const LOCATION = 'location';
    public const OFFICE_NAME = 'office_name';
    public const TYPE = 'type';
    public const SITTING_CAPACITY = 'sitting_capacity';

    public static function getValues(): array
    {
        return [];
    }
    public static function getTranslationKeys(): array
    {
        return [
            self::LOCATION => __(sprintf('%s.%s', 'general', self::LOCATION))."(optional)",
            self::OFFICE_NAME => __(sprintf('%s.%s', 'general', self::OFFICE_NAME)),
            self::TYPE => __(sprintf('%s.%s', 'general', self::TYPE)),
            self::SITTING_CAPACITY => __(sprintf('%s.%s', 'general', self::SITTING_CAPACITY)),
        ];
    }
}
