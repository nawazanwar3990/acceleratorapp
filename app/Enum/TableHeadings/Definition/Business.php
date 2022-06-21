<?php
declare(strict_types=1);

namespace App\Enum\TableHeadings\Definition;

use App\Enum\AbstractEnum;

class Business extends AbstractEnum
{
    public const NAME = 'name';
    public const PARENT_HEAD = 'parent_head';

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
            self::PARENT_HEAD => __(sprintf('%s.%s', 'general', self::PARENT_HEAD)),
        ];
    }
}
