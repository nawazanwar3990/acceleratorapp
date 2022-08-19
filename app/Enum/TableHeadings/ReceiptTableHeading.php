<?php
declare(strict_types=1);

namespace App\Enum\TableHeadings;

use App\Enum\AbstractEnum;
use function __;

class ReceiptTableHeading extends AbstractEnum
{
    public const SENDER = 'sender';
    public const PAYMENT_TYPE = 'payment_type';
    public const PAYMENT_FOR = 'payment_for';
    public const TRANSACTION_ID = 'transaction_id';
    public const TRANSACTION_AMOUNT = 'transaction_amount';
    public static function getValues(): array
    {
        return [];
    }

    public static function getTranslationKeys(): array
    {
        return [
            self::SENDER => __(sprintf('%s.%s', 'general', self::SENDER)),
            self::PAYMENT_TYPE => __(sprintf('%s.%s', 'general', self::PAYMENT_TYPE)),
            self::PAYMENT_FOR => __(sprintf('%s.%s', 'general', self::PAYMENT_FOR)),
            self::TRANSACTION_ID => __(sprintf('%s.%s', 'general', self::TRANSACTION_ID)),
            self::TRANSACTION_AMOUNT => __(sprintf('%s.%s', 'general', self::TRANSACTION_AMOUNT)),
        ];
    }
}
