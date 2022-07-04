<?php
declare(strict_types=1);

namespace App\Enum\TableHeadings\SalesManagement;

use App\Enum\AbstractEnum;

class SaleTableHeadingEnum extends AbstractEnum
{
    public const SALES_NO = 'sales_no';
    public const DATE = 'date';
    public const FLAT_SHOP = 'flat_shop';
    public const TYPE = 'type';
    public const PURCHASERS = 'purchasers';
    public const DEAL_AMOUNT = 'deal_amount';
    public static function getValues(): array
    {
        return [];
    }
    public static function getTranslationKeys(): array
    {
        return [
            self::SALES_NO => __(sprintf('%s.%s', 'general', self::SALES_NO)),
            self::DATE => __(sprintf('%s.%s', 'general', self::DATE)),
            self::FLAT_SHOP => __(sprintf('%s.%s', 'general', self::FLAT_SHOP)),
            self::TYPE => __(sprintf('%s.%s', 'general', self::TYPE)),
            self::PURCHASERS => __(sprintf('%s.%s', 'general', self::PURCHASERS)),
            self::DEAL_AMOUNT => __(sprintf('%s.%s', 'general', self::DEAL_AMOUNT)),
        ];
    }
}
