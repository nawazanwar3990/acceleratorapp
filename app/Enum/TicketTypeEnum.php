<?php

declare(strict_types=1);

namespace App\Enum;

use Illuminate\Support\Str;

class TicketTypeEnum extends AbstractEnum
{
    public const FREE = KeyWordEnum::FREE;
    public const PAID = KeyWordEnum::PAID;

    public static function getValues(): array
    {
        return array(
            self::FREE,
            self::PAID
        );
    }

    public static function getTranslationKeys(): array
    {
        return array(
            self::FREE => __('general.' . self::FREE),
            self::PAID => __('general.' . self::PAID)
        );
    }
}
