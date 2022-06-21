<?php
namespace App\Enum\Nav;

use App\Enum\AbstractEnum;
use App\Enum\KeyWordEnum;

class InventoryNavEnum extends AbstractEnum
{
    public const PURCHASE_STOCK = KeyWordEnum::PURCHASE_STOCK;
    public const OWN_STOCK = KeyWordEnum::OWN_STOCK;
    public const INVESTOR_STOCK = KeyWordEnum::INVESTOR_STOCK;

    public static function getValues(): array
    {
        return [
            self::PURCHASE_STOCK,
            self::OWN_STOCK,
            self::INVESTOR_STOCK,
        ];
    }

    public static function getIcon($key = null): ?string
    {
        $routes = [
            self::PURCHASE_STOCK => '<i class="mdi mdi-account"></i>',
            self::OWN_STOCK => '<i class="far fa-user"></i>',
            self::INVESTOR_STOCK => '<i class="far fa-user"></i>',
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
            self::PURCHASE_STOCK => __(sprintf('%s.%s', 'general', self::PURCHASE_STOCK)),
            self::OWN_STOCK => __(sprintf('%s.%s', 'general', self::OWN_STOCK)),
            self::INVESTOR_STOCK => __(sprintf('%s.%s', 'general', self::INVESTOR_STOCK)),
        ];
    }

    public static function getRoute($key = null)
    {
        $routes = array(
            self::PURCHASE_STOCK => route('dashboard'),
            self::OWN_STOCK => route('dashboard'),
            self::INVESTOR_STOCK => route('dashboard'),
        );
        if (!is_null($key) && array_key_exists($key, $routes)) {
            return $routes[$key];
        } else {
            return null;
        }
    }
}
