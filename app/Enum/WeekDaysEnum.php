<?php

declare(strict_types=1);

namespace App\Enum;

class WeekDaysEnum extends AbstractEnum
{
    public const MONDAY = 'mon';
    public const TUESDAY = 'tue';
    public const WEDNESDAY = 'wed';
    public const THURSDAY = 'thu';
    public const FRIDAY = 'fri';
    public const SATURDAY = 'sat';
    public const SUNDAY = 'sun';
    public static function getValues(): array
    {
        return array(
            self::MONDAY,
            self::TUESDAY,
            self::WEDNESDAY,
            self::THURSDAY,
            self::FRIDAY,
            self::SATURDAY,
            self::SUNDAY
        );
    }

    public static function getTranslationKeys(): array
    {
        return array(
            self::MONDAY => trans(sprintf('general.%s', self::MONDAY)),
            self::TUESDAY => trans(sprintf('general.%s', self::TUESDAY)),
            self::WEDNESDAY =>  trans(sprintf('general.%s', self::WEDNESDAY)),
            self::THURSDAY => trans(sprintf('general.%s', self::THURSDAY)),
            self::FRIDAY =>  trans(sprintf('general.%s', self::FRIDAY)),
            self::SATURDAY => trans(sprintf('general.%s', self::SATURDAY)),
            self::SUNDAY => trans(sprintf('general.%s', self::SUNDAY)),
        );
    }
}
