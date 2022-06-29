<?php
declare(strict_types=1);

namespace App\Enum\TableHeadings\PackageManagement;

use App\Enum\AbstractEnum;
use function __;

class PackageLeftNav extends AbstractEnum
{
    public const TYPE = 'type';
    public const NAME = 'name';
    public const SlUG = 'slug';
    public const DURATION_TYPE = 'duration_type';
    public const DURATION_LIMIT = 'duration_limit';
    public const PRICE = 'price';
    public const REMINDER_DAYS = 'reminder_days';
    public const MODULE = 'module';

    public static function getValues(): array
    {
        return [];
    }
    public static function getTranslationKeys(): array
    {
        return [
            self::TYPE => __(sprintf('%s.%s', 'general', self::TYPE)),
            self::NAME => __(sprintf('%s.%s', 'general', self::NAME)),
            self::SlUG => __(sprintf('%s.%s', 'general', self::SlUG)),
            self::DURATION_TYPE => __(sprintf('%s.%s', 'general', self::DURATION_TYPE)),
            self::DURATION_LIMIT => __(sprintf('%s.%s', 'general', self::DURATION_LIMIT)),
            self::PRICE => __(sprintf('%s.%s', 'general', self::PRICE)),
            self::REMINDER_DAYS => __(sprintf('%s.%s', 'general', self::REMINDER_DAYS)),
            self::MODULE => __(sprintf('%s.%s', 'general', self::MODULE)),
        ];
    }
}
