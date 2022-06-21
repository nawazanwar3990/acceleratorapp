<?php
declare(strict_types=1);

namespace App\Enum\TableHeadings\RealEstate\Devices;

use App\Enum\AbstractEnum;

class DeviceOperatingSystemEnum extends AbstractEnum
{
    public const NAME = 'name';
//    public const SLUG = 'slug';

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
//            self::SLUG => __(sprintf('%s.%s', 'general', self::SLUG)),
        ];
    }
}
