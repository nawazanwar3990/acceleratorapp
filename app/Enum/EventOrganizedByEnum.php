<?php

declare(strict_types=1);

namespace App\Enum;

class EventOrganizedByEnum extends AbstractEnum
{
    public const MANAGEMENT = KeyWordEnum::MANAGEMENT;
    public const BUSINESS_ACCELERATOR =KeyWordEnum::BUSINESS_ACCELERATOR;
    public const INDIVIDUAL_PERSON = KeyWordEnum::INDIVIDUAL_PERSON;
    public const COMPANY = KeyWordEnum::COMPANY;
    public const OTHER = KeyWordEnum::OTHER;

    public static function getValues(): array
    {
        return array(
            self::MANAGEMENT,
            self::BUSINESS_ACCELERATOR,
            self::INDIVIDUAL_PERSON,
            self::COMPANY,
            self::OTHER
        );
    }

    public static function getTranslationKeys(): array
    {
        return array(
            self::MANAGEMENT => __('general.' . self::MANAGEMENT),
            self::BUSINESS_ACCELERATOR => __('general.' . self::BUSINESS_ACCELERATOR),
            self::INDIVIDUAL_PERSON => __('general.' . self::INDIVIDUAL_PERSON),
            self::COMPANY => __('general.' . self::COMPANY),
            self::OTHER => __('general.' . self::OTHER)
        );
    }
}
