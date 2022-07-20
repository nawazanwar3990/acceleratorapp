<?php
declare(strict_types=1);

namespace App\Enum\TableHeadings\WorkingSpace;

use App\Enum\AbstractEnum;

class BuildingTableHeadingEnum extends AbstractEnum
{
    public const NAME = 'name';
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
          /*  self::DIMENSION => __(sprintf('%s.%s', 'general', self::DIMENSION)),*/
            self::BUILDING_TYPE => __(sprintf('%s.%s', 'general', self::BUILDING_TYPE)),
            self::ENTRY_GATES => __(sprintf('%s.%s', 'general', self::ENTRY_GATES)),
        ];
    }
}
