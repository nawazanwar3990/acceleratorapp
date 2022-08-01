<?php

namespace App\Enum\LeftNavBar;

use App\Enum\AbstractEnum;
use App\Enum\KeyWordEnum;
use App\Enum\ServiceTypeEnum;
use App\Enum\SubscriptionTypeEnum;

class BANavEnum extends AbstractEnum
{
    public const DASHBOARD = KeyWordEnum::DASHBOARD;
    public const PLAN = KeyWordEnum::PLAN;
    public const SERVICE = KeyWordEnum::SERVICE;
    public const SUBSCRIPTION = KeyWordEnum::SUBSCRIPTION;
    public const INCUBATOR = KeyWordEnum::INCUBATOR;
    public const FREELANCER = KeyWordEnum::FREELANCER;
    public const MEETING_ROOM = KeyWordEnum::MEETING_ROOM;
    public const MENTORSHIP_WITH_INVESTMENT = KeyWordEnum::MENTORSHIP_WITH_INVESTMENT;
    public const MENTORSHIP_WITHOUT_INVESTMENT = KeyWordEnum::MENTORSHIP_WITHOUT_INVESTMENT;
    public const EVENT_MANAGEMENT = KeyWordEnum::EVENT_MANAGEMENT;
    public const SETTING = KeyWordEnum::SETTING;


    public static function getValues(): array
    {
        return [
            self::DASHBOARD,
            self::PLAN,
            self::SERVICE,
            self::SUBSCRIPTION,
            self::INCUBATOR,
            self::FREELANCER,
            self::MEETING_ROOM,
            self::MENTORSHIP_WITH_INVESTMENT,
            self::MENTORSHIP_WITHOUT_INVESTMENT,
            self::EVENT_MANAGEMENT,
            self::SETTING
        ];
    }

    public static function getIcon($key = null): ?string
    {
        $routes = [
            self::DASHBOARD => '<i class="mdi mdi-account"></i>',
            self::PLAN => '<i class="mdi mdi-account"></i>',
            self::SERVICE => '<i class="mdi mdi-account"></i>',
            self::SUBSCRIPTION => '<i class="mdi mdi-account"></i>',
            self::INCUBATOR => '<i class="mdi mdi-account"></i>',
            self::FREELANCER => '<i class="mdi mdi-account"></i>',
            self::MEETING_ROOM => '<i class="mdi mdi-account"></i>',
            self::MENTORSHIP_WITH_INVESTMENT => '<i class="mdi mdi-account"></i>',
            self::MENTORSHIP_WITHOUT_INVESTMENT => '<i class="mdi mdi-account"></i>',
            self::EVENT_MANAGEMENT => '<i class="mdi mdi-account"></i>',
            self::SETTING => '<i class="mdi mdi-account"></i>'
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
            self::SERVICE => __(sprintf('%s.%s', 'general.left-bar', self::SERVICE)),
            self::PLAN => __(sprintf('%s.%s', 'general.left-bar', self::PLAN)),
            self::SUBSCRIPTION => __(sprintf('%s.%s', 'general.left-bar', self::SUBSCRIPTION)),
            self::INCUBATOR => __(sprintf('%s.%s', 'general.left-bar', self::INCUBATOR)),
            self::MEETING_ROOM => __(sprintf('%s.%s', 'general.left-bar', self::MEETING_ROOM)),
            self::FREELANCER => __(sprintf('%s.%s', 'general.left-bar', self::FREELANCER)),
            self::MENTORSHIP_WITH_INVESTMENT => __(sprintf('%s.%s', 'general.left-bar', self::MENTORSHIP_WITH_INVESTMENT)),
            self::MENTORSHIP_WITHOUT_INVESTMENT => __(sprintf('%s.%s', 'general.left-bar', self::MENTORSHIP_WITHOUT_INVESTMENT)),
            self::EVENT_MANAGEMENT => __(sprintf('%s.%s', 'general.left-bar', self::EVENT_MANAGEMENT)),
            self::SETTING => __(sprintf('%s.%s', 'general.left-bar', self::SETTING))
        ];
    }

    public static function getAdminWorkingSpaces(): array
    {
        return [
            self::DASHBOARD => __(sprintf('%s.%s', 'general.left_bar', self::DASHBOARD)),
            self::PLAN => __(sprintf('%s.%s', 'general.left_bar', self::PLAN)),
            self::SERVICE => __(sprintf('%s.%s', 'general.left_bar', self::SERVICE)),
            self::SUBSCRIPTION => __(sprintf('%s.%s', 'general.left_bar', self::SUBSCRIPTION)),
            self::INCUBATOR => __(sprintf('%s.%s', 'general.left_bar', self::INCUBATOR)),
            self::MEETING_ROOM => __(sprintf('%s.%s', 'general.left_bar', self::MEETING_ROOM)),
            self::FREELANCER => __(sprintf('%s.%s', 'general.left_bar', self::FREELANCER)),
            self::MENTORSHIP_WITH_INVESTMENT => __(sprintf('%s.%s', 'general.left_bar', self::MENTORSHIP_WITH_INVESTMENT)),
            self::MENTORSHIP_WITHOUT_INVESTMENT => __(sprintf('%s.%s', 'general.left_bar', self::MENTORSHIP_WITHOUT_INVESTMENT)),
            self::EVENT_MANAGEMENT => __(sprintf('%s.%s', 'general.left_bar', self::EVENT_MANAGEMENT)),
            self::SETTING => __(sprintf('%s.%s', 'general.left_bar', self::SETTING)),

        ];
    }

    public static function getRoute($key = null)
    {
        $routes = array(
            self::DASHBOARD => route('dashboard.index'),
            self::PLAN => route('dashboard.plans.index'),
            self::SERVICE => route('dashboard.services.index', ['type' => ServiceTypeEnum::BASIC_SERVICE]),
            self::SUBSCRIPTION => route('dashboard.buildings.index', [SubscriptionTypeEnum::PLAN]),
            self::INCUBATOR => route('dashboard.buildings.index'),
            self::MEETING_ROOM => route('dashboard.meeting-rooms.index'),
            self::FREELANCER => route('dashboard.freelancers.index'),
            self::MENTORSHIP_WITH_INVESTMENT => route('dashboard.buildings.index'),
            self::MENTORSHIP_WITHOUT_INVESTMENT => route('dashboard.buildings.index'),
            self::EVENT_MANAGEMENT => route('dashboard.events.index'),
            self::SETTING => route('dashboard.settings.index'),
        );
        if (!is_null($key) && array_key_exists($key, $routes)) {
            return $routes[$key];
        } else {
            return null;
        }
    }
}
