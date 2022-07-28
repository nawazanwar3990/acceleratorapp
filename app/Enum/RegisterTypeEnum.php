<?php

declare(strict_types=1);

namespace App\Enum;

use App\Enum\AbstractEnum;

class RegisterTypeEnum extends AbstractEnum
{
    public const BUSINESS_ACCELERATOR = 'business_accelerator';
    public const FREELANCER = 'freelancer';
    public const CUSTOMER = 'customer';
    public const MENTOR = 'mentor';

    public static function getValues(): array
    {
        return array(
            self::BUSINESS_ACCELERATOR,
            self::FREELANCER,
            self::CUSTOMER,
            self::MENTOR
        );
    }

    public static function getTranslationKeys(): array
    {
        return array(
            self::BUSINESS_ACCELERATOR => __(sprintf('%s.%s', 'general.register_types', self::BUSINESS_ACCELERATOR)),
            self::FREELANCER => __(sprintf('%s.%s', 'general.register_types', self::FREELANCER)),
            self::CUSTOMER => __(sprintf('%s.%s', 'general.register_types', self::CUSTOMER)),
            self::MENTOR => __(sprintf('%s.%s', 'general.register_types', self::MENTOR)),

        );
    }
}
