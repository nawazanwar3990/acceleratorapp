<?php
declare(strict_types=1);

namespace App\Enum\TableHeadings\PlanManagement;

use App\Enum\AbstractEnum;
use function __;

class PlanTableHeadingEnum extends AbstractEnum
{
    public const NAME = 'name';
    public const NO_OF_PERSONS = 'no_of_persons';
    public const DURATION = 'duration';
    public const PRICE = 'price';
    public static function getValues(): array
    {
        return [];
    }

    public static function getTranslationKeys(): array
    {
        return [
            self::NAME => __(sprintf('%s.%s', 'general', self::NAME)),
            self::NO_OF_PERSONS => __(sprintf('%s.%s', 'general', self::NO_OF_PERSONS)),
            self::DURATION => __(sprintf('%s.%s', 'general', self::DURATION)),
            self::PRICE => __(sprintf('%s.%s', 'general', self::PRICE))
        ];
    }
}
