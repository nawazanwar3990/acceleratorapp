<?php

namespace App\Enum\LeftNavBar;

use App\Enum\AbstractEnum;
use App\Enum\KeyWordEnum;
use App\Enum\ServiceTypeEnum;
use App\Enum\SubscriptionTypeEnum;

class BANavEnum extends AbstractEnum
{
    public const DASHBOARD = KeyWordEnum::DASHBOARD;
    public const PACKAGE = KeyWordEnum::PACKAGE;
    public const SERVICE = KeyWordEnum::SERVICE;
    public const SUBSCRIPTION = KeyWordEnum::SUBSCRIPTION;
    public const INCUBATOR = KeyWordEnum::INCUBATOR;
    public const FREELANCER = KeyWordEnum::FREELANCER;
    public const MEETING_ROOM = KeyWordEnum::MEETING_ROOM;
    public const MENTORSHIP_WITH_INVESTMENT = KeyWordEnum::MENTORSHIP_WITH_INVESTMENT;
    public const MENTORSHIP_WITHOUT_INVESTMENT = KeyWordEnum::MENTORSHIP_WITHOUT_INVESTMENT;
    public const ONLY_INVESTMENT = KeyWordEnum::ONLY_INVESTMENT;


    public static function getValues(): array
    {
        return [
            self::DASHBOARD,
            self::PACKAGE,
            self::SERVICE,
            self::SUBSCRIPTION,
            self::INCUBATOR,
            self::FREELANCER,
            self::MEETING_ROOM,
            self::MENTORSHIP_WITH_INVESTMENT,
            self::MENTORSHIP_WITHOUT_INVESTMENT,
            self::ONLY_INVESTMENT
        ];
    }

    public static function getIcon($key = null): ?string
    {
        $routes = [
            self::DASHBOARD => '<i class="mdi mdi-account"></i>',
            self::PACKAGE => '<i class="mdi mdi-account"></i>',
            self::SERVICE => '<i class="mdi mdi-account"></i>',
            self::SUBSCRIPTION => '<i class="mdi mdi-account"></i>',
            self::INCUBATOR => '<i class="mdi mdi-account"></i>',
            self::FREELANCER => '<i class="mdi mdi-account"></i>',
            self::MEETING_ROOM => '<i class="mdi mdi-account"></i>',
            self::MENTORSHIP_WITH_INVESTMENT => '<i class="mdi mdi-account"></i>',
            self::MENTORSHIP_WITHOUT_INVESTMENT => '<i class="mdi mdi-account"></i>',
            self::ONLY_INVESTMENT => '<i class="mdi mdi-account"></i>'
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
            self::DASHBOARD => __(sprintf('%s.%s', 'general.left-bar', self::DASHBOARD)),
            self::PACKAGE => __(sprintf('%s.%s', 'general.left-bar', self::PACKAGE)),
            self::SERVICE => __(sprintf('%s.%s', 'general.left-bar', self::SERVICE)),
            self::SUBSCRIPTION => __(sprintf('%s.%s', 'general.left-bar', self::SUBSCRIPTION)),
            self::INCUBATOR => __(sprintf('%s.%s', 'general.left-bar', self::INCUBATOR)),
            self::MEETING_ROOM => __(sprintf('%s.%s', 'general.left-bar', self::MEETING_ROOM)),
            self::FREELANCER => __(sprintf('%s.%s', 'general.left-bar', self::FREELANCER)),
            self::MENTORSHIP_WITH_INVESTMENT => __(sprintf('%s.%s', 'general.left-bar', self::MENTORSHIP_WITH_INVESTMENT)),
            self::MENTORSHIP_WITHOUT_INVESTMENT => __(sprintf('%s.%s', 'general.left-bar', self::MENTORSHIP_WITHOUT_INVESTMENT)),
            self::ONLY_INVESTMENT => __(sprintf('%s.%s', 'general.left-bar', self::ONLY_INVESTMENT)),
        ];
    }

    public static function getAdminWorkingSpaces(): array
    {
        return [
            self::DASHBOARD => __(sprintf('%s.%s', 'general.left_bar', self::DASHBOARD)),
            self::PACKAGE => __(sprintf('%s.%s', 'general.left_bar', self::PACKAGE)),
            self::SERVICE => __(sprintf('%s.%s', 'general.left_bar', self::SERVICE)),
            self::SUBSCRIPTION => __(sprintf('%s.%s', 'general.left_bar', self::SUBSCRIPTION)),
            self::INCUBATOR => __(sprintf('%s.%s', 'general.left_bar', self::INCUBATOR)),
            self::MEETING_ROOM => __(sprintf('%s.%s', 'general.left_bar', self::MEETING_ROOM)),
            self::FREELANCER => __(sprintf('%s.%s', 'general.left_bar', self::FREELANCER)),
            self::MENTORSHIP_WITH_INVESTMENT => __(sprintf('%s.%s', 'general.left_bar', self::MENTORSHIP_WITH_INVESTMENT)),
            self::MENTORSHIP_WITHOUT_INVESTMENT => __(sprintf('%s.%s', 'general.left_bar', self::MENTORSHIP_WITHOUT_INVESTMENT)),
            self::ONLY_INVESTMENT => __(sprintf('%s.%s', 'general.left_bar', self::ONLY_INVESTMENT)),
        ];
    }

    public static function getRoute($key = null)
    {
        $routes = array(
            self::DASHBOARD => route('dashboard.index'),
            self::PACKAGE => route('dashboard.plans.index'),
            self::SERVICE => route('dashboard.services.index', ['type' => ServiceTypeEnum::BASIC_SERVICE]),
            self::SUBSCRIPTION => route('dashboard.buildings.index', [SubscriptionTypeEnum::PLAN]),
            self::INCUBATOR => route('dashboard.buildings.index'),
            self::MEETING_ROOM => route('dashboard.offices.index'),
            self::FREELANCER => route('dashboard.freelancers.index'),
            self::MENTORSHIP_WITH_INVESTMENT => route('dashboard.buildings.index'),
            self::MENTORSHIP_WITHOUT_INVESTMENT => route('dashboard.buildings.index'),
            self::ONLY_INVESTMENT => route('dashboard.buildings.index')
        );
        if (!is_null($key) && array_key_exists($key, $routes)) {
            return $routes[$key];
        } else {
            return null;
        }
    }
}