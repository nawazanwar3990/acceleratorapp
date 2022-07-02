<?php
declare(strict_types=1);

namespace App\Enum\TableHeadings\WorkingSpace;

use App\Enum\AbstractEnum;

class BuildingTableHeadingEnum extends AbstractEnum
{
    public const NAME = 'name';
    public const AREA = 'area';
    public const BUILDING_TYPE = 'building_type';
    public const FLOORS = 'floors';
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
            self::NAME => __(sprintf('%s.%s', 'general', self::NAME)),
            self::AREA => __(sprintf('%s.%s', 'general', self::AREA)),
            self::BUILDING_TYPE => __(sprintf('%s.%s', 'general', self::BUILDING_TYPE)),
            self::FLOORS => __(sprintf('%s.%s', 'general', self::FLOORS)),
            self::STATUS => __(sprintf('%s.%s', 'general', self::STATUS)),
        ];
    }
}
