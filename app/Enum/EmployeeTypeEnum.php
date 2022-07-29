<?php

declare(strict_types=1);

namespace App\Enum;


class EmployeeTypeEnum extends AbstractEnum
{
    public const PHYSICAL = 'physical';
    public const REMOTE = 'remote';
    public const ONLINE = 'online';

    public static function getValues(): array
    {
        return [
            self::PHYSICAL,
            self::REMOTE,
            self::ONLINE
        ];
    }

    public static function getTranslationKeys(): array
    {
        return [
            self::PHYSICAL => 'Physical',
            self::REMOTE => 'Remote',
            self::ONLINE => 'Online'
        ];
    }
}
