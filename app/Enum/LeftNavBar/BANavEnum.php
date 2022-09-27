<?php

namespace App\Enum\LeftNavBar;

use App\Enum\AbstractEnum;
use App\Enum\KeyWordEnum;
use App\Enum\PaymentTypeProcessEnum;
use App\Enum\ServiceTypeEnum;
use App\Enum\SubscriptionTypeEnum;

class BANavEnum extends AbstractEnum
{
    public const PLAN = KeyWordEnum::PLAN;
    public const SERVICE = KeyWordEnum::SERVICE;
    public const PACKAGE = KeyWordEnum::PACKAGE;
    public const SUBSCRIPTION = KeyWordEnum::SUBSCRIPTION;
    public const INCUBATOR = 'incubator';
    public const FREELANCER = 'freelancer';
    public const MEETING_ROOM = 'meeting-room';
    public const MENTORSHIP_WITH_INVESTMENT = 'mentorship-with-investment';
    public const MENTORSHIP_WITHOUT_INVESTMENT = 'mentorship-with-out-investment';
    public const EVENT_MANAGEMENT = 'event-management';
    public const PAYMENT_RECEIPT =KeyWordEnum::PAYMENT_RECEIPT;

    public static function getValues(): array
    {
        return [
            self::PLAN,
            self::SERVICE,
            self::PACKAGE,
            self::SUBSCRIPTION,
            self::INCUBATOR,
            self::FREELANCER,
            self::MEETING_ROOM,
            self::MENTORSHIP_WITH_INVESTMENT,
            self::MENTORSHIP_WITHOUT_INVESTMENT,
            self::EVENT_MANAGEMENT,
        ];
    }

    public static function getIcon($key = null): ?string
    {
        $routes = [
            self::PLAN => '<i class="bx bx-subdirectory-left"></i>',
            self::SERVICE => '<i class="bx bx-server"></i>',
            self::PACKAGE => '<i class="bx bx-package"></i>',
            self::SUBSCRIPTION => '<i class="bx bx-subdirectory-left"></i>',
            self::PAYMENT_RECEIPT => '<i class="bx bx-rupee"></i>',
            self::INCUBATOR => '<i class="bx bx-building"></i>',
            self::FREELANCER => '<i class="bx bx-user"></i>',
            self::MEETING_ROOM => '<i class="bx bx-building-house"></i>',
            self::MENTORSHIP_WITH_INVESTMENT => '<i class="bx bx-rupee"></i>',
            self::MENTORSHIP_WITHOUT_INVESTMENT => '<i class="bx bx-rupee"></i>',
            self::EVENT_MANAGEMENT => '<i class="bx bx-calendar-event"></i>',
        ];
        if (!is_null($key) && array_key_exists($key, $routes)) {
            return $routes[$key];
        } else {
            return null;
        }
    }

    public static function getCommonNavs(): array
    {
        return array(
            self::SERVICE,
            self::PLAN,
            self::SUBSCRIPTION,
            self::PAYMENT_RECEIPT
        );
    }

    public static function getTranslationKeys(): array
    {
        return [
            self::PACKAGE => __(sprintf('%s.%s', 'general.left-bar', self::PACKAGE)),
            self::PLAN => __(sprintf('%s.%s', 'general.left-bar', self::PLAN)),
            self::SERVICE => __(sprintf('%s.%s', 'general.left-bar', self::SERVICE)),
            self::SUBSCRIPTION => __(sprintf('%s.%s', 'general.left-bar', self::SUBSCRIPTION)),
            self::PAYMENT_RECEIPT => __(sprintf('%s.%s', 'general.left-bar', self::PAYMENT_RECEIPT)),
            self::INCUBATOR => 'Incubator',
            self::MEETING_ROOM => 'Meeting Room',
            self::FREELANCER => 'Freelancer',
            self::MENTORSHIP_WITH_INVESTMENT => 'Mentorship with Investment',
            self::MENTORSHIP_WITHOUT_INVESTMENT => 'Mentorship with out Investment',
            self::EVENT_MANAGEMENT => 'Event Management'
        ];
    }

    public static function getRoute($key = null)
    {
        $routes = array(
            self::PACKAGE => route('dashboard.subscriptions.index', ['type' => SubscriptionTypeEnum::PACKAGE]),
            self::PLAN => route('dashboard.plans.index'),
            self::SERVICE => route('dashboard.services.index', ['type' => ServiceTypeEnum::BASIC]),
            self::SUBSCRIPTION => route('dashboard.subscriptions.index', ['type' => SubscriptionTypeEnum::PLAN]),
            self::INCUBATOR => route('dashboard.incubators.index'),
            self::MEETING_ROOM => route('dashboard.meeting-rooms.index'),
            self::FREELANCER => route('dashboard.freelancers.index', ['type' => PaymentTypeProcessEnum::PRE_DEFINED_PLAN]),
            self::MENTORSHIP_WITH_INVESTMENT => '',
            self::MENTORSHIP_WITHOUT_INVESTMENT => '',
            self::EVENT_MANAGEMENT => route('dashboard.events.index')
        );
        if (!is_null($key) && array_key_exists($key, $routes)) {
            return $routes[$key];
        } else {
            return null;
        }
    }
}
