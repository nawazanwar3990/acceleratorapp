<?php
declare(strict_types=1);

namespace App\Enum\TableHeadings\CMS;

use App\Enum\AbstractEnum;
use function __;

class TeamTableHeadingEnum extends AbstractEnum
{
    public const IMAGE = 'image';
    public const NAME = 'name';
    public const DESIGNATION = 'designation';



    public static function getValues(): array
    {
        return [];
    }

    public static function getTranslationKeys(): array
    {
        return [
            self::IMAGE => __(sprintf('%s.%s', 'general', self::IMAGE)),
            self::NAME => __(sprintf('%s.%s', 'general', self::NAME)),
            self::DESIGNATION => __(sprintf('%s.%s', 'general', self::DESIGNATION)),
        ];
    }
}
