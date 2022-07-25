<?php

declare(strict_types=1);

namespace App\Enum;

use App\Enum\AbstractEnum;

class RegisterTypeEnum extends AbstractEnum
{
    public const BUSINESS_ACCELERATOR = 'business_accelerator';
    public const CUSTOMER = 'customer';
    public const MENTOR = 'mentor';

    public static function getValues(): array
    {
        return array(
            self::BUSINESS_ACCELERATOR,
            self::CUSTOMER,
            self::MENTOR
        );
    }

    public static function getTranslationKeys(): array
    {
        return array(
            self::BUSINESS_ACCELERATOR => __(sprintf('%s.%s', 'general', self::BUSINESS_ACCELERATOR)),
            self::CUSTOMER => __(sprintf('%s.%s', 'general', self::CUSTOMER)),
          /*  self::MENTOR => __(sprintf('%s.%s', 'general', self::MENTOR)),*/

        );
    }
}
