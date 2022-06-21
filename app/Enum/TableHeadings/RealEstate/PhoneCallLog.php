<?php
declare(strict_types=1);

namespace App\Enum\TableHeadings\RealEstate;

use App\Enum\AbstractEnum;

class PhoneCallLog extends AbstractEnum
{
    public const NAME = 'name';
    public const PHONE = 'phone';
    public const CALL_DURATION = 'call_duration';
    public const CALL_TYPE = 'call_type';
    public const DATE = 'date';
    public const NEXT_FOLLOW_UP_DATE = 'next_follow_up_date';
    public const DESCRIPTION = 'description';
    public const NOTE = 'note';

    /**
     * @inheritDoc
     */
    public static function getValues(): array
    {
        return [];
    }

    /**
     * @inheritDoc
     */
    public static function getTranslationKeys(): array
    {
        return [
            self::NAME => __(sprintf('%s.%s', 'general', self::NAME)),
            self::PHONE => __(sprintf('%s.%s', 'general', self::PHONE)),
            self::CALL_DURATION => __(sprintf('%s.%s', 'general', self::CALL_DURATION)),
            self::CALL_TYPE => __(sprintf('%s.%s', 'general', self::CALL_TYPE)),
            self::DATE => __(sprintf('%s.%s', 'general', self::DATE)),
            self::NEXT_FOLLOW_UP_DATE => __(sprintf('%s.%s', 'general', self::NEXT_FOLLOW_UP_DATE)),
            self::DESCRIPTION => __(sprintf('%s.%s', 'general', self::DESCRIPTION)),
            self::NOTE => __(sprintf('%s.%s', 'general', self::NOTE)),
        ];
    }
}
