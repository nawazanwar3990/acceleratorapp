<?php
declare(strict_types=1);

namespace App\Enum\TableHeadings\SubscriptionManagement;

use App\Enum\AbstractEnum;
use function __;

class ReceiptTableHeading extends AbstractEnum
{
    public const RECEIPT = 'receipt';
    public const BUSINESS_ACCELERATOR = 'business_accelerator';

    public static function getValues(): array
    {
        return [];
    }

    public static function getTranslationKeys(): array
    {
        return [
            self::RECEIPT => __(sprintf('%s.%s', 'general', self::RECEIPT)),
            self::BUSINESS_ACCELERATOR => __(sprintf('%s.%s', 'general', self::BUSINESS_ACCELERATOR))

        ];
    }
}
