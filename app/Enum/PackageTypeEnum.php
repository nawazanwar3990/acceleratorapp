<?php

declare(strict_types=1);

namespace App\Enum;

class PackageTypeEnum extends AbstractEnum
{
    public const FREE = 'free';
    public const PAYED = 'payed';
    public const TRAIL = 'trail';

    public static function getValues(): array
    {
        return array(
            self::FREE,
            self::PAYED,
            self::TRAIL
        );
    }

    public static function getTranslationKeys(): array
    {
        return array(
            self::FREE => __(sprintf('%s.%s', 'general', self::FREE)),
            self::PAYED => __(sprintf('%s.%s', 'general', self::PAYED)),
            self::TRAIL => __(sprintf('%s.%s', 'general', self::TRAIL))
        );
    }
}
