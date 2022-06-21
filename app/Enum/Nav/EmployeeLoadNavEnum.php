<?php
namespace App\Enum\Nav;

use App\Enum\AbstractEnum;
use App\Enum\KeyWordEnum;

class EmployeeLoadNavEnum extends AbstractEnum
{
    public const EMPLOYEE_LOAN_RECORDS = KeyWordEnum::EMPLOYEE_LOAN_RECORDS;
    public const EMPLOYEE_LOAN_RECEIVING = KeyWordEnum::EMPLOYEE_LOAN_RECEIVING;

    public static function getValues(): array
    {
        return [
            self::EMPLOYEE_LOAN_RECORDS,
            self::EMPLOYEE_LOAN_RECEIVING,
        ];
    }

    public static function getIcon($key = null): ?string
    {
        $routes = [
            self::EMPLOYEE_LOAN_RECORDS => '<i class="mdi mdi-account"></i>',
            self::EMPLOYEE_LOAN_RECEIVING => '<i class="far fa-user"></i>',
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
            self::EMPLOYEE_LOAN_RECORDS => __(sprintf('%s.%s', 'general', self::EMPLOYEE_LOAN_RECORDS)),
            self::EMPLOYEE_LOAN_RECEIVING => __(sprintf('%s.%s', 'general', self::EMPLOYEE_LOAN_RECEIVING)),
        ];
    }

    public static function getRoute($key = null)
    {
        $routes = array(
            self::EMPLOYEE_LOAN_RECORDS => route('dashboard.employee-loan.index'),
            self::EMPLOYEE_LOAN_RECEIVING => route('dashboard'),
        );
        if (!is_null($key) && array_key_exists($key, $routes)) {
            return $routes[$key];
        } else {
            return null;
        }
    }
}
