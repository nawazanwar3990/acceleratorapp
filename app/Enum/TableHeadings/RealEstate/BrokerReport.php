<?php
declare(strict_types=1);

namespace App\Enum\TableHeadings\RealEstate;

use App\Enum\AbstractEnum;

class BrokerReport extends AbstractEnum
{
    public const SR = 'sr';
    public const BROKER = 'broker';
    public const TOTAL_BROKERY = 'total_brokery';
    public const PAID = 'paid';
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
            self::BROKER => __(sprintf('%s.%s', 'general', self::BROKER)),
            self::TOTAL_BROKERY => __(sprintf('%s.%s', 'general', self::TOTAL_BROKERY)),
            self::PAID => __(sprintf('%s.%s', 'general', self::PAID)),
            self::BALANCE => __(sprintf('%s.%s', 'general', self::BALANCE)),
        ];
    }
}
