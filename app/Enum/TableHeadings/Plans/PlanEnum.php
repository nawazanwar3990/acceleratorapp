<?php
declare(strict_types=1);

namespace App\Enum\TableHeadings\Plans;

use App\Enum\AbstractEnum;

class PlanEnum extends AbstractEnum
{
    public const NAME = 'name';
    public const CUSTOMER_NAME = 'customer_name';
    public const SLUG = 'slug';
    public const Active = 'active';
    public const PRICE = 'price';
    public const TYPE = 'type';

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
            self::CUSTOMER_NAME => __(sprintf('%s.%s', 'general', self::CUSTOMER_NAME)),
            self::SLUG => __(sprintf('%s.%s', 'general', self::SLUG)),
            self::Active => __(sprintf('%s.%s', 'general', self::Active)),
            self::PRICE => __(sprintf('%s.%s', 'general', self::PRICE)),
            self::TYPE => __(sprintf('%s.%s', 'general', self::TYPE)),
        ];
    }
}
