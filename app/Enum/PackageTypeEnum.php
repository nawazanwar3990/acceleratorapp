<?php

declare(strict_types=1);

namespace App\Enum;

class PackageTypeEnum extends AbstractEnum
{
    public const COMPANY = 'company';
    public const INDIVIDUAL = 'individual';

    public static function getValues(): array
    {
        return array(
            self::COMPANY,
            self::INDIVIDUAL
        );
    }

    public static function getTranslationKeys(): array
    {
        return array(
            self::COMPANY => __(sprintf('%s.%s', 'general', self::COMPANY)),
            self::INDIVIDUAL => __(sprintf('%s.%s', 'general', self::INDIVIDUAL))
        );
    }
}
