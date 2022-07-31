<?php

declare(strict_types=1);

namespace App\Enum;

class EventOrganizedForEnum extends AbstractEnum
{
    public const PUBLIC = KeyWordEnum::PUBLIC;
    public const PRIVATE =KeyWordEnum::PRIVATE;
    public const TARGET_AUDIENCE = KeyWordEnum::TARGET_AUDIENCE;
    public const OTHER = KeyWordEnum::OTHER;

    public static function getValues(): array
    {
        return array(
            self::PUBLIC,
            self::PRIVATE,
            self::TARGET_AUDIENCE,
            self::OTHER
        );
    }

    public static function getTranslationKeys(): array
    {
        return array(
            self::PUBLIC => __('general.' . self::PUBLIC),
            self::PRIVATE => __('general.' . self::PRIVATE),
            self::TARGET_AUDIENCE => __('general.' . self::TARGET_AUDIENCE),
            self::OTHER => __('general.' . self::OTHER)
        );
    }
}
