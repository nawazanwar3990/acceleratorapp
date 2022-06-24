<?php
namespace App\Enum\Nav;

use App\Enum\AbstractEnum;
use App\Enum\KeyWordEnum;

class PlanNavEnum extends AbstractEnum
{
    public const PLAN_LIST = KeyWordEnum::PLAN_LIST;
    public const PLAN_NEW = KeyWordEnum::PLAN_NEW;


    public static function getValues(): array
    {
        return [
            self::PLAN_LIST,
            self::PLAN_NEW,
        ];
    }

    public static function getIcon($key = null): ?string
    {
        $routes = [
            self::PLAN_LIST => '<i class="mdi mdi-account"></i>',
            self::PLAN_NEW => '<i class="mdi mdi-account"></i>',


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
            self::PLAN_NEW => __(sprintf('%s.%s', 'general', self::PLAN_NEW)),
            self::PLAN_LIST => __(sprintf('%s.%s', 'general', self::PLAN_LIST)),

        ];
    }

    public static function getRoute($key = null)
    {
        $routes = array(
            self::PLAN_NEW => route('dashboard.plans.create'),
            self::PLAN_LIST => route('dashboard.plans.index'),
        );
        if (!is_null($key) && array_key_exists($key, $routes)) {
            return $routes[$key];
        } else {
            return null;
        }
    }
}
