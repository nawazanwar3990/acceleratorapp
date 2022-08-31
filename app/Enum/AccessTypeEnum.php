<?php

declare(strict_types=1);

namespace App\Enum;

class AccessTypeEnum extends AbstractEnum
{
    public const BUSINESS_ACCELERATOR = 'business_accelerator';
    public const BUSINESS_ACCELERATOR_INDIVIDUAL = 'business_accelerator_individual';
    public const FREELANCER = KeyWordEnum::FREELANCER;
    public const SERVICE_PROVIDER_COMPANY = 'service_provider_company';
    public const MENTOR = 'mentor';

    public static function getValues(): array
    {
        return array(
            self::BUSINESS_ACCELERATOR,
            self::BUSINESS_ACCELERATOR_INDIVIDUAL,
            self::FREELANCER,
            self::SERVICE_PROVIDER_COMPANY,
            self::MENTOR
        );
    }

    public static function getTranslationKeys(): array
    {
        return array(
            self::BUSINESS_ACCELERATOR => 'BA Company',
            self::BUSINESS_ACCELERATOR_INDIVIDUAL => 'BA Individual',
            self::FREELANCER => 'Freelancer',
            self::SERVICE_PROVIDER_COMPANY => 'Service Provider Company',
            self::MENTOR => 'Mentor'
        );
    }
    public static function getStartups(): array
    {
        return array(
            self::BUSINESS_ACCELERATOR_INDIVIDUAL => 'BA Individual',
            self::BUSINESS_ACCELERATOR => 'BA Company',
            self::FREELANCER => 'Freelancer',
            self::SERVICE_PROVIDER_COMPANY => 'Service Provider Company',
            self::MENTOR => 'Mentor'
        );
    }
    public static function getDropDownKey(): array
    {
        return array(
            self::BUSINESS_ACCELERATOR => 'Business Accelerator',
            self::FREELANCER => 'Freelancer',
            self::MENTOR => 'Mentor'
        );
    }
}
