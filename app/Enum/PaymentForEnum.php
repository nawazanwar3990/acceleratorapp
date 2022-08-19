<?php

declare(strict_types=1);

namespace App\Enum;


class PaymentForEnum extends AbstractEnum
{
    public const PACKAGE_APPROVAL = 'package_approval';
    public const PACKAGE_EXPIRE = 'package_expire';

    public static function getValues(): array
    {
        return [
            self::PACKAGE_APPROVAL,
            self::PACKAGE_EXPIRE        ];
    }

    public static function getTranslationKeys(): array
    {
        return [
            self::PACKAGE_APPROVAL => trans('general.'.self::PACKAGE_APPROVAL),
            self::PACKAGE_EXPIRE => trans('general.'.self::PACKAGE_EXPIRE),
        ];
    }
}
