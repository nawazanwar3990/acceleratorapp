<?php
namespace App\Enum\Nav;

use App\Enum\AbstractEnum;
use App\Enum\KeyWordEnum;

class AccountsNavEnum extends AbstractEnum
{
    public const VOUCHERS = KeyWordEnum::VOUCHERS;
    public const LEDGERS = KeyWordEnum::LEDGERS;
    public const PAYROLL = KeyWordEnum::PAYROLL;
    public const EMPLOYEE_LOAN = KeyWordEnum::EMPLOYEE_LOAN;
    public const CREATE_ACCOUNT_HEAD = KeyWordEnum::CREATE_ACCOUNT_HEAD;

    public static function getValues(): array
    {
        return [
            self::VOUCHERS,
            self::LEDGERS,
            self::PAYROLL,
            self::EMPLOYEE_LOAN,
            self::CREATE_ACCOUNT_HEAD,
        ];
    }

    public static function getIcon($key = null): ?string
    {
        $routes = [
            self::VOUCHERS => '<i class="mdi mdi-account"></i>',
            self::LEDGERS => '<i class="far fa-user"></i>',
            self::PAYROLL => '<i class="far fa-user"></i>',
            self::EMPLOYEE_LOAN => '<i class="far fa-user"></i>',
            self::CREATE_ACCOUNT_HEAD => '<i class="far fa-user"></i>',
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
            self::VOUCHERS => __(sprintf('%s.%s', 'general', self::VOUCHERS)),
            self::LEDGERS => __(sprintf('%s.%s', 'general', self::LEDGERS)),
            self::PAYROLL => __(sprintf('%s.%s', 'general', self::PAYROLL)),
            self::EMPLOYEE_LOAN => __(sprintf('%s.%s', 'general', self::EMPLOYEE_LOAN)),
            self::CREATE_ACCOUNT_HEAD => __(sprintf('%s.%s', 'general', self::CREATE_ACCOUNT_HEAD)),
        ];
    }

    public static function getRoute($key = null)
    {
        $routes = array(
            self::VOUCHERS => route('dashboard'),
            self::LEDGERS => route('dashboard'),
            self::PAYROLL => route('dashboard'),
            self::EMPLOYEE_LOAN => route('dashboard'),
            self::CREATE_ACCOUNT_HEAD => route('dashboard.create.account-head'),
        );
        if (!is_null($key) && array_key_exists($key, $routes)) {
            return $routes[$key];
        } else {
            return null;
        }
    }
}
