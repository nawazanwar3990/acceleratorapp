<?php

namespace App\Enum\LeftNavBar;

use App\Enum\AbstractEnum;
use App\Enum\KeyWordEnum;
use App\Enum\SubscriptionTypeEnum;

class CommonNavEnum extends AbstractEnum
{
    public const DASHBOARD = KeyWordEnum::DASHBOARD;
    public const SUBSCRIPTION = KeyWordEnum::SUBSCRIPTION;
    public const PAYMENT_RECEIPT = KeyWordEnum::PAYMENT_RECEIPT;
    public static function getValues(): array
    {
        return [
            self::DASHBOARD,
            self::SUBSCRIPTION,
            self::PAYMENT_RECEIPT
        ];
    }

    public static function getIcon($key = null): ?string
    {
        $routes = [
            self::DASHBOARD => '<i class="mdi mdi-account"></i>',
            self::SUBSCRIPTION => '<i class="mdi mdi-account"></i>',
            self::PAYMENT_RECEIPT => '<i class="mdi mdi-account"></i>'
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
            self::DASHBOARD => __(sprintf('%s.%s', 'general.left-bar', self::DASHBOARD)),
            self::SUBSCRIPTION => __(sprintf('%s.%s', 'general.left-bar', self::SUBSCRIPTION)),
            self::PAYMENT_RECEIPT => __(sprintf('%s.%s', 'general.left-bar', self::PAYMENT_RECEIPT))
        ];
    }

    public static function getAdminWorkingSpaces(): array
    {
        return [
            self::DASHBOARD => __(sprintf('%s.%s', 'general.left_bar', self::DASHBOARD)),
            self::SUBSCRIPTION => __(sprintf('%s.%s', 'general.left_bar', self::SUBSCRIPTION)),
            self::PAYMENT_RECEIPT => __(sprintf('%s.%s', 'general.left_bar', self::PAYMENT_RECEIPT))
        ];
    }

    public static function getRoute($key = null)
    {
        $routes = array(
            self::DASHBOARD => route('dashboard.index'),
            self::SUBSCRIPTION => route('dashboard.subscriptions.index', ['type' => SubscriptionTypeEnum::PACKAGE]),
            self::PAYMENT_RECEIPT => route('dashboard.payment-receipts.index')
        );
        if (!is_null($key) && array_key_exists($key, $routes)) {
            return $routes[$key];
        } else {
            return null;
        }
    }
}
