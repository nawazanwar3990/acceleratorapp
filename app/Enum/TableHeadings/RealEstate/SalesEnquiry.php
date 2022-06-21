<?php
declare(strict_types=1);

namespace App\Enum\TableHeadings\RealEstate;

use App\Enum\AbstractEnum;

class SalesEnquiry extends AbstractEnum
{
    public const NAME = 'name';
    public const PHONE = 'phone';
    public const EMAIL = 'email';
    public const ADDRESS = 'address';
    public const DATE = 'date';
    public const NEXT_FOLLOW_UP_DATE = 'next_follow_up_date';
    public const ASSIGNED = 'assigned';
    public const REFERENCE = 'reference';
    public const SOURCE = 'source';

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
            self::EMAIL => __(sprintf('%s.%s', 'general', self::EMAIL)),
            self::ADDRESS => __(sprintf('%s.%s', 'general', self::ADDRESS)),
            self::DATE => __(sprintf('%s.%s', 'general', self::DATE)),
            self::NEXT_FOLLOW_UP_DATE => __(sprintf('%s.%s', 'general', self::NEXT_FOLLOW_UP_DATE)),
            self::ASSIGNED => __(sprintf('%s.%s', 'general', self::ASSIGNED)),
            self::REFERENCE => __(sprintf('%s.%s', 'general', self::REFERENCE)),
            self::SOURCE => __(sprintf('%s.%s', 'general', self::SOURCE)),
        ];
    }
}
