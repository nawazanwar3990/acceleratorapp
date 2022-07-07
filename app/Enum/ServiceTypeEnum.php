<?php

declare(strict_types=1);

namespace App\Enum;

use App\Enum\AbstractEnum;

class ServiceTypeEnum extends AbstractEnum
{
    public const GENERAL_SERVICE = 'general_service';
    public const SECURITY_SERVICE = 'security_service';
    public const FREELANCER_SERVICE = 'freelancer_service';

    public static function getValues(): array
    {
        return array(
            self::GENERAL_SERVICE,
            self::SECURITY_SERVICE,
            self::FREELANCER_SERVICE
        );
    }

    public static function getTranslationKeys(): array
    {
        return array(
            self::GENERAL_SERVICE => __(sprintf('%s.%s', 'general', self::GENERAL_SERVICE)),
            self::SECURITY_SERVICE => __(sprintf('%s.%s', 'general', self::SECURITY_SERVICE)),
            self::FREELANCER_SERVICE => __(sprintf('%s.%s', 'general', self::FREELANCER_SERVICE)),

        );
    }

    public static function getServiceType($id = null)
    {
        $data = [
            self::GENERAL_SERVICE  =>  __(sprintf('%s.%s', 'general', self::GENERAL_SERVICE)),
            self::SECURITY_SERVICE => __(sprintf('%s.%s', 'general', self::SECURITY_SERVICE)),
            self::FREELANCER_SERVICE =>  __(sprintf('%s.%s', 'general', self::FREELANCER_SERVICE)),
        ];
        if (!is_null($id)) {
            $data = $data[$id];
        }

        return $data;
    }
}
