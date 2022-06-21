<?php
namespace App\Enum\Nav;

use App\Enum\AbstractEnum;
use App\Enum\KeyWordEnum;

class IncomeExpenseEnum extends AbstractEnum
{
    public const INCOME_HEAD = KeyWordEnum::INCOME_HEAD;
    public const INCOME_COLLECTION = KeyWordEnum::INCOME_COLLECTION;
    public const INCOME_STATEMENT = KeyWordEnum::INCOME_STATEMENT;
    public const EXPENSE_HEAD = KeyWordEnum::EXPENSE_HEAD;
    public const EXPENSES = KeyWordEnum::EXPENSES;
    public const EXPENSES_STATEMENT = KeyWordEnum::EXPENSES_STATEMENT;

    public static function getValues(): array
    {
        return [
            self::INCOME_HEAD,
            self::INCOME_COLLECTION,
            self::INCOME_STATEMENT,
            self::EXPENSE_HEAD,
            self::EXPENSES,
            self::EXPENSES_STATEMENT,
        ];
    }

    public static function getIcon($key = null): ?string
    {
        $routes = [
            self::INCOME_HEAD => '<i class="mdi mdi-account"></i>',
            self::INCOME_COLLECTION => '<i class="far fa-user"></i>',
            self::INCOME_STATEMENT => '<i class="bx bxs-dashboard "></i>',
            self::EXPENSE_HEAD => '<i class="mdi mdi-account-star"></i>',
            self::EXPENSES => '<i class="mdi mdi-account-star"></i>',
            self::EXPENSES_STATEMENT => '<i class="mdi mdi-account-star"></i>',
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
            self::INCOME_HEAD => __(sprintf('%s.%s', 'general', self::INCOME_HEAD)),
            self::INCOME_COLLECTION => __(sprintf('%s.%s', 'general', self::INCOME_COLLECTION)),
            self::INCOME_STATEMENT => __(sprintf('%s.%s', 'general', self::INCOME_STATEMENT)),
            self::EXPENSE_HEAD => __(sprintf('%s.%s', 'general', self::EXPENSE_HEAD)),
            self::EXPENSES => __(sprintf('%s.%s', 'general', self::EXPENSES)),
            self::EXPENSES_STATEMENT => __(sprintf('%s.%s', 'general', self::EXPENSES_STATEMENT)),
        ];
    }

    public static function getRoute($key = null)
    {
        $routes = array(
            self::INCOME_HEAD => route('dashboard'),
            self::INCOME_COLLECTION => route('dashboard'),
            self::INCOME_STATEMENT => route('dashboard'),
            self::EXPENSE_HEAD => route('dashboard.expense.heads.index'),
            self::EXPENSES => route('dashboard.expenses.index'),
            self::EXPENSES_STATEMENT => route('dashboard'),
        );
        if (!is_null($key) && array_key_exists($key, $routes)) {
            return $routes[$key];
        } else {
            return null;
        }
    }
}
