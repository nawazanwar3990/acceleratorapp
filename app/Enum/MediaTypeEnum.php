<?php

declare(strict_types=1);

namespace App\Enum;

use App\Enum\AbstractEnum;

class MediaTypeEnum extends AbstractEnum
{
    public const BUILDING_DOCUMENT = 'building_document';
    public const FLOOR_DOCUMENT = 'floor_document';
    public const FLAT_DOCUMENT = 'flat_document';

    public const BUILDING_IMAGE = 'building_image';
    public const FLOOR_IMAGE = 'floor_image';
    public const FLAT_IMAGE = 'flat_image';

    public static function getValues(): array
    {
        return array();
    }

    public static function getTranslationKeys(): array
    {
        return array();
    }
}
