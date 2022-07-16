<?php
declare(strict_types=1);

namespace App\Enum\TableHeadings\PaymentManagement;

use App\Enum\AbstractEnum;

class PaymentTableHeadingEnum extends AbstractEnum
{
    public const SUBSCRIBED = 'subscribed';
    public const SUBSCRIPTION = 'subscription';
    public const PAYMENT_TYPE = 'payment_type';
    public const TRANSACTION = 'transaction';
    public const PRICE = 'price';
    public const CREATED_AT = 'created_at';

    public static function getValues(): array
    {
        return [];
    }

    public static function getTranslationKeys(): array
    {
        return [
            self::SUBSCRIBED => __(sprintf('%s.%s', 'general', self::SUBSCRIBED)),
            self::SUBSCRIPTION => __(sprintf('%s.%s', 'general', self::SUBSCRIPTION)),
            self::PAYMENT_TYPE => __(sprintf('%s.%s', 'general', self::PAYMENT_TYPE)),
            self::TRANSACTION => __(sprintf('%s.%s', 'general', self::TRANSACTION)),
            self::PRICE => __(sprintf('%s.%s', 'general', self::PRICE)),
            self::CREATED_AT => __(sprintf('%s.%s', 'general', self::CREATED_AT)),
        ];
    }
}
