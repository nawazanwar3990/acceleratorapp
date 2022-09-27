<?php

namespace App\Enum\LeftNavBar;

use App\Enum\AbstractEnum;
use App\Enum\KeyWordEnum;

class CustomerNavEnum extends AbstractEnum
{
    public const SUBSCRIPTION = KeyWordEnum::SUBSCRIPTION;
    public const PAYMENT_RECEIPT = KeyWordEnum::PAYMENT_RECEIPT;

    public static function getValues(): array
    {
        return [
            self::SUBSCRIPTION,
            self::PAYMENT_RECEIPT
        ];
    }

    public static function getIcon($key = null): ?string
    {
        $routes = [
            self::SUBSCRIPTION => '<i class="bx bx-subdirectory-left"></i>',
            self::PAYMENT_RECEIPT => '<i class="bx bx-rupee"></i>',

        ];
        if (!is_null($key) && array_key_exists($key, $routes)) {
            return $routes[$key];
        } else {
            return null;
        }
    }

    public static function getTranslationKeys(): array
    {
        return [
            self::SUBSCRIPTION => __(sprintf('%s.%s', 'general.left-bar', self::SUBSCRIPTION)),
            self::PAYMENT_RECEIPT => __(sprintf('%s.%s', 'general.left-bar', self::PAYMENT_RECEIPT)),
        ];
    }
}
