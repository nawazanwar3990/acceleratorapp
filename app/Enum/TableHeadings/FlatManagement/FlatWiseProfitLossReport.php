<?php
declare(strict_types=1);

namespace App\Enum\TableHeadings\FlatManagement;

use App\Enum\AbstractEnum;
use function __;

class FlatWiseProfitLossReport extends AbstractEnum
{
    public const SR = 'sr';
    public const FLAT_NAME = 'flat_shop_name';
    public const FLAT_NUMBER = 'flat_shop_number';
    public const SALES_DATE = 'sales_date';
    public const PURCHASE_PRICE = 'purchase_price';
    public const SALES_PRICE = 'sales_price';
    public const PROFIT_LOSS = 'profit_loss';

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
            self::FLAT_NAME => __(sprintf('%s.%s', 'general', self::FLAT_NAME)),
            self::FLAT_NUMBER => __(sprintf('%s.%s', 'general', self::FLAT_NUMBER)),
            self::SALES_DATE => __(sprintf('%s.%s', 'general', self::SALES_DATE)),
            self::PURCHASE_PRICE => __(sprintf('%s.%s', 'general', self::PURCHASE_PRICE)),
            self::SALES_PRICE => __(sprintf('%s.%s', 'general', self::SALES_PRICE)),
            self::PROFIT_LOSS => __(sprintf('%s.%s', 'general', self::PROFIT_LOSS)),
        ];
    }
}
