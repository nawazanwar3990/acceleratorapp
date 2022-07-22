<?php

namespace App\Enum\LeftNavBar;

use App\Enum\AbstractEnum;
use App\Enum\KeyWordEnum;
use App\Enum\RoleEnum;
use App\Enum\ServiceTypeEnum;
use App\Enum\SubscriptionTypeEnum;
use Illuminate\Support\Facades\Auth;

class MainNavEnum extends AbstractEnum
{
    public const DASHBOARD = KeyWordEnum::DASHBOARD;
    public const SERVICE = KeyWordEnum::SERVICE;
    public const PACKAGE = KeyWordEnum::PACKAGE;
    public const PLAN = KeyWordEnum::PLAN;
    public const SUBSCRIPTION = KeyWordEnum::SUBSCRIPTION;
    public const BA = KeyWordEnum::BA;
    public const CUSTOMER = KeyWordEnum::CUSTOMER;
    public const FREELANCER = KeyWordEnum::FREELANCER;
    public const INCUBATOR = KeyWordEnum::INCUBATOR;

    public static function getValues(): array
    {
        return [
            self::DASHBOARD,
            self::SERVICE,
            self::PACKAGE,
            self::PLAN,
            self::SUBSCRIPTION,
            self::BA,
            self::CUSTOMER,
            self::FREELANCER,
            self::INCUBATOR
        ];
    }

    public static function getIcon($key = null): ?string
    {
        $routes = [
            self::DASHBOARD => '<i></i>',
            self::SERVICE => '<i></i>',
            self::PACKAGE => '<i></i>',
            self::PLAN => '<i></i>',
            self::SUBSCRIPTION => '<i></i>',
            self::BA => '<i></i>',
            self::CUSTOMER => '<i></i>',
            self::FREELANCER => '<i></i>',
            self::INCUBATOR => '<i></i>'
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
            self::PLAN => __(sprintf('%s.%s', 'general.left-bar', self::PLAN)),
            self::SUBSCRIPTION => __(sprintf('%s.%s', 'general.left-bar', self::SUBSCRIPTION)),
            self::BA => __(sprintf('%s.%s', 'general.left-bar', self::BA)),
            self::CUSTOMER => __(sprintf('%s.%s', 'general.left-bar', self::CUSTOMER)),
            self::FREELANCER => __(sprintf('%s.%s', 'general.left-bar', self::FREELANCER)),
            self::INCUBATOR => __(sprintf('%s.%s', 'general.left-bar', self::INCUBATOR))
        ];
    }

    public static function getRoute($key = null)
    {
        $routes = array(
            self::SERVICE => route('dashboard.services.index', ['type' => ServiceTypeEnum::BASIC_SERVICE]),
            self::PACKAGE => route('dashboard.packages.index'),
            self::SUBSCRIPTION => route('dashboard.subscriptions.index', ['type' => Auth::user()->hasRole(RoleEnum::SUPER_ADMIN) ? SubscriptionTypeEnum::PACKAGE : SubscriptionTypeEnum::PLAN]),
            self::CUSTOMER => route('dashboard.customers.index'),
            self::FREELANCER => route('dashboard.freelancers.index'),
            self::PLAN => route('dashboard.plans.index'),
        );
        if (!is_null($key) && array_key_exists($key, $routes)) {
            return $routes[$key];
        } else {
            return null;
        }
    }
}
