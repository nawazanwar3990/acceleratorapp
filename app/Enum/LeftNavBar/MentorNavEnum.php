<?php

namespace App\Enum\LeftNavBar;

use App\Enum\AbstractEnum;
use App\Enum\KeyWordEnum;
use App\Enum\SubscriptionTypeEnum;

class MentorNavEnum extends AbstractEnum
{
    public const PACKAGE = KeyWordEnum::PACKAGE;
    public const PAYMENT_RECEIPT =KeyWordEnum::PAYMENT_RECEIPT;

    public static function getValues(): array
    {
        return [
            self::PACKAGE,
            self::PAYMENT_RECEIPT
        ];
    }

    public static function getIcon($key = null): ?string
    {
        $routes = [
            self::PACKAGE => '<i class="bx bx-package"></i>',
            self::PAYMENT_RECEIPT => '<i class="bx bx-rupee"></i>',
        ];
        if (!is_null($key) && array_key_exists($key, $routes)) {
            return $routes[$key];
        } else {
            return null;
        }
    }

    public static function getCommonNavs(): array
    {
        return array(
            self::PACKAGE,
            self::PAYMENT_RECEIPT
        );
    }

    public static function getTranslationKeys(): array
    {
        return [
            self::PACKAGE => __(sprintf('%s.%s', 'general.left-bar', self::PACKAGE)),
            self::PAYMENT_RECEIPT => __(sprintf('%s.%s', 'general.left-bar', self::PAYMENT_RECEIPT)),
        ];
    }

    public static function getRoute($key = null)
    {
        $routes = array(
            self::PACKAGE => route('dashboard.subscriptions.index', ['type' => SubscriptionTypeEnum::PACKAGE])
        );
        if (!is_null($key) && array_key_exists($key, $routes)) {
            return $routes[$key];
        } else {
            return null;
        }
    }
}
