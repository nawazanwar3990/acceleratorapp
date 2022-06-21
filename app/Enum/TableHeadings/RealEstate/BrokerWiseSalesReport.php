<?php
declare(strict_types=1);

namespace App\Enum\TableHeadings\RealEstate;

use App\Enum\AbstractEnum;

class BrokerWiseSalesReport extends AbstractEnum
{
    public const SR = 'sr';
    public const BROKER = 'broker';
    public const TOTAL_SALES = 'total_sales';
    public const SALES_COUNT = 'sales_count';

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
            self::BROKER => __(sprintf('%s.%s', 'general', self::BROKER)),
            self::TOTAL_SALES => __(sprintf('%s.%s', 'general', self::TOTAL_SALES)),
            self::SALES_COUNT => __(sprintf('%s.%s', 'general', self::SALES_COUNT)),
        ];
    }
}
