<?php
declare(strict_types=1);

namespace App\Enum\TableHeadings\UserManagement;

use App\Enum\AbstractEnum;
use function __;

class AdminTableHeadingEnum extends AbstractEnum
{
    public const HR_NO = 'hr_no';
    public const NAME = 'name';
    public const EMAIL = 'email';
    public static function getValues(): array
    {
        return [];
    }
    public static function getTranslationKeys(): array
    {
        return [
            self::HR_NO => __(sprintf('%s.%s', 'general', self::HR_NO)),
            self::NAME => __(sprintf('%s.%s', 'general', self::NAME)),
            self::EMAIL => __(sprintf('%s.%s', 'general', self::EMAIL))
        ];
    }
}
