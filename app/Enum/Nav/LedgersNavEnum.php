<?php
namespace App\Enum\Nav;

use App\Enum\AbstractEnum;
use App\Enum\KeyWordEnum;

class LedgersNavEnum extends AbstractEnum
{
    public const SUPPLIER_LEDGER = KeyWordEnum::SUPPLIER_LEDGER;
    public const SELLER_LEDGER = KeyWordEnum::SELLER_LEDGER;
    public const BUYER_LEDGER = KeyWordEnum::BUYER_LEDGER;
    public const BROKER_LEDGER = KeyWordEnum::BROKER_LEDGER;
    public const GENERAL_LEDGER = KeyWordEnum::GENERAL_LEDGER;

    public static function getValues(): array
    {
        return [
            self::SUPPLIER_LEDGER,
            self::SELLER_LEDGER,
            self::BUYER_LEDGER,
            self::BROKER_LEDGER,
            self::GENERAL_LEDGER,
        ];
    }

    public static function getIcon($key = null): ?string
    {
        $routes = [
            self::SUPPLIER_LEDGER => '<i class="mdi mdi-account"></i>',
            self::SELLER_LEDGER => '<i class="far fa-user"></i>',
            self::BUYER_LEDGER => '<i class="bx bxs-dashboard "></i>',
            self::BROKER_LEDGER => '<i class="bx bxs-dashboard "></i>',
            self::GENERAL_LEDGER => '<i class="bx bxs-dashboard "></i>',
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
            self::SUPPLIER_LEDGER => __(sprintf('%s.%s', 'general', self::SUPPLIER_LEDGER)),
            self::SELLER_LEDGER => __(sprintf('%s.%s', 'general', self::SELLER_LEDGER)),
            self::BUYER_LEDGER => __(sprintf('%s.%s', 'general', self::BUYER_LEDGER)),
            self::BROKER_LEDGER => __(sprintf('%s.%s', 'general', self::BROKER_LEDGER)),
            self::GENERAL_LEDGER => __(sprintf('%s.%s', 'general', self::GENERAL_LEDGER)),
        ];
    }

    public static function getRoute($key = null)
    {
        $routes = array(
            self::SUPPLIER_LEDGER => route('dashboard'),
            self::SELLER_LEDGER => route('dashboard.seller-ledger'),
            self::BUYER_LEDGER => route('dashboard.buyer-ledger'),
            self::BROKER_LEDGER => route('dashboard.broker-ledger'),
            self::GENERAL_LEDGER => route('dashboard.general-ledger'),
        );
        if (!is_null($key) && array_key_exists($key, $routes)) {
            return $routes[$key];
        } else {
            return null;
        }
    }
}
