<?php
namespace App\Enum\Nav;

use App\Enum\AbstractEnum;
use App\Enum\KeyWordEnum;

class HumanResourceNavEnum extends AbstractEnum
{
    public const HR_PERSONS = KeyWordEnum::HR_PERSONS;
    public const SUPPLIERS = KeyWordEnum::SUPPLIERS;
    public const SELLERS = KeyWordEnum::SELLERS;
    public const BUYERS = KeyWordEnum::BUYERS;
    public const EMPLOYEES = KeyWordEnum::EMPLOYEES;
    public const BROKERS = KeyWordEnum::BROKERS;
    public const NOMINEE_REGISTRATION = KeyWordEnum::NOMINEE_REGISTRATION;

    public static function getValues(): array
    {
        return [
            self::HR_PERSONS,
            self::SUPPLIERS,
            self::SELLERS,
            self::BUYERS,
            self::EMPLOYEES,
            self::BROKERS,
            self::NOMINEE_REGISTRATION,
        ];
    }

    public static function getIcon($key = null): ?string
    {
        $routes = [
            self::HR_PERSONS => '<i class="mdi mdi-account"></i>',
            self::SUPPLIERS => '<i class="far fa-user"></i>',
            self::SELLERS => '<i class="bx bxs-dashboard "></i>',
            self::BUYERS => '<i class="mdi mdi-account-star"></i>',
            self::EMPLOYEES => '<i class="mdi mdi-account-star"></i>',
            self::BROKERS => '<i class="mdi mdi-account-star"></i>',
            self::NOMINEE_REGISTRATION => '<i class="mdi mdi-account-star"></i>',
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
            self::HR_PERSONS => __(sprintf('%s.%s', 'general', self::HR_PERSONS)),
            self::SUPPLIERS => __(sprintf('%s.%s', 'general', self::SUPPLIERS)),
            self::SELLERS => __(sprintf('%s.%s', 'general', self::SELLERS)),
            self::BUYERS => __(sprintf('%s.%s', 'general', self::BUYERS)),
            self::EMPLOYEES => __(sprintf('%s.%s', 'general', self::EMPLOYEES)),
            self::BROKERS => __(sprintf('%s.%s', 'general', self::BROKERS)),
            self::NOMINEE_REGISTRATION => __(sprintf('%s.%s', 'general', self::NOMINEE_REGISTRATION)),
        ];
    }

    public static function getRoute($key = null)
    {
        $routes = array(
            self::HR_PERSONS => route('dashboard.human-resource.index'),
            self::SUPPLIERS => route('dashboard'),
            self::SELLERS => route('dashboard.sellers-list'),
            self::BUYERS => route('dashboard.buyers-list'),
            self::EMPLOYEES => route('dashboard.employees.index'),
            self::BROKERS => route('dashboard.brokers-list'),
            self::NOMINEE_REGISTRATION => route('dashboard.nominee.index'),
        );
        if (!is_null($key) && array_key_exists($key, $routes)) {
            return $routes[$key];
        } else {
            return null;
        }
    }
}
