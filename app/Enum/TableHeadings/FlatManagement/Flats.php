<?php
declare(strict_types=1);

namespace App\Enum\TableHeadings\FlatManagement;

use App\Enum\AbstractEnum;
use function __;

class Flats extends AbstractEnum
{
    public const FLOOR = 'floor';
    public const FLAT_SHOP_NAME = 'flat_shop_name';
    public const FLAT_SHOP_NUMBER = 'flat_shop_number';
    public const TYPE = 'type';
    public const AREA = 'area';
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
            self::AREA => __(sprintf('%s.%s', 'general', self::AREA)),
            self::STATUS => __(sprintf('%s.%s', 'general', self::STATUS)),
//            self::OWNERS => __(sprintf('%s.%s', 'general', self::OWNERS)),
        ];
    }
}
