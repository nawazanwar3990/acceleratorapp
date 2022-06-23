<?php

declare(strict_types=1);

namespace App\Enum;

use App\Enum\AbstractEnum;

class PlanEnum extends AbstractEnum
{
    public const FREE = 'free';
    public const BASIC = 'basic';
    public const PREMIUM = 'premium';
    public static function getValues(): array
    {
        return array(
            self::FREE,
            self::BASIC,
            self::PREMIUM
        );
    }

    public static function getTranslationKeys(): array
    {
        return array(
            self::FREE => __(sprintf('%s.%s', 'general', self::FREE)),
            self::BASIC => __(sprintf('%s.%s', 'general', self::BASIC)),
            self::PREMIUM => __(sprintf('%s.%s', 'general', self::PREMIUM)),

        );
    }
}
