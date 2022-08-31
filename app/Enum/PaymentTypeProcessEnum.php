<?php

declare(strict_types=1);

namespace App\Enum;

use App\Enum\AbstractEnum;

class PaymentTypeProcessEnum extends AbstractEnum
{
    public const CUSTOMIZED_PLAN = 'customized-plan';
    public const PRE_DEFINED_PLAN = 'pre-defined-plan';

    public static function getValues(): array
    {
        return array(
            self::CUSTOMIZED_PLAN,
            self::PRE_DEFINED_PLAN
        );
    }

    public static function getTranslationKeys(): array
    {
        return array(
            self::CUSTOMIZED_PLAN => __(sprintf('%s.%s', 'general', self::CUSTOMIZED_PLAN)),
            self::PRE_DEFINED_PLAN => __(sprintf('%s.%s', 'general', self::PRE_DEFINED_PLAN)),
        );
    }
}
