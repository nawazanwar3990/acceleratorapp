<?php
namespace App\Enum\Nav;

use App\Enum\AbstractEnum;
use App\Enum\KeyWordEnum;

class MainNavEnum extends AbstractEnum
{
    public const DASHBOARD = KeyWordEnum::DASHBOARD;
    public const DEFINITIONS = KeyWordEnum::DEFINITIONS;
    public const DEVICE_MANAGEMENT = KeyWordEnum::DEVICE_MANAGEMENT;
    public const BUILDING_UNITS = KeyWordEnum::BUILDING_UNITS;
    public const HUMAN_RESOURCE = KeyWordEnum::HUMAN_RESOURCE;
    public const FRONT_DESK = KeyWordEnum::FRONT_DESK;
    public const FIXED_ASSETS = KeyWordEnum::FIXED_ASSETS;
    public const SALES = KeyWordEnum::SALES;
    public const INCOME_EXPENSE = KeyWordEnum::INCOME_EXPENSE;
    public const ACCOUNTS = KeyWordEnum::ACCOUNTS;
    public const REPORTS = KeyWordEnum::REPORTS;
    public const INVENTORY = KeyWordEnum::INVENTORY;
    public const AUTHORIZATION = KeyWordEnum::AUTHORIZATION;
    public const PRINT = KeyWordEnum::PRINT;
    public const SETTINGS = KeyWordEnum::SETTINGS;

    public static function getValues(): array
    {
        return [
            self::DASHBOARD,
            self::DEFINITIONS,
            self::DEVICE_MANAGEMENT,
            self::BUILDING_UNITS,
            self::HUMAN_RESOURCE,
            self::FRONT_DESK,
            self::FIXED_ASSETS,
            self::SALES,
            self::INCOME_EXPENSE,
            self::ACCOUNTS,
            self::REPORTS,
            self::INVENTORY,
            self::AUTHORIZATION,
            self::PRINT,
            self::SETTINGS,
        ];
    }

    public static function getIcon($key = null): ?string
    {
        $routes = [
            self::DASHBOARD => '<i class="bx bxs-dashboard"></i>',
            self::DEFINITIONS => '<i class="fas fa-info"></i>',
            self::DEVICE_MANAGEMENT => '<i class="fas fa-info"></i>',
            self::BUILDING_UNITS => '<i class="fas fa-building"></i>',
            self::HUMAN_RESOURCE => '<i class="fas fa-users"></i>',
            self::FRONT_DESK => '<i class="fas fa-briefcase"></i>',
            self::FIXED_ASSETS => '<i class="fas fa-money-bill"></i>',
            self::SALES => '<i class="fas fa-shopping-cart"></i>',
            self::INCOME_EXPENSE => '<i class="far fa-money-bill-alt"></i>',
            self::ACCOUNTS => '<i class="fas fa-chart-pie"></i>',
            self::REPORTS => '<i class="fas fa-chart-bar"></i>',
            self::INVENTORY => '<i class="fas fa-boxes"></i>',
            self::AUTHORIZATION => '<i class="fas fa-lock"></i>',
            self::PRINT => '<i class="fas fa-print"></i>',
            self::SETTINGS => '<i class="fa fa-cog"></i>',
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
            self::DEFINITIONS => __(sprintf('%s.%s', 'general', self::DEFINITIONS)),
            self::DEVICE_MANAGEMENT => __(sprintf('%s.%s', 'general', self::DEVICE_MANAGEMENT)),
            self::BUILDING_UNITS => __(sprintf('%s.%s', 'general', self::BUILDING_UNITS)),
            self::HUMAN_RESOURCE => __(sprintf('%s.%s', 'general', self::HUMAN_RESOURCE)),
            self::FRONT_DESK => __(sprintf('%s.%s', 'general', self::FRONT_DESK)),
            self::FIXED_ASSETS => __(sprintf('%s.%s', 'general', self::FIXED_ASSETS)),
            self::SALES => __(sprintf('%s.%s', 'general', self::SALES)),
            self::INCOME_EXPENSE => __(sprintf('%s.%s', 'general', self::INCOME_EXPENSE)),
            self::ACCOUNTS => __(sprintf('%s.%s', 'general', self::ACCOUNTS)),
            self::REPORTS => __(sprintf('%s.%s', 'general', self::REPORTS)),
            self::INVENTORY => __(sprintf('%s.%s', 'general', self::INVENTORY)),
            self::AUTHORIZATION => __(sprintf('%s.%s', 'general', self::AUTHORIZATION)),
            self::PRINT => __(sprintf('%s.%s', 'general', self::PRINT)),
            self::SETTINGS => __(sprintf('%s.%s', 'general', self::SETTINGS)),
        ];
    }
}
