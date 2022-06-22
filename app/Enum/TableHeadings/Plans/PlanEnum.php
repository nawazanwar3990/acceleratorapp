<?php
declare(strict_types=1);

namespace App\Enum\TableHeadings\Plans;

use App\Enum\AbstractEnum;

class PlanEnum extends AbstractEnum
{
    public const NAME = 'name';
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
            self::SLUG => __(sprintf('%s.%s', 'general', self::SLUG)),
            self::Active => __(sprintf('%s.%s', 'general', self::Active)),
            self::PRICE => __(sprintf('%s.%s', 'general', self::PRICE)),
            self::TYPE => __(sprintf('%s.%s', 'general', self::TYPE)),
        ];
    }
}
