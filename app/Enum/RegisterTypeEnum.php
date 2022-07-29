<?php

declare(strict_types=1);

namespace App\Enum;

use App\Enum\AbstractEnum;

class RegisterTypeEnum extends AbstractEnum
{
    public const BUSINESS_ACCELERATOR = 'business_accelerator';
    public const FREELANCER_SERVICE_PROVIDER_COMPANY = 'freelancer';
    public const CUSTOMER = 'customer';
    public const MENTOR = 'mentor';

    public static function getValues(): array
    {
        return array(
            self::BUSINESS_ACCELERATOR,
            self::FREELANCER_SERVICE_PROVIDER_COMPANY,
            self::CUSTOMER,
            self::MENTOR
        );
    }

    public static function getTranslationKeys(): array
    {
        return array(
            self::BUSINESS_ACCELERATOR => __(sprintf('%s.%s', 'general.register_types', self::BUSINESS_ACCELERATOR)),
            self::FREELANCER_SERVICE_PROVIDER_COMPANY => __(sprintf('%s.%s', 'general.register_types', self::FREELANCER_SERVICE_PROVIDER_COMPANY)),
            self::CUSTOMER => __(sprintf('%s.%s', 'general.register_types', self::CUSTOMER)),
            self::MENTOR => __(sprintf('%s.%s', 'general.register_types', self::MENTOR)),

        );
    }
}
