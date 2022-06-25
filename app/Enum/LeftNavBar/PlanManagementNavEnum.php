<?php
namespace App\Enum\LeftNavBar;

use App\Enum\AbstractEnum;
use App\Enum\KeyWordEnum;

class PlanManagementNavEnum extends AbstractEnum
{
    public const PLAN = KeyWordEnum::PLAN;
    public const INSTALLMENT = KeyWordEnum::INSTALLMENT;
    public const INSTALLMENT_TERM = KeyWordEnum::INSTALLMENT_TERM;
    public static function getValues(): array
    {
        return [
            self::PLAN,
            self::INSTALLMENT,
            self::INSTALLMENT_TERM
        ];
    }

    public static function getIcon($key = null): ?string
    {
        $routes = [
            self::PLAN => '<i class="mdi mdi-account"></i>',
            self::INSTALLMENT => '<i class="mdi mdi-account"></i>',
            self::INSTALLMENT_TERM => '<i class="mdi mdi-account"></i>',
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
            self::INSTALLMENT => __(sprintf('%s.%s', 'general', self::INSTALLMENT)),
            self::INSTALLMENT_TERM => __(sprintf('%s.%s', 'general', self::INSTALLMENT_TERM)),
        ];
    }

    public static function getRoute($key = null)
    {
        $routes = array(
            self::PLAN => route('dashboard.plans.create'),
            self::INSTALLMENT => route('dashboard.installments.index'),
            self::INSTALLMENT_TERM => route('dashboard.installment-terms.index'),
        );
        if (!is_null($key) && array_key_exists($key, $routes)) {
            return $routes[$key];
        } else {
            return null;
        }
    }
}
