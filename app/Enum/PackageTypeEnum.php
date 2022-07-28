<?php

declare(strict_types=1);

namespace App\Enum;

class PackageTypeEnum extends AbstractEnum
{
    public const BUSINESS_ACCELERATOR ='business_accelerator';
    public const FREELANCER = KeyWordEnum::FREELANCER;

    public static function getValues(): array
    {
        return array(
            self::BUSINESS_ACCELERATOR,
            self::FREELANCER
        );
    }

    public static function getTranslationKeys(): array
    {
        return array(
            self::BUSINESS_ACCELERATOR => __(sprintf('%s.%s', 'general.package_types', self::BUSINESS_ACCELERATOR)),
            self::FREELANCER => __(sprintf('%s.%s', 'general.package_types', self::FREELANCER))
        );
    }
    public static function getDropDownKey(): array
    {
        return array(
            self::BUSINESS_ACCELERATOR => 'Business Accelerator',
            self::FREELANCER =>'Freelancer'
        );
    }
}
