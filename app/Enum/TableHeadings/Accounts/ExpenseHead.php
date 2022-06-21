<?php
declare(strict_types=1);

namespace App\Enum\TableHeadings\Accounts;

use App\Enum\AbstractEnum;

class ExpenseHead extends AbstractEnum
{
    public const HEAD_NAME = 'head_name';
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
            self::HEAD_NAME => __(sprintf('%s.%s', 'general', self::HEAD_NAME)),
            self::PARENT_HEAD => __(sprintf('%s.%s', 'general', self::PARENT_HEAD)),
        ];
    }
}
