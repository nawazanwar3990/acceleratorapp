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
            self::SERVICE => '<i class="bx bx-server"></i>',
            self::PACKAGE => '<i class="bx bx-package"></i>',
            self::PAYMENT_RECEIPT => '<i class="bx bx-rupee"></i>',
            self::SUBSCRIPTION => '<i class="bx bx-subdirectory-left"></i>',
            self::BA => '<i class="bx bx-user"></i>',
            self::FREELANCER => '<i class="bx bx-user"></i>',
            self::MENTOR => '<i class="bx bx-user"></i>',
            self::CUSTOMER => '<i class="bx bx-user"></i>',
            self::CMS => '<i class="bx bx-calendar"></i>'

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
            self::SERVICE => route('dashboard.services.index', ['type' => ServiceTypeEnum::BUSINESS_ACCELERATOR]),
            self::PACKAGE => route('dashboard.packages.index', ['type' => PackageTypeEnum::BUSINESS_ACCELERATOR]),
            self::PAYMENT_RECEIPT => route('dashboard.payment-receipts.index', ['type' => RoleEnum::BUSINESS_ACCELERATOR]),
            self::BA => route('dashboard.ba.index', ['type' => PaymentTypeProcessEnum::PRE_DEFINED_PLAN]),
            self::FREELANCER => route('dashboard.freelancers.index', ['type' => PaymentTypeProcessEnum::PRE_DEFINED_PLAN]),
            self::MENTOR => route('dashboard.mentors.index', ['type' => PaymentTypeProcessEnum::PRE_DEFINED_PLAN]),
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
