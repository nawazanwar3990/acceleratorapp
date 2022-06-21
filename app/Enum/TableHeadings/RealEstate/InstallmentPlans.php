<?php
declare(strict_types=1);

namespace App\Enum\TableHeadings\RealEstate;

use App\Enum\AbstractEnum;

class InstallmentPlans extends AbstractEnum
{
    public const NAME = 'name';
    public const MONTHS = 'months';
    public const INSTALLMENT_DURATION = 'installment_duration';
    public const TOTAL_INSTALLMENTS = 'total_installments';
    public const DOWN_PAYMENT = 'down_payment';

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
            self::NAME => __(sprintf('%s.%s', 'general', self::NAME)),
            self::MONTHS => __(sprintf('%s.%s', 'general', self::MONTHS)),
            self::INSTALLMENT_DURATION => __(sprintf('%s.%s', 'general', self::INSTALLMENT_DURATION)),
            self::TOTAL_INSTALLMENTS => __(sprintf('%s.%s', 'general', self::TOTAL_INSTALLMENTS)),
            self::DOWN_PAYMENT => __(sprintf('%s.%s', 'general', self::DOWN_PAYMENT)),
        ];
    }
}
