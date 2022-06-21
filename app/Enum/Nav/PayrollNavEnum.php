<?php
namespace App\Enum\Nav;

use App\Enum\AbstractEnum;
use App\Enum\KeyWordEnum;

class PayrollNavEnum extends AbstractEnum
{
    public const ADVANCE_SALARY = KeyWordEnum::ADVANCE_SALARY;
    public const SALARY_RECORDS = KeyWordEnum::SALARY_RECORDS;

    public static function getValues(): array
    {
        return [
            self::ADVANCE_SALARY,
            self::SALARY_RECORDS,
        ];
    }

    public static function getIcon($key = null): ?string
    {
        $routes = [
            self::ADVANCE_SALARY => '<i class="mdi mdi-account"></i>',
            self::SALARY_RECORDS => '<i class="far fa-user"></i>',
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
            self::ADVANCE_SALARY => __(sprintf('%s.%s', 'general', self::ADVANCE_SALARY)),
            self::SALARY_RECORDS => __(sprintf('%s.%s', 'general', self::SALARY_RECORDS)),
        ];
    }

    public static function getRoute($key = null)
    {
        $routes = array(
            self::ADVANCE_SALARY => route('dashboard.salary.advance'),
            self::SALARY_RECORDS => route('dashboard.salary.index'),
        );
        if (!is_null($key) && array_key_exists($key, $routes)) {
            return $routes[$key];
        } else {
            return null;
        }
    }
}
