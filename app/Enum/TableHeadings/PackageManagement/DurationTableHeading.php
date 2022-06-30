<?php
declare(strict_types=1);

namespace App\Enum\TableHeadings\PackageManagement;

use App\Enum\AbstractEnum;
use function __;

class DurationTableHeading extends AbstractEnum
{
    public const NAME = 'name';
    public const SlUG = 'slug';
    public static function getValues(): array
    {
        return [];
    }
    public static function getTranslationKeys(): array
    {
        return [
            self::NAME => __(sprintf('%s.%s', 'general', self::NAME)),
            self::SlUG => __(sprintf('%s.%s', 'general', self::SlUG)),
        ];
    }
}
