<?php
declare(strict_types=1);

namespace App\Enum\TableHeadings\SubscriptionManagement;

use App\Enum\AbstractEnum;
use function __;

class PackageTableHeading extends AbstractEnum
{
    public const PACKAGE_TYPES = 'package_types';
    public const PACKAGE_NAME = 'package_name';
    public const DURATION_TYPE = 'duration_type';
    public const DURATION_LIMIT = 'duration_limit';
    public const PRICE = 'price';
    public const REMINDER_DAYS = 'reminder_days';
    public const SERVICES = 'services';
    public const STATUS = 'status';

    public static function getValues(): array
    {
        return [];
    }
    public static function getTranslationKeys(): array
    {
        return [
            self::PACKAGE_TYPES => __(sprintf('%s.%s', 'general', self::PACKAGE_TYPES)),
            self::PACKAGE_NAME => __(sprintf('%s.%s', 'general', self::PACKAGE_NAME)),
            self::DURATION_TYPE => __(sprintf('%s.%s', 'general', self::DURATION_TYPE)),
            self::DURATION_LIMIT => __(sprintf('%s.%s', 'general', self::DURATION_LIMIT)),
            self::PRICE => __(sprintf('%s.%s', 'general', self::PRICE)),
            self::REMINDER_DAYS => __(sprintf('%s.%s', 'general', self::REMINDER_DAYS)),
            self::SERVICES => __(sprintf('%s.%s', 'general', self::SERVICES)),
            self::STATUS => __(sprintf('%s.%s', 'general', self::STATUS)),
        ];
    }
}
