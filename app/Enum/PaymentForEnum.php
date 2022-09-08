<?php

declare(strict_types=1);

namespace App\Enum;


class PaymentForEnum extends AbstractEnum
{
    public const PACKAGE_APPROVAL = 'package_approval';
    public const PACKAGE_EXPIRE = 'package_expire';
    public const OFFICE_SUBSCRIPTION_APPROVAL = 'office_subscription_approval';
    public const OFFICE_SUBSCRIPTION_EXPIRE = 'office_subscription_expire';

    public static function getValues(): array
    {
        return [
            self::PACKAGE_APPROVAL,
            self::PACKAGE_EXPIRE,
            self::OFFICE_SUBSCRIPTION_APPROVAL,
            self::OFFICE_SUBSCRIPTION_EXPIRE,

        ];
    }

    public static function getTranslationKeys(): array
    {
        return [
            self::PACKAGE_APPROVAL =>'Package Approval',
            self::PACKAGE_EXPIRE => 'Package Renew',
            self::OFFICE_SUBSCRIPTION_APPROVAL => 'Office Subscription Approval',
            self::OFFICE_SUBSCRIPTION_EXPIRE => 'Office Subscription Expire',
        ];
    }
}
