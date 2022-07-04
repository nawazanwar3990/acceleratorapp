<?php
namespace App\Enum\LeftNavBar;

use App\Enum\AbstractEnum;
use App\Enum\KeyWordEnum;

class PlanManagementNavEnum extends AbstractEnum
{
    public const INSTALLMENT_TERM = KeyWordEnum::INSTALLMENT_TERM;
    public const INSTALLMENT_PLAN= KeyWordEnum::INSTALLMENT_PLAN;

    public static function getValues(): array
    {
        return [
            self::INSTALLMENT_TERM,
            self::INSTALLMENT_PLAN
        ];
    }

    public static function getIcon($key = null): ?string
    {
        $routes = [
            self::INSTALLMENT_TERM => '<i class="mdi mdi-account"></i>',
            self::INSTALLMENT_PLAN => '<i class="mdi mdi-account"></i>',

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
            self::INSTALLMENT_TERM => __(sprintf('%s.%s', 'general', self::INSTALLMENT_TERM)),
            self::INSTALLMENT_PLAN => __(sprintf('%s.%s', 'general', self::INSTALLMENT_PLAN)),
        ];
    }

    public static function getRoute($key = null)
    {
        $routes = array(
            self::INSTALLMENT_TERM => route('dashboard.installment-terms.index'),
            self::INSTALLMENT_PLAN => route('dashboard.payments.index'),
        );
        if (!is_null($key) && array_key_exists($key, $routes)) {
            return $routes[$key];
        } else {
            return null;
        }
    }
}
