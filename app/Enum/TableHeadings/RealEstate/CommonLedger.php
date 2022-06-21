<?php
declare(strict_types=1);

namespace App\Enum\TableHeadings\RealEstate;

use App\Enum\AbstractEnum;

class CommonLedger extends AbstractEnum
{
    public const DATE = 'date';
    public const DESCRIPTION = 'description';
    public const VOUCHER_NO = 'voucher_no';
    public const DEBIT = 'debit';
    public const CREDIT = 'credit';
    public const BALANCE = 'balance';

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
            self::DATE => __(sprintf('%s.%s', 'general', self::DATE)),
            self::DESCRIPTION => __(sprintf('%s.%s', 'general', self::DESCRIPTION)),
            self::VOUCHER_NO => __(sprintf('%s.%s', 'general', self::VOUCHER_NO)),
            self::DEBIT => __(sprintf('%s.%s', 'general', self::DEBIT)),
            self::CREDIT => __(sprintf('%s.%s', 'general', self::CREDIT)),
            self::BALANCE => __(sprintf('%s.%s', 'general', self::BALANCE)),
        ];
    }
}
