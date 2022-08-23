<?php

declare(strict_types=1);

namespace App\Enum;


class EventOrganizeForEnum extends AbstractEnum
{
    public const REGISTERED_USER = 'registered_user';
    public const NON_REGISTERED_USER = 'non_registered_user';

    public static function getValues(): array
    {
        return [
            self::REGISTERED_USER,
            self::NON_REGISTERED_USER
        ];
    }

    public static function getTranslationKeys(): array
    {
        return [
            self::REGISTERED_USER => 'Registered User',
            self::NON_REGISTERED_USER => 'Non Registered User'
        ];
    }
}
