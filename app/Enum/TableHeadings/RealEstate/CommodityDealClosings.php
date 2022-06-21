<?php
declare(strict_types=1);

namespace App\Enum\TableHeadings\RealEstate;

use App\Enum\AbstractEnum;

class CommodityDealClosings extends AbstractEnum
{
    public const SALES_NO = 'sales_no';
    public const DATE = 'date';
    public const FLAT_SHOP = 'flat_shop';
    public const PURCHASERS = 'purchasers';
    public const DEAL_AMOUNT = 'deal_amount';
    public const COMMODITY_UNITS = 'commodity_units';
    public const COMMODITY_VALUE = 'commodity_value';

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
            self::SALES_NO => __(sprintf('%s.%s', 'general', self::SALES_NO)),
            self::DATE => __(sprintf('%s.%s', 'general', self::DATE)),
            self::FLAT_SHOP => __(sprintf('%s.%s', 'general', self::FLAT_SHOP)),
            self::PURCHASERS => __(sprintf('%s.%s', 'general', self::PURCHASERS)),
            self::DEAL_AMOUNT => __(sprintf('%s.%s', 'general', self::DEAL_AMOUNT)),
            self::COMMODITY_UNITS => __(sprintf('%s.%s', 'general', self::COMMODITY_UNITS)),
            self::COMMODITY_VALUE => __(sprintf('%s.%s', 'general', self::COMMODITY_VALUE)),
        ];
    }
}
