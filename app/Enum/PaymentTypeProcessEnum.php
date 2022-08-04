<?php

declare(strict_types=1);

namespace App\Enum;

use App\Enum\AbstractEnum;

class PaymentTypeProcessEnum extends AbstractEnum
{
    public const PRE_APPLY = 'pre_apply';
    public const DIRECT_PAYMENT = 'direct_apply';
    public static function getValues(): array
    {
        return array(
            self::PRE_APPLY,
            self::DIRECT_PAYMENT
        );
    }
    public static function getImage($key)
    {
        $images = array(
            self::PRE_APPLY => asset('images/icon/business_accelerator.png'),
            self::DIRECT_PAYMENT => asset('images/icon/freelancer.png')
        );
        if (!is_null($key) && array_key_exists($key, $images)) {
            return $images[$key];
        } else {
            return null;
        }
    }
    public static function getTranslationKeys(): array
    {
        return array(
            self::PRE_APPLY => __(sprintf('%s.%s', 'general', self::PRE_APPLY)),
            self::DIRECT_PAYMENT => __(sprintf('%s.%s', 'general', self::DIRECT_PAYMENT)),

        );
    }
}
