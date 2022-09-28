<?php
declare(strict_types=1);

namespace App\Enum\TableHeadings\CMS;

use App\Enum\AbstractEnum;
use function __;

class DescriptiveTableHeadingEnum extends AbstractEnum
{
    public const FRONT_IMAGE = 'front_image';
    public const BACK_IMAGE = 'back_image';
    public const HEADING = 'heading';
    public const DESCRIPTION = 'description';



    public static function getValues(): array
    {
        return [];
    }

    public static function getTranslationKeys(): array
    {
        return [
            self::FRONT_IMAGE => __(sprintf('%s.%s', 'general', self::FRONT_IMAGE)),
            self::BACK_IMAGE => __(sprintf('%s.%s', 'general', self::BACK_IMAGE)),
            self::HEADING => __(sprintf('%s.%s', 'general', self::HEADING)),
            self::DESCRIPTION => __(sprintf('%s.%s', 'general', self::DESCRIPTION)),
        ];
    }
}
