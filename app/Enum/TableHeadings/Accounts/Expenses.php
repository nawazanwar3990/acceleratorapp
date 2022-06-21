<?php
declare(strict_types=1);

namespace App\Enum\TableHeadings\Accounts;

use App\Enum\AbstractEnum;

class Expenses extends AbstractEnum
{
    public const VOUCHER_NO = 'voucher_no';
    public const HEAD_NAME = 'head_name';
    public const DATE = 'date';
    public const AMOUNT = 'amount';
    public const PAYMENT_ACCOUNT = 'payment_account';
    public const DETAILS = 'details';
    public const ATTACHMENT = 'attachment';

    /**
     * @inheritDoc
     */
    public static function getValues(): array
    {
        return [];
    }

    /**
     * @inheritDoc
     */
    public static function getTranslationKeys(): array
    {
        return [
            self::VOUCHER_NO => __(sprintf('%s.%s', 'general', self::VOUCHER_NO)),
            self::HEAD_NAME => __(sprintf('%s.%s', 'general', self::HEAD_NAME)),
            self::DATE => __(sprintf('%s.%s', 'general', self::DATE)),
            self::AMOUNT => __(sprintf('%s.%s', 'general', self::AMOUNT)),
            self::PAYMENT_ACCOUNT => __(sprintf('%s.%s', 'general', self::PAYMENT_ACCOUNT)),
            self::DETAILS => __(sprintf('%s.%s', 'general', self::DETAILS)),
            self::ATTACHMENT => __(sprintf('%s.%s', 'general', self::ATTACHMENT)),
        ];
    }
}
