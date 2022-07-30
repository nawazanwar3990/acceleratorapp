<?php

declare(strict_types=1);

namespace App\Enum;


class ProjectTypeEnum extends AbstractEnum
{
    public const GOVERNMENT = 'government';
    public const PRIVATE = 'private';
    public const SEMI_GOVERNMENT = 'semi_government';

    public static function getValues(): array
    {
        return [
            self::GOVERNMENT,
            self::PRIVATE,
            self::SEMI_GOVERNMENT
        ];
    }

    public static function getTranslationKeys(): array
    {
        return [
            self::GOVERNMENT => 'Government',
            self::PRIVATE => 'Private',
            self::SEMI_GOVERNMENT => 'Semi Government'
        ];
    }
}
