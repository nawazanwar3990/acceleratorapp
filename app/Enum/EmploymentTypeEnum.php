<?php

declare(strict_types=1);

namespace App\Enum;


class EmploymentTypeEnum extends AbstractEnum
{
    public const PERMANENT = 'permanent';
    public const CONTRACT = 'contract';

    public static function getValues(): array
    {
        return [
            self::PERMANENT,
            self::CONTRACT
        ];
    }

    public static function getTranslationKeys(): array
    {
        return [
            self::PERMANENT => 'Permanent',
            self::CONTRACT => 'Contract'
        ];
    }
}
