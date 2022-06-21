<?php

declare(strict_types=1);

namespace App\Enum;

use App\Enum\AbstractEnum;

class DeviceGenerationEnum extends AbstractEnum
{
    public const FIRST = '1';
    public const SECOND = '2';
    public const THIRD = '3';
    public const FOURTH = '4';
    public const FIFTH = '5';

    public static function getValues(): array
    {
        return array(
            self::FIRST,
            self::SECOND,
            self::THIRD,
            self::FOURTH,
            self::FIFTH
        );
    }

    public static function getTranslationKeys(): array
    {
        return array(
            self::FIRST => '1',
            self::SECOND => '2',
            self::THIRD => '3',
            self::FOURTH =>'4',
            self::FIFTH => '5',
        );
    }
}
