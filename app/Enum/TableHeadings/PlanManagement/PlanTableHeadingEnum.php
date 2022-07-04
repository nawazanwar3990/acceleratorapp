<?php
declare(strict_types=1);

namespace App\Enum\TableHeadings\PlanManagement;

use App\Enum\AbstractEnum;
use function __;

class PlanTableHeadingEnum extends AbstractEnum
{
    public const PLAN_FOR = 'plan_for';
    public const PLAN_HOLDER_NAME = 'plan_holder_name';
    public const NAME = 'name';
    public const MONTHS = 'months';
    public const INSTALLMENT_DURATION = 'installment_duration';
    public const TOTAL_INSTALLMENTS = 'total_installments';
    public const REMINDER_DAYS = 'reminder_days';
    public const DOWN_PAYMENT_TYPE = 'down_payment_type';
    public const DOWN_PAYMENT_VALUE = 'down_payment_value';

    public static function getValues(): array
    {
        return [];
    }

    public static function getTranslationKeys(): array
    {
        return [
            self::PLAN_FOR => __(sprintf('%s.%s', 'general', self::PLAN_FOR)),
            self::PLAN_HOLDER_NAME => __(sprintf('%s.%s', 'general', self::PLAN_HOLDER_NAME)),
            self::NAME => __(sprintf('%s.%s', 'general', self::NAME)),
            self::MONTHS => __(sprintf('%s.%s', 'general', self::MONTHS)),
            self::INSTALLMENT_DURATION => __(sprintf('%s.%s', 'general', self::INSTALLMENT_DURATION)),
            self::TOTAL_INSTALLMENTS => __(sprintf('%s.%s', 'general', self::TOTAL_INSTALLMENTS)),
            self::REMINDER_DAYS => __(sprintf('%s.%s', 'general', self::REMINDER_DAYS)),
            self::DOWN_PAYMENT_TYPE => __(sprintf('%s.%s', 'general', self::DOWN_PAYMENT_TYPE)),
            self::DOWN_PAYMENT_VALUE => __(sprintf('%s.%s', 'general', self::DOWN_PAYMENT_VALUE)),
        ];
    }
}
