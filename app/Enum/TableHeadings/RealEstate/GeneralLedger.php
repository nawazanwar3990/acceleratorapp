<?php
declare(strict_types=1);

namespace App\Enum\TableHeadings\RealEstate;

use App\Enum\AbstractEnum;

class GeneralLedger extends AbstractEnum
{
    public const SR = 'sr';
    public const DATE = 'date';
    public const HEADCODE = 'head_code';
    public const DESCRIPTION = 'description';
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
            self::SR => __(sprintf('%s.%s', 'general', self::SR)),
            self::DATE => __(sprintf('%s.%s', 'general', self::DATE)),
            self::HEADCODE => __(sprintf('%s.%s', 'general', self::HEADCODE)),
            self::DESCRIPTION => __(sprintf('%s.%s', 'general', self::DESCRIPTION)),
            self::DEBIT => __(sprintf('%s.%s', 'general', self::DEBIT)),
            self::CREDIT => __(sprintf('%s.%s', 'general', self::CREDIT)),
            self::BALANCE => __(sprintf('%s.%s', 'general', self::BALANCE)),
        ];
    }
}
