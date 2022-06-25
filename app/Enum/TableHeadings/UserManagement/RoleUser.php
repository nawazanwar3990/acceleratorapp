<?php

declare(strict_types=1);

namespace App\Enum\TableHeadings\UserManagement;

use App\Enum\AbstractEnum;
class RoleUser extends AbstractEnum
{
    public const NAME = 'name';
    public const EMAIL = 'email';

    public static function getValues(): array
    {
        return [

        ];
    }

    public static function getTranslationKeys(): array
    {
        return [

            self::NAME => __(sprintf('%s.%s', 'general', self::NAME)),
            self::EMAIL => __(sprintf('%s.%s', 'general', self::EMAIL)),
        ];
    }
}
