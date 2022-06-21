<?php
namespace App\Enum\Nav;

use App\Enum\AbstractEnum;
use App\Enum\KeyWordEnum;

class PrintNavEnum extends AbstractEnum
{
    public const INSTALLMENT_PLANS = KeyWordEnum::INSTALLMENT_PLANS;
    public const BUILDING_PRINT = KeyWordEnum::BUILDING_PRINT;
    public const FLAT_OWNERS = KeyWordEnum::FLAT_OWNERS;
    public const NOMINEE_PRINT = KeyWordEnum::NOMINEE_PRINT;
    public const HR_PRINT = KeyWordEnum::HR_PRINT;
    public const TITLE_TRANSFER_PRINT= KeyWordEnum::TITLE_TRANSFER_PRINT;


    public static function getValues(): array
    {
        return [
            self::INSTALLMENT_PLANS,
            self::BUILDING_PRINT,
            self::FLAT_OWNERS,
            self::NOMINEE_PRINT,
            self::HR_PRINT,
            self::TITLE_TRANSFER_PRINT,
        ];
    }

    public static function getIcon($key = null): ?string
    {
        $routes = [
            self::INSTALLMENT_PLANS => '<i class="mdi mdi-account"></i>',
            self::BUILDING_PRINT => '<i class="mdi mdi-account"></i>',
            self::FLAT_OWNERS => '<i class="mdi mdi-account"></i>',
            self::NOMINEE_PRINT => '<i class="mdi mdi-account"></i>',
            self::HR_PRINT => '<i class="mdi mdi-account"></i>',
            self::TITLE_TRANSFER_PRINT => '<i class="mdi mdi-account"></i>',
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
            self::INSTALLMENT_PLANS => __(sprintf('%s.%s', 'general', self::INSTALLMENT_PLANS)),
            self::BUILDING_PRINT => __(sprintf('%s.%s', 'general', self::BUILDING_PRINT)),
            self::FLAT_OWNERS => __(sprintf('%s.%s', 'general', self::FLAT_OWNERS)),
            self::NOMINEE_PRINT => __(sprintf('%s.%s', 'general', self::NOMINEE_PRINT)),
            self::HR_PRINT => __(sprintf('%s.%s', 'general', self::HR_PRINT)),
            self::TITLE_TRANSFER_PRINT => __(sprintf('%s.%s', 'general', self::TITLE_TRANSFER_PRINT)),
        ];
    }

    public static function getRoute($key = null)
    {
        $routes = array(
            self::INSTALLMENT_PLANS => route('dashboard.print.installment.plans'),
            self::BUILDING_PRINT => route('dashboard.print.building'),
            self::FLAT_OWNERS => route('dashboard.print.flat.owner'),
            self::NOMINEE_PRINT => route('dashboard.print.nominee'),
            self::HR_PRINT => route('dashboard.print.hr'),
            self::TITLE_TRANSFER_PRINT => route('dashboard.print.title.transfer.detail'),
        );
        if (!is_null($key) && array_key_exists($key, $routes)) {
            return $routes[$key];
        } else {
            return null;
        }
    }
}
