<?php
namespace App\Enum\Nav;

use App\Enum\AbstractEnum;
use App\Enum\KeyWordEnum;

class SalesNavEnum extends AbstractEnum
{
    public const TITLE_TRANSFER = KeyWordEnum::TITLE_TRANSFER;
    public const SALES_LISTING = KeyWordEnum::SALES_LISTING;
    public const COMMODITY_DEAL_CLOSING = KeyWordEnum::COMMODITY_DEAL_CLOSING;
    public const INSTALLMENT_PLANS = KeyWordEnum::INSTALLMENT_PLANS;
    public const INSTALLMENT_TERM = KeyWordEnum::INSTALLMENT_TERM;
    public const SALES_QUOTATION = KeyWordEnum::SALES_QUOTATION;

    public static function getValues(): array
    {
        return [
            self::TITLE_TRANSFER,
            self::SALES_LISTING,
            self::COMMODITY_DEAL_CLOSING,
            self::INSTALLMENT_PLANS,
            self::INSTALLMENT_TERM,
            self::SALES_QUOTATION,
        ];
    }

    public static function getIcon($key = null): ?string
    {
        $routes = [
            self::TITLE_TRANSFER => '<i class="mdi mdi-account"></i>',
            self::SALES_LISTING => '<i class="far fa-user"></i>',
            self::COMMODITY_DEAL_CLOSING => '<i class="mdi mdi-account-star"></i>',
            self::INSTALLMENT_PLANS => '<i class="mdi mdi-account-star"></i>',
            self::INSTALLMENT_TERM => '<i class="mdi mdi-account-star"></i>',
            self::SALES_QUOTATION => '<i class="mdi mdi-account-star"></i>',
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
            self::TITLE_TRANSFER => __(sprintf('%s.%s', 'general', self::TITLE_TRANSFER)),
            self::SALES_LISTING => __(sprintf('%s.%s', 'general', self::SALES_LISTING)),
            self::COMMODITY_DEAL_CLOSING => __(sprintf('%s.%s', 'general', self::COMMODITY_DEAL_CLOSING)),
            self::INSTALLMENT_PLANS => __(sprintf('%s.%s', 'general', self::INSTALLMENT_PLANS)),
            self::INSTALLMENT_TERM => __(sprintf('%s.%s', 'general', self::INSTALLMENT_TERM)),
            self::SALES_QUOTATION => __(sprintf('%s.%s', 'general', self::SALES_QUOTATION)),
        ];
    }

    public static function getRoute($key = null)
    {
        $routes = array(
            self::TITLE_TRANSFER => route('dashboard.sales.create'),
            self::SALES_LISTING => route('dashboard.sales.index'),
            self::COMMODITY_DEAL_CLOSING => route('dashboard.sales.commodity-deal-closings'),
            self::INSTALLMENT_PLANS => route('dashboard.installment-plans.index'),
            self::INSTALLMENT_TERM => route('dashboard.installment-term.create'),
            self::SALES_QUOTATION => route('dashboard.quotations.index'),
        );
        if (!is_null($key) && array_key_exists($key, $routes)) {
            return $routes[$key];
        } else {
            return null;
        }
    }
}
