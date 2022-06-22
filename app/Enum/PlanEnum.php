<?php

declare(strict_types=1);

namespace App\Enum;

use App\Enum\AbstractEnum;

class PlanEnum extends AbstractEnum
{
    public const FREE = 'free';
    public const BASIC = 'basic';
    public static function getValues(): array
    {
        return array(
            self::FREE,
            self::BASIC,
        );
    }

    public static function getTranslationKeys(): array
    {
        return array(
            self::FREE => 'free',
            self::BASIC => 'basic',
        );
    }
}
