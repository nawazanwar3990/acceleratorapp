<?php
declare(strict_types=1);

namespace App\Enum\TableHeadings\RealEstate;

use App\Enum\AbstractEnum;

class AssetsInventory extends AbstractEnum
{
    public const ASSETS_CODE = 'assets_code';
    public const ASSETS_NAME = 'assets_name';
    public const QUANTITY = 'quantity';
    public const UNIT = 'unit';
    public const SERIES_MODEL = 'series_model';
    public const ASSETS_GROUP = 'assets_group';
    public const MANAGED_BY = 'managed_by';
    public const ASSETS_LOCATION = 'assets_location';
    public const DATE_OF_PURCHASE = 'date_of_purchase';
//    public const DOCUMENT = 'document';

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
            self::ASSETS_CODE => __(sprintf('%s.%s', 'general', self::ASSETS_CODE)),
            self::ASSETS_NAME => __(sprintf('%s.%s', 'general', self::ASSETS_NAME)),
            self::QUANTITY => __(sprintf('%s.%s', 'general', self::QUANTITY)),
            self::UNIT => __(sprintf('%s.%s', 'general', self::UNIT)),
            self::SERIES_MODEL => __(sprintf('%s.%s', 'general', self::SERIES_MODEL)),
            self::ASSETS_GROUP => __(sprintf('%s.%s', 'general', self::ASSETS_GROUP)),
            self::MANAGED_BY => __(sprintf('%s.%s', 'general', self::MANAGED_BY)),
            self::ASSETS_LOCATION => __(sprintf('%s.%s', 'general', self::ASSETS_LOCATION)),
            self::DATE_OF_PURCHASE => __(sprintf('%s.%s', 'general', self::DATE_OF_PURCHASE)),
//            self::DOCUMENT => __(sprintf('%s.%s', 'general', self::DOCUMENT)),
        ];
    }
}
