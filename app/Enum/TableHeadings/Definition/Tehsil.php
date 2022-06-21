<?php
declare(strict_types=1);

namespace App\Enum\TableHeadings\Definition;

use App\Enum\AbstractEnum;

class Tehsil extends AbstractEnum
{
    public const NAME = 'name';
    public const DISTRICT = 'district';
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
            self::DISTRICT => __(sprintf('%s.%s', 'general', self::DISTRICT)),
            self::STATUS => __(sprintf('%s.%s', 'general', self::STATUS)),
        ];
    }
}
