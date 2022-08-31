<?php

namespace App\Enum\LeftNavBar;

use App\Enum\AbstractEnum;
use App\Enum\KeyWordEnum;
use App\Enum\PaymentTypeProcessEnum;
use App\Enum\ServiceTypeEnum;

class BANavEnum extends AbstractEnum
{
    public const PLAN = KeyWordEnum::PLAN;
    public const SERVICE = KeyWordEnum::SERVICE;
    public const INCUBATOR = 'incubator';
    public const FREELANCER = 'freelancer';
    public const MEETING_ROOM = 'meeting-room';
    public const MENTORSHIP_WITH_INVESTMENT = 'mentorship-with-investment';
    public const MENTORSHIP_WITHOUT_INVESTMENT = 'mentorship-with-out-investment';
    public const EVENT_MANAGEMENT = 'event-management';
    public const SETTING = KeyWordEnum::SETTING;

    public static function getValues(): array
    {
        return [
            self::PLAN,
            self::SERVICE,
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
            self::PLAN => '<i class="mdi mdi-account"></i>',
            self::SERVICE => '<i class="mdi mdi-account"></i>',
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
            self::SERVICE => __(sprintf('%s.%s', 'general.left-bar', self::SERVICE)),
            self::PLAN => __(sprintf('%s.%s', 'general.left-bar', self::PLAN)),
            self::INCUBATOR => 'Incubator',
            self::MEETING_ROOM => 'Meeting Room',
            self::FREELANCER => 'Freelancer',
            self::MENTORSHIP_WITH_INVESTMENT => 'Mentorship with Investment',
            self::MENTORSHIP_WITHOUT_INVESTMENT => 'Mentorship with out Investment',
            self::EVENT_MANAGEMENT => 'Event Management',
            self::SETTING => __(sprintf('%s.%s', 'general.left-bar', self::SETTING))
        ];
    }

    public static function getAdminWorkingSpaces(): array
    {
        return [
            self::PLAN => __(sprintf('%s.%s', 'general.left_bar', self::PLAN)),
            self::SERVICE => __(sprintf('%s.%s', 'general.left_bar', self::SERVICE)),
            self::INCUBATOR => 'Incubator',
            self::MEETING_ROOM => 'Meeting Room',
            self::FREELANCER => 'Freelancer',
            self::MENTORSHIP_WITH_INVESTMENT => __(sprintf('%s.%s', 'general.left_bar', self::MENTORSHIP_WITH_INVESTMENT)),
            self::MENTORSHIP_WITHOUT_INVESTMENT => __(sprintf('%s.%s', 'general.left_bar', self::MENTORSHIP_WITHOUT_INVESTMENT)),
            self::EVENT_MANAGEMENT => __(sprintf('%s.%s', 'general.left_bar', self::EVENT_MANAGEMENT)),
            self::SETTING => __(sprintf('%s.%s', 'general.left_bar', self::SETTING)),

        ];
    }

    public static function getRoute($key = null)
    {
        $routes = array(
            self::PLAN => route('dashboard.plans.index'),
            self::SERVICE => route('dashboard.services.index', ['type' => ServiceTypeEnum::BASIC]),
            self::INCUBATOR => route('dashboard.incubators.index'),
            self::MEETING_ROOM => route('dashboard.meeting-rooms.index'),
            self::FREELANCER => route('dashboard.freelancers.index', ['type' => PaymentTypeProcessEnum::PRE_DEFINED_PLAN]),
            self::MENTORSHIP_WITH_INVESTMENT => '',
            self::MENTORSHIP_WITHOUT_INVESTMENT => '',
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
