<?php

declare(strict_types=1);

namespace App\Enum;

use App\Enum\AbstractEnum;

class ServiceTypeEnum extends AbstractEnum
{
    public const BASIC_SERVICE = KeyWordEnum::BASIC_SERVICE;
    public const ADDITIONAL_SERVICE = KeyWordEnum::ADDITIONAL_SERVICE;
    public const FREELANCER_SERVICE = 'freelancer_service';

    public static function getValues(): array
    {
        return array(
            self::BASIC_SERVICE,
            self::ADDITIONAL_SERVICE,
            self::FREELANCER_SERVICE
        );
    }

    public static function getTranslationKeys(): array
    {
        return array(
            self::BASIC_SERVICE => __(sprintf('%s.%s', 'general', self::BASIC_SERVICE)),
            self::ADDITIONAL_SERVICE => __(sprintf('%s.%s', 'general', self::ADDITIONAL_SERVICE)),
            self::FREELANCER_SERVICE => __(sprintf('%s.%s', 'general', self::FREELANCER_SERVICE)),

        );
    }

    public static function getServiceType($id = null)
    {
        $data = [
            self::BASIC_SERVICE  =>  __(sprintf('%s.%s', 'general', self::BASIC_SERVICE)),
            self::ADDITIONAL_SERVICE => __(sprintf('%s.%s', 'general', self::ADDITIONAL_SERVICE)),
            self::FREELANCER_SERVICE =>  __(sprintf('%s.%s', 'general', self::FREELANCER_SERVICE)),
        ];
        if (!is_null($id)) {
            $data = $data[$id];
        }

        return $data;
    }
}
