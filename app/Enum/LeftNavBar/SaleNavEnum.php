<?php
namespace App\Enum\LeftNavBar;

use App\Enum\AbstractEnum;
use App\Enum\KeyWordEnum;

class SaleNavEnum extends AbstractEnum
{
    public const SALE = KeyWordEnum::SALE;
    public const INSTALLMENT= KeyWordEnum::INSTALLMENT;

    public static function getValues(): array
    {
        return [
            self::SALE,
            self::INSTALLMENT
        ];
    }

    public static function getIcon($key = null): ?string
    {
        $routes = [
            self::SALE => '<i class="mdi mdi-account"></i>',
            self::INSTALLMENT => '<i class="mdi mdi-account"></i>',

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
            self::SALE => __(sprintf('%s.%s', 'general', self::SALE)),
            self::INSTALLMENT => __(sprintf('%s.%s', 'general', self::INSTALLMENT)),
        ];
    }

    public static function getRoute($key = null)
    {
        $routes = array(
            self::SALE => route('dashboard.sales.index'),
            self::INSTALLMENT => route('dashboard.installments.index'),
        );
        if (!is_null($key) && array_key_exists($key, $routes)) {
            return $routes[$key];
        } else {
            return null;
        }
    }
}
