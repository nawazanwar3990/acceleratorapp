<?php
declare(strict_types=1);

namespace App\Enum\TableHeadings\RealEstate\Devices;

use App\Enum\AbstractEnum;

class DeviceEnum extends AbstractEnum
{
    public const DEVICE_TYPE = 'device_type';
    public const DEVICE_CLASS = 'device_class';
    public const DEVICE_LOCATION = 'device_location';
    public const DEVICE_MAKE = 'device_make';
    public const DEVICE_MODEL = 'device_model';
    public const DEVICE_OPERATING_SYSTEM = 'device_operating_system';
    public const NAME = 'name';
    public const IP_ADDRESS = 'ip_address';
    public const USER_NAME = 'username';
    public const PASSWORD = 'password';
    public const CONNECTION_STRING = 'connection_string';
    public const GENERATION = 'device_generation';
    public const MAC_ADDRESS = 'mac_address';
    public const SERIAL_NUMBER = 'serial_number';
    public const ADMIN_LOGIN = 'admin_login';
    public const ADMIN_PASSWORD = 'admin_password';

    public const LOT_NUMBER = 'lot_number';
    public const LOT_DATE = 'lot_date';
    public const OTHER_INFO = 'other_info';

    /**
     * @inheritDoc
     */
    public static function getValues(): array
    {
        return [];
    }

    /**
     * @inheritDoc
     */
    public static function getTranslationKeys(): array
    {
        return [
            self::DEVICE_TYPE => __(sprintf('%s.%s', 'general', self::DEVICE_TYPE)),
            self::DEVICE_CLASS => __(sprintf('%s.%s', 'general', self::DEVICE_CLASS)),
            self::DEVICE_LOCATION => __(sprintf('%s.%s', 'general', self::DEVICE_LOCATION)),
            self::DEVICE_MAKE => __(sprintf('%s.%s', 'general', self::DEVICE_MAKE)),
            self::DEVICE_MODEL => __(sprintf('%s.%s', 'general', self::DEVICE_MODEL)),
            self::DEVICE_OPERATING_SYSTEM => __(sprintf('%s.%s', 'general', self::DEVICE_OPERATING_SYSTEM)),
            self::NAME => __(sprintf('%s.%s', 'general', self::NAME)),
            self::IP_ADDRESS => __(sprintf('%s.%s', 'general', self::IP_ADDRESS)),
            self::USER_NAME => __(sprintf('%s.%s', 'general', self::USER_NAME)),
            self::PASSWORD => __(sprintf('%s.%s', 'general', self::PASSWORD)),
            self::CONNECTION_STRING => __(sprintf('%s.%s', 'general', self::CONNECTION_STRING)),
            self::GENERATION => __(sprintf('%s.%s', 'general', self::GENERATION)),
            self::MAC_ADDRESS => __(sprintf('%s.%s', 'general', self::MAC_ADDRESS)),
            self::SERIAL_NUMBER => __(sprintf('%s.%s', 'general', self::SERIAL_NUMBER)),
            self::ADMIN_LOGIN => __(sprintf('%s.%s', 'general', self::ADMIN_LOGIN)),
            self::ADMIN_PASSWORD => __(sprintf('%s.%s', 'general', self::ADMIN_PASSWORD)),
            self::LOT_NUMBER => __(sprintf('%s.%s', 'general', self::LOT_NUMBER)),
            self::LOT_DATE => __(sprintf('%s.%s', 'general', self::LOT_DATE)),
            self::OTHER_INFO => __(sprintf('%s.%s', 'general', self::OTHER_INFO)),
        ];
    }
}
