<?php
declare(strict_types=1);

namespace App\Enum\TableHeadings\UserManagement;

use App\Enum\AbstractEnum;
use function __;

class AdminTableHeadingEnum extends AbstractEnum
{
    public const EMAIL = 'email';

    public static function getValues(): array
    {
        return [];
    }

    public static function getTranslationKeys(): array
    {
        return [
            self::EMAIL => __(sprintf('%s.%s', 'general', self::EMAIL)),
        ];
    }
}
