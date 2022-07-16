<?php
declare(strict_types=1);

namespace App\Enum\TableHeadings\WorkingSpace;

use App\Enum\AbstractEnum;
use function __;

class OfficeTableHeadingEnum extends AbstractEnum
{
    public const LOCATION = 'location';
    public const NAME = 'name';
    public const NUMBER = 'number';
    public const TYPE = 'type';
    public const VIEW ='view';
    public const SITTING_CAPACITY = 'sitting_capacity';
    public const DIMENSION = 'dimension';
    public const PLANS = 'plans';

    public static function getValues(): array
    {
        return [];
    }
    public static function getTranslationKeys(): array
    {
        return [
            self::LOCATION => __(sprintf('%s.%s', 'general', self::LOCATION))."(optional)",
            self::NAME => __(sprintf('%s.%s', 'general', self::NAME)),
            self::NUMBER => __(sprintf('%s.%s', 'general', self::NUMBER)),
            self::TYPE => __(sprintf('%s.%s', 'general', self::TYPE)),
            self::VIEW => __(sprintf('%s.%s', 'general', self::VIEW)),
            self::SITTING_CAPACITY => __(sprintf('%s.%s', 'general', self::SITTING_CAPACITY)),
            self::DIMENSION => __(sprintf('%s.%s', 'general', self::DIMENSION)),
            self::PLANS => __(sprintf('%s.%s', 'general', self::PLANS)),
        ];
    }
}
