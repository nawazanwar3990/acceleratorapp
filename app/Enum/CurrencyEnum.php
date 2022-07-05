<?php

declare(strict_types=1);

namespace App\Enum;

use App\Enum\AbstractEnum;

class CurrencyEnum extends AbstractEnum
{
    public const UAE = 'DHS';

    public static function getValues(): array
    {
        return array(
            self::UAE
        );
    }

    public static function getTranslationKeys(): array
    {
        return array(
            self::UAE => 'DHS',
        );
    }
}
