<?php

declare(strict_types=1);

namespace App\Enum;

use App\Enum\AbstractEnum;

class DurationEnum extends AbstractEnum
{
    public const Daily = 'daily';
    public const WEEKLY = 'weekly';
    public const MONTHLY = 'monthly';
    public const YEARLY = 'yearly';


    public static function getValues(): array
    {
        return array(
            self::Daily,
            self::WEEKLY,
            self::MONTHLY,
            self::YEARLY

        );
    }

    public static function getTranslationKeys(): array
    {
        return array(
            self::Daily => __(sprintf('%s.%s', 'general', self::Daily)),
            self::WEEKLY => __(sprintf('%s.%s', 'general', self::WEEKLY)),
            self::MONTHLY => __(sprintf('%s.%s', 'general', self::MONTHLY)),
            self::YEARLY => __(sprintf('%s.%s', 'general', self::YEARLY)),


        );
    }
}
