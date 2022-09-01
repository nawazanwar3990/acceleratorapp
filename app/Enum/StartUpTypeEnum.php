<?php

declare(strict_types=1);

namespace App\Enum;

class StartUpTypeEnum extends AbstractEnum
{
    public const INDIVIDUAL = 'individual';
    public const COMPANY = 'company';

    public static function getValues(): array
    {
        return array(
            self::INDIVIDUAL,
            self::COMPANY
        );
    }

    public static function getTranslationKeys(): array
    {
        return array(
            self::INDIVIDUAL => 'Individual',
            self::COMPANY => 'Company',
        );
    }
}
