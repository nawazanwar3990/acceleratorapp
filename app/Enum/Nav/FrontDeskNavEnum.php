<?php
namespace App\Enum\Nav;

use App\Enum\AbstractEnum;
use App\Enum\KeyWordEnum;

class FrontDeskNavEnum extends AbstractEnum
{
    public const FRONT_DESK_SETUP = KeyWordEnum::FRONT_DESK_SETUP;
    public const SALES_ENQUIRY = KeyWordEnum::SALES_ENQUIRY;
    public const VISITOR_BOOK = KeyWordEnum::VISITOR_BOOK;
    public const PHONE_CALL_LOG = KeyWordEnum::PHONE_CALL_LOG;
    public const POSTAL_DISPATCH = KeyWordEnum::POSTAL_DISPATCH;
    public const POSTAL_RECEIVE = KeyWordEnum::POSTAL_RECEIVE;
    public const COMPLAIN = KeyWordEnum::COMPLAIN;


    public static function getValues(): array
    {
        return [
            self::FRONT_DESK_SETUP,
            self::SALES_ENQUIRY,
            self::VISITOR_BOOK,
            self::PHONE_CALL_LOG,
            self::POSTAL_DISPATCH,
            self::POSTAL_RECEIVE,
            self::COMPLAIN,
        ];
    }

    public static function getIcon($key = null): ?string
    {
        $routes = [
            self::FRONT_DESK_SETUP => '<i class="mdi mdi-account"></i>',
            self::SALES_ENQUIRY => '<i class="mdi mdi-account"></i>',
            self::VISITOR_BOOK => '<i class="mdi mdi-account"></i>',
            self::PHONE_CALL_LOG => '<i class="mdi mdi-account"></i>',
            self::POSTAL_DISPATCH => '<i class="mdi mdi-account"></i>',
            self::POSTAL_RECEIVE => '<i class="mdi mdi-account"></i>',
            self::COMPLAIN => '<i class="mdi mdi-account"></i>',

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
            self::FRONT_DESK_SETUP => __(sprintf('%s.%s', 'general', self::FRONT_DESK_SETUP)),
            self::SALES_ENQUIRY => __(sprintf('%s.%s', 'general', self::SALES_ENQUIRY)),
            self::VISITOR_BOOK => __(sprintf('%s.%s', 'general', self::VISITOR_BOOK)),
            self::PHONE_CALL_LOG => __(sprintf('%s.%s', 'general', self::PHONE_CALL_LOG)),
            self::POSTAL_DISPATCH => __(sprintf('%s.%s', 'general', self::POSTAL_DISPATCH)),
            self::POSTAL_RECEIVE => __(sprintf('%s.%s', 'general', self::POSTAL_RECEIVE)),
            self::COMPLAIN => __(sprintf('%s.%s', 'general', self::COMPLAIN)),

        ];
    }

    public static function getRoute($key = null)
    {
        $routes = array(
            self::FRONT_DESK_SETUP => route('dashboard'),
            self::SALES_ENQUIRY => route('dashboard.sales-enquiry.index'),
            self::VISITOR_BOOK => route('dashboard.visitor-book.index'),
            self::PHONE_CALL_LOG => route('dashboard.phone-call-log.index'),
            self::POSTAL_DISPATCH => route('dashboard.postal-dispatch.index'),
            self::POSTAL_RECEIVE => route('dashboard.postal-receive.index'),
            self::COMPLAIN => route('dashboard.complain.index'),
        );
        if (!is_null($key) && array_key_exists($key, $routes)) {
            return $routes[$key];
        } else {
            return null;
        }
    }
}
