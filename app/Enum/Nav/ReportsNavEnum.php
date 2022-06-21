<?php
namespace App\Enum\Nav;

use App\Enum\AbstractEnum;
use App\Enum\KeyWordEnum;

class ReportsNavEnum extends AbstractEnum
{
    public const CASH_BOOK = KeyWordEnum::CASH_BOOK;
    public const PROFIT_LOSS = KeyWordEnum::PROFIT_LOSS;
    public const BALANCE_SHEET = KeyWordEnum::BALANCE_SHEET;
    public const BROKER_REPORT = KeyWordEnum::BROKER_REPORT;
    public const AGING_REPORT = KeyWordEnum::AGING_REPORT;
    public const PENDING_COLLECTIONS = KeyWordEnum::PENDING_COLLECTIONS;
    public const COLLECTED_PAYMENTS = KeyWordEnum::COLLECTED_PAYMENTS;
    public const CASH_ONLY_DEALINGS = KeyWordEnum::CASH_ONLY_DEALINGS;
    public const COMMODITY_ONLY_DEALINGS = KeyWordEnum::COMMODITY_ONLY_DEALINGS;
    public const CASH_COMMODITY_DEALINGS = KeyWordEnum::CASH_COMMODITY_DEALINGS;
    public const COMMODITY_EXPECTED_VALUE = KeyWordEnum::COMMODITY_EXPECTED_VALUE;
    public const FLAT_WISE_PROFIT_LOSS = KeyWordEnum::FLAT_WISE_PROFIT_LOSS;
    public const SALES_REPORT = KeyWordEnum::SALES_REPORT;
    public const BROKER_WISE_SALES = KeyWordEnum::BROKER_WISE_SALES;
    public const PURCHASE_REPORT = KeyWordEnum::PURCHASE_REPORT;
    public const STOCK_REPORT = KeyWordEnum::STOCK_REPORT;

    public static function getValues(): array
    {
        return [
            self::CASH_BOOK,
            self::PROFIT_LOSS,
            self::BALANCE_SHEET,
            self::BROKER_REPORT,
            self::AGING_REPORT,
            self::PENDING_COLLECTIONS,
            self::COLLECTED_PAYMENTS,
            self::CASH_ONLY_DEALINGS,
            self::COMMODITY_ONLY_DEALINGS,
            self::CASH_COMMODITY_DEALINGS,
            self::COMMODITY_EXPECTED_VALUE,
            self::FLAT_WISE_PROFIT_LOSS,
            self::SALES_REPORT,
            self::BROKER_WISE_SALES,
            self::PURCHASE_REPORT,
            self::STOCK_REPORT,
        ];
    }

    public static function getIcon($key = null): ?string
    {
        $routes = [
            self::CASH_BOOK => '<i class="mdi mdi-account"></i>',
            self::PROFIT_LOSS => '<i class="mdi mdi-account"></i>',
            self::BALANCE_SHEET => '<i class="mdi mdi-account"></i>',
            self::BROKER_REPORT => '<i class="mdi mdi-account"></i>',
            self::AGING_REPORT => '<i class="mdi mdi-account"></i>',
            self::PENDING_COLLECTIONS => '<i class="far fa-user"></i>',
            self::COLLECTED_PAYMENTS => '<i class="bx bxs-dashboard "></i>',
            self::CASH_ONLY_DEALINGS => '<i class="bx bxs-dashboard "></i>',
            self::COMMODITY_ONLY_DEALINGS => '<i class="bx bxs-dashboard "></i>',
            self::CASH_COMMODITY_DEALINGS => '<i class="bx bxs-dashboard "></i>',
            self::COMMODITY_EXPECTED_VALUE => '<i class="bx bxs-dashboard "></i>',
            self::FLAT_WISE_PROFIT_LOSS => '<i class="bx bxs-dashboard "></i>',
            self::SALES_REPORT => '<i class="bx bxs-dashboard "></i>',
            self::BROKER_WISE_SALES => '<i class="bx bxs-dashboard "></i>',
            self::PURCHASE_REPORT => '<i class="bx bxs-dashboard "></i>',
            self::STOCK_REPORT => '<i class="bx bxs-dashboard "></i>',
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
            self::CASH_BOOK => __(sprintf('%s.%s', 'general', self::CASH_BOOK)),
            self::PROFIT_LOSS => __(sprintf('%s.%s', 'general', self::PROFIT_LOSS)),
            self::BALANCE_SHEET => __(sprintf('%s.%s', 'general', self::BALANCE_SHEET)),
            self::BROKER_REPORT => __(sprintf('%s.%s', 'general', self::BROKER_REPORT)),
            self::AGING_REPORT => __(sprintf('%s.%s', 'general', self::AGING_REPORT)),
            self::PENDING_COLLECTIONS => __(sprintf('%s.%s', 'general', self::PENDING_COLLECTIONS)),
            self::COLLECTED_PAYMENTS => __(sprintf('%s.%s', 'general', self::COLLECTED_PAYMENTS)),
            self::CASH_ONLY_DEALINGS => __(sprintf('%s.%s', 'general', self::CASH_ONLY_DEALINGS)),
            self::COMMODITY_ONLY_DEALINGS => __(sprintf('%s.%s', 'general', self::COMMODITY_ONLY_DEALINGS)),
            self::CASH_COMMODITY_DEALINGS => __(sprintf('%s.%s', 'general', self::CASH_COMMODITY_DEALINGS)),
            self::COMMODITY_EXPECTED_VALUE => __(sprintf('%s.%s', 'general', self::COMMODITY_EXPECTED_VALUE)),
            self::FLAT_WISE_PROFIT_LOSS => __(sprintf('%s.%s', 'general', self::FLAT_WISE_PROFIT_LOSS)),
            self::SALES_REPORT => __(sprintf('%s.%s', 'general', self::SALES_REPORT)),
            self::BROKER_WISE_SALES => __(sprintf('%s.%s', 'general', self::BROKER_WISE_SALES)),
            self::PURCHASE_REPORT => __(sprintf('%s.%s', 'general', self::PURCHASE_REPORT)),
            self::STOCK_REPORT => __(sprintf('%s.%s', 'general', self::STOCK_REPORT)),
        ];
    }

    public static function getRoute($key = null)
    {
        $routes = array(
            self::CASH_BOOK => route('dashboard.cashbook'),
            self::PROFIT_LOSS => route('dashboard.profit-loss'),
            self::BALANCE_SHEET => route('dashboard.balance-sheet'),
            self::BROKER_REPORT => route('dashboard.broker-report'),
            self::AGING_REPORT => route('dashboard'),
            self::PENDING_COLLECTIONS => route('dashboard.pending-collections'),
            self::COLLECTED_PAYMENTS => route('dashboard'),
            self::CASH_ONLY_DEALINGS => route('dashboard'),
            self::COMMODITY_ONLY_DEALINGS => route('dashboard'),
            self::CASH_COMMODITY_DEALINGS => route('dashboard'),
            self::COMMODITY_EXPECTED_VALUE => route('dashboard'),
            self::FLAT_WISE_PROFIT_LOSS => route('dashboard.flat-shop-wise-profit-loss'),
            self::SALES_REPORT => route('dashboard'),
            self::BROKER_WISE_SALES => route('dashboard.broker-wise-sales-report'),
            self::PURCHASE_REPORT => route('dashboard'),
            self::STOCK_REPORT => route('dashboard'),
        );
        if (!is_null($key) && array_key_exists($key, $routes)) {
            return $routes[$key];
        } else {
            return null;
        }
    }
}
