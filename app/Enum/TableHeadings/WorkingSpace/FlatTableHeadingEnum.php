<?php
declare(strict_types=1);

namespace App\Enum\TableHeadings\WorkingSpace;

use App\Enum\AbstractEnum;
use function __;

class FlatTableHeadingEnum extends AbstractEnum
{
    public const FLOOR = 'floor';
    public const FLAT_SHOP_NAME = 'flat_shop_name';
    public const FLAT_SHOP_NUMBER = 'flat_shop_number';
    public const TYPE = 'type';
    public const PRICE = 'price';
    public const AREA = 'area';
    public const latitude = 'latitude';
    public const longitude = 'longitude';
    public const STATUS = 'status';
//    public const OWNERS = 'owners';

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
            self::FLOOR => __(sprintf('%s.%s', 'general', self::FLOOR)),
            self::FLAT_SHOP_NAME => __(sprintf('%s.%s', 'general', self::FLAT_SHOP_NAME)),
            self::FLAT_SHOP_NUMBER => __(sprintf('%s.%s', 'general', self::FLAT_SHOP_NUMBER)),
            self::TYPE => __(sprintf('%s.%s', 'general', self::TYPE)),
            self::PRICE => __(sprintf('%s.%s', 'general', self::PRICE)),
            self::AREA => __(sprintf('%s.%s', 'general', self::AREA)),
          /*  self::latitude => __(sprintf('%s.%s', 'general', self::latitude)),
            self::longitude => __(sprintf('%s.%s', 'general', self::longitude)),*/
            self::STATUS => __(sprintf('%s.%s', 'general', self::STATUS)),
//            self::OWNERS => __(sprintf('%s.%s', 'general', self::OWNERS)),
        ];
    }
}
