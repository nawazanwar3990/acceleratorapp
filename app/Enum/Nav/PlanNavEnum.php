<?php
namespace App\Enum\Nav;

use App\Enum\AbstractEnum;
use App\Enum\KeyWordEnum;

class PlanNavEnum extends AbstractEnum
{
    public const SUBSCRIPTION = KeyWordEnum::SUBSCRIPTION;
    public const PLAN = KeyWordEnum::PLAN;


    public static function getValues(): array
    {
        return [
            self::SUBSCRIPTION,
            self::PLAN,
        ];
    }

    public static function getIcon($key = null): ?string
    {
        $routes = [
            self::SUBSCRIPTION => '<i class="mdi mdi-account"></i>',
            self::PLAN => '<i class="mdi mdi-account"></i>',


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
            self::SUBSCRIPTION => __(sprintf('%s.%s', 'general', self::SUBSCRIPTION)),
            self::PLAN => __(sprintf('%s.%s', 'general', self::PLAN)),

        ];
    }

    public static function getRoute($key = null)
    {
        $routes = array(
            self::SUBSCRIPTION => route('dashboard.subscriptions.index'),
            self::PLAN => route('dashboard.plans.index'),
        );
        if (!is_null($key) && array_key_exists($key, $routes)) {
            return $routes[$key];
        } else {
            return null;
        }
    }
}
