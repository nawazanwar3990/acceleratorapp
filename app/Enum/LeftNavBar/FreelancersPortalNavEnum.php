<?php
namespace App\Enum\LeftNavBar;

use App\Enum\AbstractEnum;
use App\Enum\KeyWordEnum;

class FreelancersPortalNavEnum extends AbstractEnum
{
    public const FREELANCER = KeyWordEnum::FREELANCERS;
    public static function getValues(): array
    {
        return [
            self::FREELANCER,
        ];
    }

    public static function getIcon($key = null): ?string
    {
        $routes = [
            self::FREELANCER => '<i class="mdi mdi-account"></i>'
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
            self::FREELANCER => __(sprintf('%s.%s', 'general', self::FREELANCER)),
        ];
    }

    public static function getRoute($key = null)
    {
        $routes = array(
            self::FREELANCER => route('dashboard.freelancers.index')
        );
        if (!is_null($key) && array_key_exists($key, $routes)) {
            return $routes[$key];
        } else {
            return null;
        }
    }
}
