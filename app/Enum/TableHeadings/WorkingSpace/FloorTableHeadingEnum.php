<?php
declare(strict_types=1);

namespace App\Enum\TableHeadings\WorkingSpace;

use App\Enum\AbstractEnum;
use function __;

class FloorTableHeadingEnum extends AbstractEnum
{
    public const BUILDING = 'building';
    public const FLOOR_NAME = 'floor_name';
    public const FLOOR_NUMBER = 'floor_number';
    public const DIMENSION = 'dimension';
    public const TYPE = 'type';
    public const OFFICES = 'offices';


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
            self::BUILDING => __(sprintf('%s.%s', 'general', self::BUILDING)),
            self::FLOOR_NAME => __(sprintf('%s.%s', 'general', self::FLOOR_NAME)),
            self::FLOOR_NUMBER => __(sprintf('%s.%s', 'general', self::FLOOR_NUMBER)),
            self::DIMENSION => __(sprintf('%s.%s', 'general', self::DIMENSION)),
            self::TYPE => __(sprintf('%s.%s', 'general', self::TYPE)),
            self::OFFICES => __(sprintf('%s.%s', 'general', self::OFFICES)),

        ];
    }
}
