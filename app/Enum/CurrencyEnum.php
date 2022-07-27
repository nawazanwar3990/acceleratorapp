<?php

declare(strict_types=1);

namespace App\Enum;

use App\Enum\AbstractEnum;

class CurrencyEnum extends AbstractEnum
{
    public const UAE = 'DHS';
    public const SAR = 'SAR';

    public static function getValues(): array
    {
        return array(
            self::UAE,
            self::SAR
        );
    }

    public static function getTranslationKeys(): array
    {
        return array(
            self::UAE => 'DHS',
            self::SAR => 'SAR',
        );
    }
}
