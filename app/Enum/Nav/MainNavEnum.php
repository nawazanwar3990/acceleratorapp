<?php
namespace App\Enum\Nav;

use App\Enum\AbstractEnum;
use App\Enum\KeyWordEnum;

class MainNavEnum extends AbstractEnum
{
    public const DASHBOARD = KeyWordEnum::DASHBOARD;
    public const DEFINITION =KeyWordEnum::DEFINITION;
    public const SERVICE_CREATION =KeyWordEnum::SERVICE_CREATION;
    public const PACKAGES_PLAIN =KeyWordEnum::PACKAGES_PLAIN;
    public const INVOICE_TICKET_AND_ACCOUNTING = KeyWordEnum::INVOICE_TICKET_AND_ACCOUNTING;
    public const REPORTING_AND_STAT_HANDLING = KeyWordEnum::REPORTING_AND_STAT_HANDLING;
    public const SYSTEM_CONFIGURATION = KeyWordEnum::SYSTEM_CONFIGURATION;
    public const FREELANCE_AND_MENTOR = KeyWordEnum::FREELANCE_AND_MENTOR;
    public const USER_MANAGEMENT_SYSTEM = KeyWordEnum::USER_MANAGEMENT_SYSTEM;
    public const FRONT_DESK_MANAGEMENT_SYSTEM = KeyWordEnum::FRONT_DESK_MANAGEMENT_SYSTEM;
    public const CO_WORKING_SPACE_ALLOTMENT_AND_HANDLING = KeyWordEnum::CO_WORKING_SPACE_ALLOTMENT_AND_HANDLING;
    public const MEETING_APPOINTMENT_AND_EVENT_MANAGEMENT = KeyWordEnum::MEETING_APPOINTMENT_AND_EVENT_MANAGEMENT;

    public static function getValues(): array
    {
        return [
            self::DASHBOARD,
            self::DEFINITION,
            self::SERVICE_CREATION,
            self::PACKAGES_PLAIN,
            self::INVOICE_TICKET_AND_ACCOUNTING,
            self::REPORTING_AND_STAT_HANDLING,
            self::SYSTEM_CONFIGURATION,
            self::FREELANCE_AND_MENTOR,
            self::USER_MANAGEMENT_SYSTEM,
            self::FRONT_DESK_MANAGEMENT_SYSTEM,
            self::CO_WORKING_SPACE_ALLOTMENT_AND_HANDLING,
            self::MEETING_APPOINTMENT_AND_EVENT_MANAGEMENT
        ];
    }

    public static function getIcon($key = null): ?string
    {
        $routes = [
            self::DASHBOARD => '<i class="bx bxs-dashboard"></i>',
            self::DEFINITION => '<i class="fas fa-info"></i>',
            self::SERVICE_CREATION => '<i class="fas fa-info"></i>',
            self::PACKAGES_PLAIN => '<i class="fas fa-info"></i>',
            self::INVOICE_TICKET_AND_ACCOUNTING => '<i class="fas fa-building"></i>',
            self::REPORTING_AND_STAT_HANDLING => '<i class="fas fa-users"></i>',
            self::SYSTEM_CONFIGURATION => '<i class="fas fa-briefcase"></i>',
            self::FREELANCE_AND_MENTOR => '<i class="fas fa-money-bill"></i>',
            self::USER_MANAGEMENT_SYSTEM => '<i class="fas fa-shopping-cart"></i>',
            self::FRONT_DESK_MANAGEMENT_SYSTEM => '<i class="far fa-money-bill-alt"></i>',
            self::CO_WORKING_SPACE_ALLOTMENT_AND_HANDLING => '<i class="fas fa-chart-pie"></i>',
            self::MEETING_APPOINTMENT_AND_EVENT_MANAGEMENT => '<i class="fas fa-chart-bar"></i>'
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
            self::DASHBOARD => __(sprintf('%s.%s', 'general', self::DASHBOARD)),
            self::DEFINITION => __(sprintf('%s.%s', 'general', self::DEFINITION)),
            self::SERVICE_CREATION => __(sprintf('%s.%s', 'general', self::SERVICE_CREATION)),
            self::PACKAGES_PLAIN => __(sprintf('%s.%s', 'general', self::PACKAGES_PLAIN)),
            self::INVOICE_TICKET_AND_ACCOUNTING => __(sprintf('%s.%s', 'general', self::INVOICE_TICKET_AND_ACCOUNTING)),
            self::REPORTING_AND_STAT_HANDLING => __(sprintf('%s.%s', 'general', self::REPORTING_AND_STAT_HANDLING)),
            self::SYSTEM_CONFIGURATION => __(sprintf('%s.%s', 'general', self::SYSTEM_CONFIGURATION)),
            self::FREELANCE_AND_MENTOR => __(sprintf('%s.%s', 'general', self::FREELANCE_AND_MENTOR)),
            self::USER_MANAGEMENT_SYSTEM => __(sprintf('%s.%s', 'general', self::USER_MANAGEMENT_SYSTEM)),
            self::FRONT_DESK_MANAGEMENT_SYSTEM => __(sprintf('%s.%s', 'general', self::FRONT_DESK_MANAGEMENT_SYSTEM)),
            self::CO_WORKING_SPACE_ALLOTMENT_AND_HANDLING => __(sprintf('%s.%s', 'general', self::CO_WORKING_SPACE_ALLOTMENT_AND_HANDLING)),
            self::MEETING_APPOINTMENT_AND_EVENT_MANAGEMENT => __(sprintf('%s.%s', 'general', self::MEETING_APPOINTMENT_AND_EVENT_MANAGEMENT))
        ];
    }
}
