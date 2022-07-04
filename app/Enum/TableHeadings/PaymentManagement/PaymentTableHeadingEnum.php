<?php
declare(strict_types=1);

namespace App\Enum\TableHeadings\PaymentManagement;

use App\Enum\AbstractEnum;

class PaymentTableHeadingEnum extends AbstractEnum
{
    public const SUBSCRIBED = 'subscribed';
    public const SUBSCRIPTION = 'subscription';
    public const PACKAGE = 'package';
    public const PAYMENT_TYPE = 'payment_type';
    public const TRANSACTION = 'transaction';

    public static function getValues(): array
    {
        return [];
    }
    public static function getTranslationKeys(): array
    {
        return [
            self::SUBSCRIBED => __(sprintf('%s.%s', 'general', self::SUBSCRIBED)),
            self::SUBSCRIPTION => __(sprintf('%s.%s', 'general', self::SUBSCRIPTION)),
            self::PACKAGE => __(sprintf('%s.%s', 'general', self::PACKAGE)),
            self::PAYMENT_TYPE => __(sprintf('%s.%s', 'general', self::PAYMENT_TYPE)),
            self::TRANSACTION => __(sprintf('%s.%s', 'general', self::TRANSACTION)),
        ];
    }
}
