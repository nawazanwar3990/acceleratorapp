<?php
namespace App\Enum\LeftNavBar;

use App\Enum\AbstractEnum;
use App\Enum\KeyWordEnum;

class ServiceManagementNavEnum extends AbstractEnum
{
    public const SERVICE = KeyWordEnum::SERVICE;
    public static function getValues(): array
    {
        return [
            self::SERVICE,
        ];
    }

    public static function getIcon($key = null): ?string
    {
        $routes = [
            self::SERVICE => '<i class="mdi mdi-account"></i>'
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
            self::SERVICE => __(sprintf('%s.%s', 'general', self::SERVICE)),
        ];
    }

    public static function getRoute($key = null)
    {
        $routes = array(
            self::SERVICE => route('dashboard.service.index')
        );
        if (!is_null($key) && array_key_exists($key, $routes)) {
            return $routes[$key];
        } else {
            return null;
        }
    }
}
