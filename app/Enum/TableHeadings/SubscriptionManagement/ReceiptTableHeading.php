<?php
declare(strict_types=1);

namespace App\Enum\TableHeadings\SubscriptionManagement;

use App\Enum\AbstractEnum;
use function __;

class ReceiptTableHeading extends AbstractEnum
{
    public const RECEIPT = 'receipt';
    public const SENDER_NAME = 'sender_name';
    public const SENDER_ROLE = 'sender_role';

    public static function getValues(): array
    {
        return [];
    }

    public static function getTranslationKeys(): array
    {
        return [
            self::RECEIPT => __(sprintf('%s.%s', 'general', self::RECEIPT)),
            self::SENDER_NAME => __(sprintf('%s.%s', 'general', self::SENDER_NAME)),
            self::SENDER_ROLE => __(sprintf('%s.%s', 'general', self::SENDER_ROLE))
        ];
    }
}
