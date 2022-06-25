<?php
namespace App\Enum\LeftNavBar;

use App\Enum\AbstractEnum;
use App\Enum\KeyWordEnum;

class VouchersNavEnum extends AbstractEnum
{
    public const BUYER_CASH_RECEIVING = KeyWordEnum::BUYER_CASH_RECEIVING;
    public const BUYER_INSTALLMENT_RECEIVING = KeyWordEnum::BUYER_INSTALLMENT_RECEIVING;
    public const SUPPLIER_PAYMENT = KeyWordEnum::SUPPLIER_PAYMENT;
    public const SELLER_PAYMENT = KeyWordEnum::SELLER_PAYMENT;
    public const BROKER_PAYMENT = KeyWordEnum::BROKER_PAYMENT;
    public const DEBIT_VOUCHER = KeyWordEnum::DEBIT_VOUCHER;
    public const CREDIT_VOUCHER = KeyWordEnum::CREDIT_VOUCHER;
    public const OPENING_BALANCE_VOUCHER = KeyWordEnum::OPENING_BALANCE_VOUCHER;

    public static function getValues(): array
    {
        return [
            self::BUYER_CASH_RECEIVING,
            self::BUYER_INSTALLMENT_RECEIVING,
            self::SUPPLIER_PAYMENT,
            self::SELLER_PAYMENT,
            self::BROKER_PAYMENT,
            self::DEBIT_VOUCHER,
            self::CREDIT_VOUCHER,
            self::OPENING_BALANCE_VOUCHER,
        ];
    }

    public static function getIcon($key = null): ?string
    {
        $routes = [
            self::BUYER_CASH_RECEIVING => '<i class="mdi mdi-account"></i>',
            self::BUYER_INSTALLMENT_RECEIVING => '<i class="mdi mdi-account"></i>',
            self::SUPPLIER_PAYMENT => '<i class="far fa-user"></i>',
            self::SELLER_PAYMENT => '<i class="bx bxs-dashboard "></i>',
            self::BROKER_PAYMENT => '<i class="bx bxs-dashboard "></i>',
            self::DEBIT_VOUCHER => '<i class="bx bxs-dashboard "></i>',
            self::CREDIT_VOUCHER => '<i class="bx bxs-dashboard "></i>',
            self::OPENING_BALANCE_VOUCHER => '<i class="bx bxs-dashboard "></i>',
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
            self::BUYER_CASH_RECEIVING => __(sprintf('%s.%s', 'general', self::BUYER_CASH_RECEIVING)),
            self::BUYER_INSTALLMENT_RECEIVING => __(sprintf('%s.%s', 'general', self::BUYER_INSTALLMENT_RECEIVING)),
            self::SUPPLIER_PAYMENT => __(sprintf('%s.%s', 'general', self::SUPPLIER_PAYMENT)),
            self::SELLER_PAYMENT => __(sprintf('%s.%s', 'general', self::SELLER_PAYMENT)),
            self::BROKER_PAYMENT => __(sprintf('%s.%s', 'general', self::BROKER_PAYMENT)),
            self::DEBIT_VOUCHER => __(sprintf('%s.%s', 'general', self::DEBIT_VOUCHER)),
            self::CREDIT_VOUCHER => __(sprintf('%s.%s', 'general', self::CREDIT_VOUCHER)),
            self::OPENING_BALANCE_VOUCHER => __(sprintf('%s.%s', 'general', self::OPENING_BALANCE_VOUCHER)),
        ];
    }

    public static function getRoute($key = null)
    {
        $routes = array(
            self::BUYER_CASH_RECEIVING => route('dashboard.voucher.buyer-receiving'),
            self::BUYER_INSTALLMENT_RECEIVING => route('dashboard.voucher.buyer-installment-receiving'),
            self::SUPPLIER_PAYMENT => route('dashboard'),
            self::SELLER_PAYMENT => route('dashboard.voucher.seller-payment'),
            self::BROKER_PAYMENT => route('dashboard.voucher.broker-payment'),
            self::DEBIT_VOUCHER => route('dashboard.voucher.debit'),
            self::CREDIT_VOUCHER => route('dashboard.voucher.credit'),
            self::OPENING_BALANCE_VOUCHER => route('dashboard.voucher.opening-balance'),
        );
        if (!is_null($key) && array_key_exists($key, $routes)) {
            return $routes[$key];
        } else {
            return null;
        }
    }
}
