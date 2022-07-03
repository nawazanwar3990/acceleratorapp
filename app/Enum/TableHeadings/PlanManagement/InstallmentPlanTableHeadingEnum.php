<?php
declare(strict_types=1);

namespace App\Enum\TableHeadings\PlanManagement;

use App\Enum\AbstractEnum;
use function __;

class InstallmentPlanTableHeadingEnum extends AbstractEnum
{
    public const Name = 'name';

    public static function getValues(): array
    {
        return [];
    }

    public static function getTranslationKeys(): array
    {
        return [
            self::Name => __(sprintf('%s.%s', 'general', self::Name)),

        ];
    }
}
