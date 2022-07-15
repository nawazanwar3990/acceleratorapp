<?php

namespace App\Enum\LeftNavBar;

use App\Enum\AbstractEnum;
use App\Enum\KeyWordEnum;

class MainNavEnum extends AbstractEnum
{
    public const DASHBOARD = KeyWordEnum::DASHBOARD;
    public const SUBSCRIPTION_MANAGEMENT = KeyWordEnum::SUBSCRIPTION_MANAGEMENT;
    public const USER_MANAGEMENT = KeyWordEnum::USER_MANAGEMENT;
    public const BUSINESS_ACCELERATOR = KeyWordEnum::BUSINESS_ACCELERATOR;
    public const INVESTOR_MANAGEMENT = KeyWordEnum::INVESTOR_MANAGEMENT;
    public const CUSTOMER_MANAGEMENT = KeyWordEnum::CUSTOMER_MANAGEMENT;
    public const SERVICE_MANAGEMENT = KeyWordEnum::SERVICE_MANAGEMENT;
    public const FREELANCER_MANAGEMENT = KeyWordEnum::FREELANCER_MANAGEMENT;
    public const PLAN_MANAGEMENT = KeyWordEnum::PLAN_MANAGEMENT;
    public const SYSTEM_CONFIGURATION = KeyWordEnum::SYSTEM_CONFIGURATION;
    public const CO_WORKING_SPACE = KeyWordEnum::CO_WORKING_SPACE;
    public const SALE_MANAGEMENT = KeyWordEnum::SALE_MANAGEMENT;

    public static function getValues(): array
    {
        return [
            self::DASHBOARD,
            self::SUBSCRIPTION_MANAGEMENT,
            self::SERVICE_MANAGEMENT,
            self::BUSINESS_ACCELERATOR,
            self::CUSTOMER_MANAGEMENT,
            self::INVESTOR_MANAGEMENT,
            self::FREELANCER_MANAGEMENT,
            self::PLAN_MANAGEMENT,
            self::SYSTEM_CONFIGURATION,
            self::USER_MANAGEMENT,
            self::CO_WORKING_SPACE,
            self::SALE_MANAGEMENT
        ];
    }

    public static function getIcon($key = null): ?string
    {
        $routes = [
            self::DASHBOARD => '<i class="bx bxs-dashboard"></i>',
            self::SUBSCRIPTION_MANAGEMENT => '<i class="bx bx-info"></i>',
            self::SERVICE_MANAGEMENT => '<i class="bx bx-info"></i>',
            self::BUSINESS_ACCELERATOR => '<i class="bx bx-user-check"></i>',
            self::CUSTOMER_MANAGEMENT => '<i class="bx bxs-face"></i>',
            self::INVESTOR_MANAGEMENT => '<i class="bx bxs-face"></i>',
            self::FREELANCER_MANAGEMENT => '<i class="bx bxs-face"></i>',
            self::PLAN_MANAGEMENT => '<i class="bx bx-book-bookmark"></i>',
            self::SYSTEM_CONFIGURATION => '<i class="bx bx-briefcase"></i>',
            self::USER_MANAGEMENT => '<i class="bx bx-user"></i>',
            self::CO_WORKING_SPACE => '<i class="bx bxs-business"></i>',
            self::SALE_MANAGEMENT => '<i class="bx bx-chart-bar"></i>',
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
            self::DASHBOARD => __(sprintf('%s.%s', 'general', self::DASHBOARD)),
            self::SUBSCRIPTION_MANAGEMENT => __(sprintf('%s.%s', 'general', self::SUBSCRIPTION_MANAGEMENT)),
            self::SERVICE_MANAGEMENT => __(sprintf('%s.%s', 'general', self::SERVICE_MANAGEMENT)),
            self::PLAN_MANAGEMENT => __(sprintf('%s.%s', 'general', self::PLAN_MANAGEMENT)),
            self::CO_WORKING_SPACE => __(sprintf('%s.%s', 'general', self::CO_WORKING_SPACE)),
            self::USER_MANAGEMENT => __(sprintf('%s.%s', 'general', self::USER_MANAGEMENT)),
            self::BUSINESS_ACCELERATOR => __(sprintf('%s.%s', 'general', self::BUSINESS_ACCELERATOR)),
            self::CUSTOMER_MANAGEMENT => __(sprintf('%s.%s', 'general', self::CUSTOMER_MANAGEMENT)),
            self::FREELANCER_MANAGEMENT => __(sprintf('%s.%s', 'general', self::FREELANCER_MANAGEMENT)),
            self::INVESTOR_MANAGEMENT => __(sprintf('%s.%s', 'general', self::INVESTOR_MANAGEMENT)),
            self::SALE_MANAGEMENT => __(sprintf('%s.%s', 'general', self::SALE_MANAGEMENT)),
            self::SYSTEM_CONFIGURATION => __(sprintf('%s.%s', 'general', self::SYSTEM_CONFIGURATION)),
        ];
    }

    public static function getRoute($key = null)
    {
        $routes = array(
            self::DASHBOARD => route('dashboard.index'),
        );
        if (!is_null($key) && array_key_exists($key, $routes)) {
            return $routes[$key];
        } else {
            return null;
        }
    }
}
