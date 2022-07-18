<?php
declare(strict_types=1);

namespace App\Enum\TableHeadings\PlanManagement;

use App\Enum\AbstractEnum;
use function __;

class PlanTableHeadingEnum extends AbstractEnum
{
    public const NAME = 'name';
    public const SITTING_CAPACITY = 'sitting_capacity';
    public const DURATION = 'duration';
    public const PRICE = 'price';
    public const BASIC_SERVICE = 'basic_service';
    public const ADDITIONAL_SERVICE = 'additional_service';
    public static function getValues(): array
    {
        return [];
    }

    public static function getTranslationKeys(): array
    {
        return [
            self::NAME => __(sprintf('%s.%s', 'general', self::NAME)),
            self::SITTING_CAPACITY => __(sprintf('%s.%s', 'general', self::SITTING_CAPACITY)),
            self::DURATION => __(sprintf('%s.%s', 'general', self::DURATION)),
            self::PRICE => __(sprintf('%s.%s', 'general', self::PRICE)),
            self::BASIC_SERVICE => __(sprintf('%s.%s', 'general', self::BASIC_SERVICE)),
            self::ADDITIONAL_SERVICE => __(sprintf('%s.%s', 'general', self::ADDITIONAL_SERVICE))
        ];
    }
}
