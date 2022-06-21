<?php
declare(strict_types=1);

namespace App\Enum\TableHeadings\RealEstate;

use App\Enum\AbstractEnum;

class Quotation extends AbstractEnum
{
    public const QUOT_NO = 'quotation_no';
    public const DATE = 'date';
    public const CUSTOMER_NAME = 'customer_name';
    public const CUSTOMER_CONTACT = 'customer_contact';
    public const FLAT_SHOP = 'flat_shop';

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
            self::QUOT_NO => __(sprintf('%s.%s', 'general', self::QUOT_NO)),
            self::DATE => __(sprintf('%s.%s', 'general', self::DATE)),
            self::CUSTOMER_NAME => __(sprintf('%s.%s', 'general', self::CUSTOMER_NAME)),
            self::CUSTOMER_CONTACT => __(sprintf('%s.%s', 'general', self::CUSTOMER_CONTACT)),
            self::FLAT_SHOP => __(sprintf('%s.%s', 'general', self::FLAT_SHOP)),
        ];
    }
}
