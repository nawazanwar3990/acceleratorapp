<?php
declare(strict_types=1);

namespace App\Enum\TableHeadings\WorkingSpace;

use App\Enum\AbstractEnum;
use function __;

class FloorTableHeadingEnum extends AbstractEnum
{
    public const FLOOR_NAME = 'floor_name';
    public const FLOOR_NUMBER = 'floor_number';
    public const TYPE = 'type';
    public const PRICE = 'price';
    public const latitude = 'latitude';
    public const longitude = 'longitude';
    public const AREA = 'area';

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
            self::FLOOR_NAME => __(sprintf('%s.%s', 'general', self::FLOOR_NAME)),
            self::FLOOR_NUMBER => __(sprintf('%s.%s', 'general', self::FLOOR_NUMBER)),
            self::TYPE => __(sprintf('%s.%s', 'general', self::TYPE)),
            self::PRICE => __(sprintf('%s.%s', 'general', self::PRICE)),
         /*   self::latitude => __(sprintf('%s.%s', 'general', self::latitude)),
            self::longitude => __(sprintf('%s.%s', 'general', self::longitude)),*/
            self::AREA => __(sprintf('%s.%s', 'general', self::AREA)),
        ];
    }
}
