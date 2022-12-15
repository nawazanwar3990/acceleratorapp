<?php
declare(strict_types=1);

namespace App\Enum\TableHeadings;

use App\Enum\AbstractEnum;
use function __;

class InvestmentTableHeadingEnum extends AbstractEnum
{
    public const START_UP_NAME = 'start_up_name';
    public const EMAIL = 'email';
    public const NAME = 'name';
    public const MOBILE = 'mobile';
    public const CITY = 'city';
    public const COUNTRY = 'country';
    public const STATUS = 'status';
    public static function getValues(): array
    {
        return [];
    }

    public static function getTranslationKeys(): array
    {
        return [
            self::START_UP_NAME => __(sprintf('%s.%s', 'general', self::START_UP_NAME)),
            self::EMAIL => __(sprintf('%s.%s', 'general', self::EMAIL)),
            self::NAME => __(sprintf('%s.%s', 'general', self::NAME)),
            self::MOBILE => __(sprintf('%s.%s', 'general', self::MOBILE)),
            self::CITY => __(sprintf('%s.%s', 'general', self::CITY)),
            self::COUNTRY => __(sprintf('%s.%s', 'general', self::COUNTRY)),
            self::STATUS => __(sprintf('%s.%s', 'general', self::STATUS)),
        ];
    }
}
