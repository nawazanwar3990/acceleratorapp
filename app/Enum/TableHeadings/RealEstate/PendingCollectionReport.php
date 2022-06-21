<?php
declare(strict_types=1);

namespace App\Enum\TableHeadings\RealEstate;

use App\Enum\AbstractEnum;

class PendingCollectionReport extends AbstractEnum
{
    public const SR = 'sr';
    public const SALES_NO = 'sales_no';
    public const SALES_DATE = 'sales_date';
    public const DEAL_AMOUNT = 'deal_amount';
    public const RECEIVED_AMOUNT = 'received_amount';
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
            self::SALES_NO => __(sprintf('%s.%s', 'general', self::SALES_NO)),
            self::SALES_DATE => __(sprintf('%s.%s', 'general', self::SALES_DATE)),
            self::DEAL_AMOUNT => __(sprintf('%s.%s', 'general', self::DEAL_AMOUNT)),
            self::RECEIVED_AMOUNT => __(sprintf('%s.%s', 'general', self::RECEIVED_AMOUNT)),
            self::BALANCE => __(sprintf('%s.%s', 'general', self::BALANCE)),
        ];
    }
}
