<?php
namespace App\Enum\LeftNavBar;

use App\Enum\AbstractEnum;
use App\Enum\KeyWordEnum;

class CustomerManagementNavEnum extends AbstractEnum
{
    public const CUSTOMER = KeyWordEnum::CUSTOMER;
    public static function getValues(): array
    {
        return [
            self::CUSTOMER,
        ];
    }

    public static function getIcon($key = null): ?string
    {
        $routes = [
            self::CUSTOMER => '<i class="mdi mdi-account"></i>'


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
            self::CUSTOMER => __(sprintf('%s.%s', 'general', self::CUSTOMER)),
        ];
    }

    public static function getRoute($key = null)
    {
        $routes = array(
            self::CUSTOMER => route('dashboard.customers.index'),
        );
        if (!is_null($key) && array_key_exists($key, $routes)) {
            return $routes[$key];
        } else {
            return null;
        }
    }
}
