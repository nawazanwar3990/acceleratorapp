<?php
declare(strict_types=1);

namespace App\Enum\TableHeadings\Accounts;

use App\Enum\AbstractEnum;

class EmployeeLoan extends AbstractEnum
{
    public const EMPLOYEE = 'employee';
    public const REQUEST_DATE = 'request_date';
    public const LOAN_AMOUNT = 'loan_amount';
    public const RETURN_CONDITION = 'return_condition';
    public const STATUS = 'status';
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
            self::REQUEST_DATE => __(sprintf('%s.%s', 'general', self::REQUEST_DATE)),
            self::LOAN_AMOUNT => __(sprintf('%s.%s', 'general', self::LOAN_AMOUNT)),
            self::RETURN_CONDITION => __(sprintf('%s.%s', 'general', self::RETURN_CONDITION)),
            self::STATUS => __(sprintf('%s.%s', 'general', self::STATUS)),
        ];
    }
}
