<?php
declare(strict_types=1);

namespace App\Enum\TableHeadings;

use App\Enum\AbstractEnum;
use function __;

class ReceiptTableHeading extends AbstractEnum
{
    public const RECEIPT = 'receipt';
    public const SENDER = 'sender';

    public static function getValues(): array
    {
        return [];
    }

    public static function getTranslationKeys(): array
    {
        return [
            self::SENDER => __(sprintf('%s.%s', 'general', self::SENDER)),
            self::RECEIPT => __(sprintf('%s.%s', 'general', self::RECEIPT)),
        ];
    }
}
