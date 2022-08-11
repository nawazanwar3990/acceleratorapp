<?php
declare(strict_types=1);

namespace App\Enum\TableHeadings;

use App\Enum\AbstractEnum;
use function __;

class CustomerTableHeadingEnum extends AbstractEnum
{
    public const EMAIL = 'email';
    public const NAME = 'name';
    public static function getValues(): array
    {
        return [];
    }

    public static function getTranslationKeys(): array
    {
        return [
            self::EMAIL => __(sprintf('%s.%s', 'general', self::EMAIL)),
            self::NAME => __(sprintf('%s.%s', 'general', self::NAME)),
        ];
    }
}
