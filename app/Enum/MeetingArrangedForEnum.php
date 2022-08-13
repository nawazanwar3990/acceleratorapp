<?php

declare(strict_types=1);

namespace App\Enum;

class MeetingArrangedForEnum extends AbstractEnum
{
    public const REGISTERED_CLIENT ='registered_client';
    public const NEW_CLIENT ='new_client';
    public const REGISTERED_COMPANY = 'registered_company';
    public const NEW_COMPANY = 'new_company';
    public static function getValues(): array
    {
        return array(
            self::REGISTERED_CLIENT,
            self::NEW_CLIENT,
            self::REGISTERED_COMPANY,
            self::NEW_COMPANY
        );
    }

    public static function getTranslationKeys(): array
    {
        return array(
            self::REGISTERED_CLIENT => __('general.' . self::REGISTERED_CLIENT),
            self::NEW_CLIENT => __('general.' . self::NEW_CLIENT),
            self::REGISTERED_COMPANY => __('general.' . self::REGISTERED_COMPANY),
            self::NEW_COMPANY => __('general.' . self::NEW_COMPANY)
        );
    }
}
