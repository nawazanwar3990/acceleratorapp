<?php
declare(strict_types=1);

namespace App\Enum\TableHeadings\RealEstate;

use App\Enum\AbstractEnum;

class BuyersList extends AbstractEnum
{
    public const SR = 'sr';
    public const NAME = 'name';
    public const CNIC = 'cnic';
    public const CONTACT = 'contact';
    public const HR_NO = 'hr_no';

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
            self::NAME => __(sprintf('%s.%s', 'general', self::NAME)),
            self::CNIC => __(sprintf('%s.%s', 'general', self::CNIC)),
            self::CONTACT => __(sprintf('%s.%s', 'general', self::CONTACT)),
            self::HR_NO => __(sprintf('%s.%s', 'general', self::HR_NO)),
        ];
    }
}
