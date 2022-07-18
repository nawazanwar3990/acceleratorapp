<?php
declare(strict_types=1);

namespace App\Enum\TableHeadings\WorkingSpace;

use App\Enum\AbstractEnum;

class BuildingTableHeadingEnum extends AbstractEnum
{
    public const NAME = 'name';
    public const FLOORS = 'floors';
    public const OFFICES = 'offices';
    public const DIMENSION = 'dimension';
    public const BUILDING_TYPE = 'building_type';
    public const ENTRY_GATES = 'entry_gates';


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
            self::NAME => __(sprintf('%s.%s', 'general', self::NAME)),
            self::FLOORS => __(sprintf('%s.%s', 'general', self::FLOORS)),
            self::OFFICES => __(sprintf('%s.%s', 'general', self::OFFICES)),
            self::DIMENSION => __(sprintf('%s.%s', 'general', self::DIMENSION)),
            self::BUILDING_TYPE => __(sprintf('%s.%s', 'general', self::BUILDING_TYPE)),
            self::ENTRY_GATES => __(sprintf('%s.%s', 'general', self::ENTRY_GATES)),
        ];
    }
}
