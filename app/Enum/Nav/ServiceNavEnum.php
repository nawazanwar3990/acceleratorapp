<?php
namespace App\Enum\Nav;

use App\Enum\AbstractEnum;
use App\Enum\KeyWordEnum;

class ServiceNavEnum extends AbstractEnum
{
    public const LIST = KeyWordEnum::SERVICE_MANAGEMENT_LIST;
    public const CREATE = KeyWordEnum::SERVICE_MANAGEMENT_NEW;

    public static function getValues(): array
    {
        return [
            self::LIST,
            self::CREATE,
        ];
    }

    public static function getIcon($key = null): ?string
    {
        $routes = [
            self::LIST => '<i class="mdi mdi-account"></i>',
            self::CREATE => '<i class="mdi mdi-account"></i>',
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
            self::CREATE => __(sprintf('%s.%s', 'general', self::CREATE)),
            self::LIST => __(sprintf('%s.%s', 'general', self::LIST)),

        ];
    }

    public static function getRoute($key = null)
    {
        $routes = array(
            self::LIST => route('dashboard.service.index'),
            self::CREATE => route('dashboard.service.create'),
        );
        if (!is_null($key) && array_key_exists($key, $routes)) {
            return $routes[$key];
        } else {
            return null;
        }
    }
}
