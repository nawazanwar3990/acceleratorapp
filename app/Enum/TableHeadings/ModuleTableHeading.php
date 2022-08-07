<?php
declare(strict_types=1);

namespace App\Enum\TableHeadings;

use App\Enum\AbstractEnum;
use function __;

class ModuleTableHeading extends AbstractEnum
{
    public const NAME = 'name';
    public const PARENT_TYPE = 'parent_type';
    public const CHILD_TYPE = 'child_type';
    public static function getValues(): array
    {
        return [];
    }
    public static function getTranslationKeys(): array
    {
        return [
            self::NAME => __(sprintf('%s.%s', 'general', self::NAME)),
            self::PARENT_TYPE => __(sprintf('%s.%s', 'general', self::PARENT_TYPE)),
            self::CHILD_TYPE => __(sprintf('%s.%s', 'general', self::CHILD_TYPE)),
        ];
    }
}
