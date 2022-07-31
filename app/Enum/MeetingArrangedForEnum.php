<?php

declare(strict_types=1);

namespace App\Enum;

class MeetingArrangedForEnum extends AbstractEnum
{
    public const PUBLIC = KeyWordEnum::PUBLIC;
    public const INDIVIDUAL =KeyWordEnum::INDIVIDUAL;
    public const COMPANY = KeyWordEnum::COMPANY;

    public static function getValues(): array
    {
        return array(
            self::PUBLIC,
            self::INDIVIDUAL,
            self::COMPANY
        );
    }

    public static function getTranslationKeys(): array
    {
        return array(
            self::PUBLIC => __('general.' . self::PUBLIC),
            self::INDIVIDUAL => __('general.' . self::INDIVIDUAL),
            self::COMPANY => __('general.' . self::COMPANY)
        );
    }
}
