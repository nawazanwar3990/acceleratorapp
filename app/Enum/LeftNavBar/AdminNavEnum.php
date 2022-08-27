<?php

namespace App\Enum\LeftNavBar;

use App\Enum\AbstractEnum;
use App\Enum\KeyWordEnum;
use App\Enum\PackageTypeEnum;
use App\Enum\PaymentTypeProcessEnum;
use App\Enum\RoleEnum;
use App\Enum\ServiceTypeEnum;
use App\Enum\SubscriptionTypeEnum;
use Illuminate\Support\Facades\Auth;

class AdminNavEnum extends AbstractEnum
{
    public const DASHBOARD = KeyWordEnum::DASHBOARD;
    public const SERVICE = KeyWordEnum::SERVICE;
    public const PACKAGE = KeyWordEnum::PACKAGE;
    public const PAYMENT_RECEIPT = KeyWordEnum::PAYMENT_RECEIPT;
    public const SUBSCRIPTION = KeyWordEnum::SUBSCRIPTION;
    public const BA = KeyWordEnum::BA;
    public const FREELANCER = KeyWordEnum::FREELANCER;
    public const MENTOR = KeyWordEnum::MENTOR;
    public const CUSTOMER = KeyWordEnum::CUSTOMER;
    public const CMS = KeyWordEnum::CMS;

    public static function getValues(): array
    {
        return [
            self::DASHBOARD,
            self::SERVICE,
            self::PACKAGE,
            self::PAYMENT_RECEIPT,
            self::SUBSCRIPTION,
            self::BA,
            self::CMS,
            self::FREELANCER,
            self::MENTOR,
            self::CUSTOMER
        ];
    }

    public static function getIcon($key = null): ?string
    {
        $routes = [
            self::DASHBOARD => '<i></i>',
            self::SERVICE => '<i></i>',
            self::PACKAGE => '<i></i>',
            self::PAYMENT_RECEIPT => '<i></i>',
            self::SUBSCRIPTION => '<i></i>',
            self::BA => '<i></i>',
            self::FREELANCER => '<i></i>',
            self::MENTOR => '<i></i>',
            self::CUSTOMER => '<i></i>',
            self::CMS => '<i></i>'

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
            self::SERVICE => __(sprintf('%s.%s', 'general.left-bar', self::SERVICE)),
            self::PACKAGE => __(sprintf('%s.%s', 'general.left-bar', self::PACKAGE)),
            self::PAYMENT_RECEIPT => __(sprintf('%s.%s', 'general.left-bar', self::PAYMENT_RECEIPT)),
            self::SUBSCRIPTION => __(sprintf('%s.%s', 'general.left-bar', self::SUBSCRIPTION)),
            self::BA => __(sprintf('%s.%s', 'general.left-bar', self::BA)),
            self::FREELANCER => __(sprintf('%s.%s', 'general.left-bar', self::FREELANCER)),
            self::MENTOR => __(sprintf('%s.%s', 'general.left-bar', self::MENTOR)),
            self::CUSTOMER => __(sprintf('%s.%s', 'general.left-bar', self::CUSTOMER)),
            self::CMS => __(sprintf('%s.%s', 'general.left-bar', self::CMS)),

        ];
    }

    public static function getRoute($key = null)
    {
        $routes = array(
            self::DASHBOARD => route('dashboard.index'),
            self::SERVICE => route('dashboard.services.index', ['type' => ServiceTypeEnum::BUSINESS_ACCELERATOR]),
            self::PACKAGE => route('dashboard.packages.index', ['type' => PackageTypeEnum::BUSINESS_ACCELERATOR]),
            self::PAYMENT_RECEIPT => route('dashboard.payment-receipts.index', ['type' => RoleEnum::BUSINESS_ACCELERATOR]),
            self::BA => route('dashboard.ba.index', ['type' => PaymentTypeProcessEnum::DIRECT_PAYMENT]),
            self::FREELANCER => route('dashboard.freelancers.index', ['type' => PaymentTypeProcessEnum::DIRECT_PAYMENT]),
            self::MENTOR => route('dashboard.mentors.index', ['type' => PaymentTypeProcessEnum::DIRECT_PAYMENT]),
            self::CMS => null,
            self::SUBSCRIPTION => route('dashboard.subscriptions.index', ['type' => SubscriptionTypeEnum::PACKAGE, 'subscription_for' => RoleEnum::BUSINESS_ACCELERATOR]),
            self::CUSTOMER => route('dashboard.customers.index'),
        );
        if (!is_null($key) && array_key_exists($key, $routes)) {
            return $routes[$key];
        } else {
            return null;
        }
    }
}
