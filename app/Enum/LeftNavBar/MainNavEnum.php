<?php
namespace App\Enum\LeftNavBar;

use App\Enum\AbstractEnum;
use App\Enum\KeyWordEnum;

class MainNavEnum extends AbstractEnum
{
    public const DASHBOARD = KeyWordEnum::DASHBOARD;
    public const USER_MANAGEMENT = KeyWordEnum::USER_MANAGEMENT;
    public const SERVICE_MANAGEMENT =KeyWordEnum::SERVICE_MANAGEMENT;
    public const PLAN_MANAGEMENT =KeyWordEnum::PLAN_MANAGEMENT;
    public const EVENT_MANAGEMENT = KeyWordEnum::EVENT_MANAGEMENT;
    public const SYSTEM_CONFIGURATION = KeyWordEnum::SYSTEM_CONFIGURATION;
    public const FLAT_MANAGEMENT = KeyWordEnum::FLAT_MANAGEMENT;

    public static function getValues(): array
    {
        return [
            self::DASHBOARD,
            self::SERVICE_MANAGEMENT,
            self::PLAN_MANAGEMENT,
            self::SYSTEM_CONFIGURATION,
            self::USER_MANAGEMENT,
            self::EVENT_MANAGEMENT,
            self::FLAT_MANAGEMENT
        ];
    }

    public static function getIcon($key = null): ?string
    {
        $routes = [
            self::DASHBOARD => '<i class="bx bxs-dashboard"></i>',
            self::SERVICE_MANAGEMENT => '<i class="fas fa-info"></i>',
            self::PLAN_MANAGEMENT => '<i class="fas fa-info"></i>',
            self::SYSTEM_CONFIGURATION => '<i class="fas fa-briefcase"></i>',
            self::USER_MANAGEMENT => '<i class="fas fa-shopping-cart"></i>',
            self::EVENT_MANAGEMENT => '<i class="fas fa-chart-bar"></i>',
            self::FLAT_MANAGEMENT => '<i class="fas fa-chart-bar"></i>'
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
            self::USER_MANAGEMENT => __(sprintf('%s.%s', 'general', self::USER_MANAGEMENT)),
            self::SERVICE_MANAGEMENT => __(sprintf('%s.%s', 'general', self::SERVICE_MANAGEMENT)),
            self::FLAT_MANAGEMENT => __(sprintf('%s.%s', 'general', self::FLAT_MANAGEMENT)),
            self::PLAN_MANAGEMENT => __(sprintf('%s.%s', 'general', self::PLAN_MANAGEMENT)),
            self::EVENT_MANAGEMENT => __(sprintf('%s.%s', 'general', self::EVENT_MANAGEMENT)),
            self::SYSTEM_CONFIGURATION => __(sprintf('%s.%s', 'general', self::SYSTEM_CONFIGURATION)),
        ];
    }
}