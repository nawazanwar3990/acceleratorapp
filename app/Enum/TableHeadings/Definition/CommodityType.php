<?php
declare(strict_types=1);

namespace App\Enum\TableHeadings\Definition;

use App\Enum\AbstractEnum;

class CommodityType extends AbstractEnum
{
    public const NAME = 'name';
    public const PARENT_TYPE = 'parent_type';
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
            self::PARENT_TYPE => __(sprintf('%s.%s', 'general', self::PARENT_TYPE)),
            self::STATUS => __(sprintf('%s.%s', 'general', self::STATUS)),
        ];
    }
}
