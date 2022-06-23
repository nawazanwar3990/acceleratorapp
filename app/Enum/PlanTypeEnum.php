<?php

declare(strict_types=1);

namespace App\Enum;

use App\Enum\AbstractEnum;

class PlanTypeEnum extends AbstractEnum
{
    public const MONTHLY = 'monthly';
    public const YEARLY = 'yearly';
    public const WEEKLY = 'weekly';

    public static function getValues(): array
    {
        return array(
            self::MONTHLY,
            self::YEARLY,
            self::WEEKLY
        );
    }

    public static function getTranslationKeys(): array
    {
        return array(
            self::MONTHLY => __(sprintf('%s.%s', 'general', self::MONTHLY)),
            self::YEARLY => __(sprintf('%s.%s', 'general', self::YEARLY)),
            self::WEEKLY => __(sprintf('%s.%s', 'general', self::WEEKLY)),

        );
    }
}
