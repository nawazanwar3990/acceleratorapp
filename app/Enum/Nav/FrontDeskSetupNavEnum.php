<?php
namespace App\Enum\Nav;

use App\Enum\AbstractEnum;
use App\Enum\KeyWordEnum;

class FrontDeskSetupNavEnum extends AbstractEnum
{
    public const CALL_TYPE = KeyWordEnum::CALL_TYPE;
    public const COMPLAIN_TYPE = KeyWordEnum::COMPLAIN_TYPE;
    public const SOURCE = KeyWordEnum::SOURCE;
    public const REFERENCE = KeyWordEnum::REFERENCE;
    public const PURPOSE = KeyWordEnum::PURPOSE;

    public static function getValues(): array
    {
        return [
            self::CALL_TYPE,
            self::COMPLAIN_TYPE,
            self::SOURCE,
            self::REFERENCE,
            self::PURPOSE,
        ];
    }

    public static function getIcon($key = null): ?string
    {
        $routes = [
            self::CALL_TYPE => '<i class="mdi mdi-account"></i>',
            self::COMPLAIN_TYPE => '<i class="mdi mdi-account"></i>',
            self::SOURCE => '<i class="mdi mdi-account"></i>',
            self::REFERENCE => '<i class="mdi mdi-account"></i>',
            self::PURPOSE => '<i class="mdi mdi-account"></i>',
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
            self::CALL_TYPE => __(sprintf('%s.%s', 'general', self::CALL_TYPE)),
            self::COMPLAIN_TYPE => __(sprintf('%s.%s', 'general', self::COMPLAIN_TYPE)),
            self::SOURCE => __(sprintf('%s.%s', 'general', self::SOURCE)),
            self::REFERENCE => __(sprintf('%s.%s', 'general', self::REFERENCE)),
            self::PURPOSE => __(sprintf('%s.%s', 'general', self::PURPOSE)),
        ];
    }

    public static function getRoute($key = null)
    {
        $routes = array(
            self::CALL_TYPE => route('dashboard.call-type.index'),
            self::COMPLAIN_TYPE => route('dashboard.complain-type.index'),
            self::SOURCE => route('dashboard.source.index'),
            self::REFERENCE => route('dashboard.reference.index'),
            self::PURPOSE => route('dashboard.purpose.index'),
        );
        if (!is_null($key) && array_key_exists($key, $routes)) {
            return $routes[$key];
        } else {
            return null;
        }
    }
}
