<?php

declare(strict_types=1);

namespace App\Enum;

class WeekDaysEnum extends AbstractEnum
{
    public const MONDAY = 'monday';
    public const TUESDAY = 'tuesday';
    public const WEDNESDAY = 'wednesday';
    public const THURSDAY = 'thursday';
    public const FRIDAY = 'friday';
    public const SATURDAY = 'saturday';
    public const SUNDAY = 'sunday';
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
