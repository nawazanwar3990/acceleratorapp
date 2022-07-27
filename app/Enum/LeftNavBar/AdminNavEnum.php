<?php

namespace App\Enum\LeftNavBar;

use App\Enum\AbstractEnum;
use App\Enum\KeyWordEnum;
use App\Enum\RoleEnum;
use App\Enum\ServiceTypeEnum;
use App\Enum\SubscriptionTypeEnum;
use Illuminate\Support\Facades\Auth;

class AdminNavEnum extends AbstractEnum
{
    public const DASHBOARD = KeyWordEnum::DASHBOARD;
    public const SERVICE = KeyWordEnum::SERVICE;
    public const PACKAGE = KeyWordEnum::PACKAGE;
    public const SUBSCRIPTION = KeyWordEnum::SUBSCRIPTION;
    public const BA = KeyWordEnum::BA;
    public const SETTING = KeyWordEnum::SETTING;
    public static function getValues(): array
    {
        return [
            self::DASHBOARD,
            self::SERVICE,
            self::PACKAGE,
            self::SUBSCRIPTION,
            self::BA,
            self::SETTING
        ];
    }

    public static function getIcon($key = null): ?string
    {
        $routes = [
            self::DASHBOARD => '<i></i>',
            self::SERVICE => '<i></i>',
            self::PACKAGE => '<i></i>',
            self::SUBSCRIPTION => '<i></i>',
            self::BA => '<i></i>',
            self::SETTING => '<i></i>'

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
            self::SUBSCRIPTION => __(sprintf('%s.%s', 'general.left-bar', self::SUBSCRIPTION)),
            self::BA => __(sprintf('%s.%s', 'general.left-bar', self::BA)),
            self::SETTING => __(sprintf('%s.%s', 'general.left-bar', self::SETTING)),

        ];
    }

    public static function getRoute($key = null)
    {
        $routes = array(
            self::DASHBOARD => route('dashboard.index'),
            self::SERVICE => route('dashboard.services.index', ['type' => ServiceTypeEnum::BUSINESS_ACCELERATOR_SERVICE]),
            self::PACKAGE => route('dashboard.packages.index'),
            self::BA => route('dashboard.ba.index'),
            self::SETTING => route('dashboard.settings.index'),
            self::SUBSCRIPTION => route('dashboard.subscriptions.index', ['type' =>SubscriptionTypeEnum::PACKAGE]),
        );
        if (!is_null($key) && array_key_exists($key, $routes)) {
            return $routes[$key];
        } else {
            return null;
        }
    }
}
