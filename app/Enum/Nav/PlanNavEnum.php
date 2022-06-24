<?php
namespace App\Enum\Nav;

use App\Enum\AbstractEnum;
use App\Enum\KeyWordEnum;

class PlanNavEnum extends AbstractEnum
{
    public const PLAN = KeyWordEnum::PLAN;


    public static function getValues(): array
    {
        return [
            self::PLAN,
        ];
    }

    public static function getIcon($key = null): ?string
    {
        $routes = [
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
            self::PLAN => __(sprintf('%s.%s', 'general', self::PLAN)),

        ];
    }

    public static function getRoute($key = null)
    {
        $routes = array(
            self::PLAN => route('dashboard.plans.index'),
        );
        if (!is_null($key) && array_key_exists($key, $routes)) {
            return $routes[$key];
        } else {
            return null;
        }
    }
}
