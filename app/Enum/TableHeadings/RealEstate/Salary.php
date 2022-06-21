<?php
declare(strict_types=1);

namespace App\Enum\TableHeadings\RealEstate;

use App\Enum\AbstractEnum;

class Salary extends AbstractEnum
{
    public const EMPLOYEE = 'employee';
    public const SALARY_MONTH = 'salary_month';
    public const SALARY = 'salary';
    public const TYPE = 'type';

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
            self::EMPLOYEE => __(sprintf('%s.%s', 'general', self::EMPLOYEE)),
            self::SALARY_MONTH => __(sprintf('%s.%s', 'general', self::SALARY_MONTH)),
            self::SALARY => __(sprintf('%s.%s', 'general', self::SALARY)),
            self::TYPE => __(sprintf('%s.%s', 'general', self::TYPE)),
        ];
    }
}
