<?php

declare(strict_types=1);

namespace App\Enum;

use App\Enum\AbstractEnum;

class PaymentTypeProcessEnum extends AbstractEnum
{
    public const PRE_PAYMENT = 'pre-payment';
    public const DIRECT_PAYMENT = 'direct-payment';

    public static function getValues(): array
    {
        return array(
            self::PRE_PAYMENT,
            self::DIRECT_PAYMENT
        );
    }

    public static function getTranslationKeys(): array
    {
        return array(
            self::DIRECT_PAYMENT => 'Direct Apply',
            self::PRE_PAYMENT => 'Pre Apply',
        );
    }
}
