<?php
namespace App\Enum\Nav;

use App\Enum\AbstractEnum;
use App\Enum\KeyWordEnum;

class DefinitionsNavEnum extends AbstractEnum
{
    public const GENERAL = KeyWordEnum::GENERAL;
    public const HUMAN_RESOURCE = KeyWordEnum::HUMAN_RESOURCE;
    public static function getValues(): array
    {
        return [
            self::GENERAL,
            self::HUMAN_RESOURCE,
        ];
    }

    public static function getIcon($key = null): ?string
    {
        $routes = [
            self::GENERAL => '<i class="mdi mdi-account"></i>',
            self::HUMAN_RESOURCE => '<i class="mdi mdi-account"></i>',
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
            self::GENERAL => __(sprintf('%s.%s', 'general', self::GENERAL)),
            self::HUMAN_RESOURCE => __(sprintf('%s.%s', 'general', self::HUMAN_RESOURCE)),
        ];
    }

    public static function getRoute($key = null)
    {
        $routes = array(
            self::GENERAL => route('dashboard.service.index'),
            self::HUMAN_RESOURCE => route('dashboard.floorName.index'),
        );
        if (!is_null($key) && array_key_exists($key, $routes)) {
            return $routes[$key];
        } else {
            return null;
        }
    }
}
