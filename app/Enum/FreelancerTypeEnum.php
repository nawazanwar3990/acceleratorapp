<?php

declare(strict_types=1);

namespace App\Enum;


class FreelancerTypeEnum extends AbstractEnum
{
    public const SERVICE_PROVIDER = 'sp';
    public const INDIVIDUAL = 'individual';

    public static function getValues(): array
    {
        return [
            self::SERVICE_PROVIDER,
            self::INDIVIDUAL
        ];
    }

    public static function getTranslationKeys(): array
    {
        return [
            self::SERVICE_PROVIDER => 'Service Provider',
            self::INDIVIDUAL => 'Freelancer'
        ];
    }
}
