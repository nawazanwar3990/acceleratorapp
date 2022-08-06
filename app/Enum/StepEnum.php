<?php

declare(strict_types=1);

namespace App\Enum;

use App\Enum\AbstractEnum;

class StepEnum extends AbstractEnum
{
    public const PRINT = 'print';
    public const PACKAGES = 'packages';
    public const SERVICES = 'services';
    public const USER_INFO = 'user-info';
    public const COMPANY_PROFILE = 'company-profile';
    public const FOCAL_PERSON = 'focal-person';

    public static function getValues(): array
    {
        return array(
            self::USER_INFO,
            self::PACKAGES,
            self::SERVICES,
            self::COMPANY_PROFILE,
            self::FOCAL_PERSON
        );
    }

    public static function getTranslationKeys(): array
    {
        return array();
    }
}
