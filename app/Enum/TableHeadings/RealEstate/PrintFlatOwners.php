<?php
declare(strict_types=1);

namespace App\Enum\TableHeadings\RealEstate;

use App\Enum\AbstractEnum;

class PrintFlatOwners extends AbstractEnum
{
    public const HR_ID = 'hr_id';
    public const FLAT_NAME = 'flat_name';
    public const FULL_NAME = 'full_name';
    public const CNIC = 'cnic';
    public const DATE_OWNER_SHIP = 'date_owner_ship';
    public const STATUS = 'status';


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
            self::HR_ID => __(sprintf('%s.%s', 'general', self::HR_ID)),
            self::FLAT_NAME => __(sprintf('%s.%s', 'general', self::FLAT_NAME)),
            self::FULL_NAME => __(sprintf('%s.%s', 'general', self::FULL_NAME)),
            self::CNIC => __(sprintf('%s.%s', 'general', self::CNIC)),
            self::DATE_OWNER_SHIP => __(sprintf('%s.%s', 'general', self::DATE_OWNER_SHIP)),
            self::STATUS => __(sprintf('%s.%s', 'general', self::STATUS )),
        ];
    }
}
