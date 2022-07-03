<?php

declare(strict_types=1);

namespace App\Enum;

use App\Enum\AbstractEnum;

class PlanForEnum extends AbstractEnum
{
    public const BUILDING = 'building';
    public const FLOOR = 'floor';
    public const FLAT = 'flat';

    public static function getValues(): array
    {
        return array(
            self::BUILDING,
            self::FLOOR,
            self::FLAT
        );
    }

    public static function getTranslationKeys(): array
    {
        return array(
            self::BUILDING => __(sprintf('%s.%s', 'general', self::BUILDING)),
            self::FLOOR => __(sprintf('%s.%s', 'general', self::FLOOR)),
            self::FLAT => __(sprintf('%s.%s', 'general', self::FLAT)),
        );
    }
}
