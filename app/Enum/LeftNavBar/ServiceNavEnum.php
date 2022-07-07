<?php
namespace App\Enum\LeftNavBar;

use App\Enum\AbstractEnum;
use App\Enum\KeyWordEnum;

class ServiceNavEnum extends AbstractEnum
{
    public const LIST = KeyWordEnum::LIST;
    public const CREATE = KeyWordEnum::CREATE;
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
            self::LIST => '<i class="bx bxs-eyedropper"></i>',
            self::CREATE => '<i class="bx bx-plus-circle"></i>'
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
            self::LIST => __(sprintf('%s.%s', 'general', self::LIST)),
            self::CREATE => __(sprintf('%s.%s', 'general', self::CREATE)),
        ];
    }

    public static function getRoute($key = null)
    {
        $routes = array(
            self::LIST => route('dashboard.services.index'),
            self::CREATE => route('dashboard.services.create'),
        );
        if (!is_null($key) && array_key_exists($key, $routes)) {
            return $routes[$key];
        } else {
            return null;
        }
    }
}
