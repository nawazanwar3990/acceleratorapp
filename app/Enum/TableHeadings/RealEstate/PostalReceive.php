<?php
declare(strict_types=1);

namespace App\Enum\TableHeadings\RealEstate;

use App\Enum\AbstractEnum;

class PostalReceive extends AbstractEnum
{
    public const TO_TITLE = 'to_title';
    public const FROM_TITLE = 'from_title';
    public const REFERENCE_NUMBER = 'reference_number';
    public const ADDRESS = 'address';
    public const DATE = 'date';
    public const NOTE = 'note';
    public const DOCUMENT = 'document';

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
            self::TO_TITLE => __(sprintf('%s.%s', 'general', self::TO_TITLE)),
            self::FROM_TITLE => __(sprintf('%s.%s', 'general', self::FROM_TITLE)),
            self::REFERENCE_NUMBER => __(sprintf('%s.%s', 'general', self::REFERENCE_NUMBER)),
            self::ADDRESS => __(sprintf('%s.%s', 'general', self::ADDRESS)),
            self::DATE => __(sprintf('%s.%s', 'general', self::DATE)),
            self::NOTE => __(sprintf('%s.%s', 'general', self::NOTE)),
            self::DOCUMENT => __(sprintf('%s.%s', 'general', self::DOCUMENT)),
        ];
    }
}
