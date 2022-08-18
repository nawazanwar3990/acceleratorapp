<?php

declare(strict_types=1);

namespace App\Enum;


class PaymentForEnum extends AbstractEnum
{
    public const PACKAGE_APPROVAL = 'package_approval';

    public static function getValues(): array
    {
        return [
            self::PACKAGE_APPROVAL
        ];
    }

    public static function getTranslationKeys(): array
    {
        return [
            self::PACKAGE_APPROVAL => trans('general.'.self::PACKAGE_APPROVAL),
        ];
    }
}
