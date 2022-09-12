<?php
declare(strict_types=1);

namespace App\Enum\TableHeadings\CMS;

use App\Enum\AbstractEnum;
use function __;

class BlogTableHeadingEnum extends AbstractEnum
{
    public const IMAGE = 'image';
    public const HEADING = 'heading';
    public const DESCRIPTION = 'description';



    public static function getValues(): array
    {
        return [];
    }

    public static function getTranslationKeys(): array
    {
        return [
            self::IMAGE => __(sprintf('%s.%s', 'general', self::IMAGE)),
            self::HEADING => __(sprintf('%s.%s', 'general', self::HEADING)),
            self::DESCRIPTION => __(sprintf('%s.%s', 'general', self::DESCRIPTION)),
        ];
    }
}
