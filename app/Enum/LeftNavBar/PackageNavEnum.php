<?php
namespace App\Enum\LeftNavBar;

use App\Enum\AbstractEnum;
use App\Enum\KeyWordEnum;

class PackageNavEnum extends AbstractEnum
{
    public const DURATION = KeyWordEnum::DURATION;
    public const MODULE = KeyWordEnum::MODULE;
    public const PACKAGE = KeyWordEnum::PACKAGE;
    public const SUBSCRIPTION = KeyWordEnum::SUBSCRIPTION;

    public static function getValues(): array
    {
        return [
            self::DURATION,
            self::MODULE,
            self::PACKAGE,
            self::SUBSCRIPTION
        ];
    }

    public static function getIcon($key = null): ?string
    {
        $routes = [
            self::DURATION => '<i class="mdi mdi-account"></i>',
            self::MODULE => '<i class="mdi mdi-account"></i>',
            self::PACKAGE => '<i class="mdi mdi-account"></i>',
            self::SUBSCRIPTION => '<i class="mdi mdi-account"></i>',
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
            self::DURATION => __(sprintf('%s.%s', 'general', self::DURATION)),
            self::MODULE => __(sprintf('%s.%s', 'general', self::MODULE)),
            self::PACKAGE => __(sprintf('%s.%s', 'general', self::PACKAGE)),
            self::SUBSCRIPTION => __(sprintf('%s.%s', 'general', self::SUBSCRIPTION))
        ];
    }

    public static function getRoute($key = null)
    {
        $routes = array(
            self::DURATION => route('dashboard.durations.index'),
            self::MODULE => route('dashboard.modules.index'),
            self::PACKAGE => route('dashboard.packages.index'),
            self::SUBSCRIPTION => route('dashboard.subscriptions.index'),
        );
        if (!is_null($key) && array_key_exists($key, $routes)) {
            return $routes[$key];
        } else {
            return null;
        }
    }
}
