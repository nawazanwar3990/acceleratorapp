<?php
declare(strict_types=1);

namespace App\Enum\TableHeadings\RealEstate;

use App\Enum\AbstractEnum;

class VisitorBook extends AbstractEnum
{
    public const PURPOSE = 'purpose';
    public const NAME = 'name';
    public const PHONE = 'phone';
    public const CNIC = 'cnic';
    public const NO_OF_PERSON = 'no_of_person';
    public const DATE = 'date';
    public const TIME_IN = 'time_in';
    public const TIME_OUT = 'time_out';
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
            self::PURPOSE => __(sprintf('%s.%s', 'general', self::PURPOSE)),
            self::NAME => __(sprintf('%s.%s', 'general', self::NAME)),
            self::PHONE => __(sprintf('%s.%s', 'general', self::PHONE)),
            self::CNIC => __(sprintf('%s.%s', 'general', self::CNIC)),
            self::NO_OF_PERSON => __(sprintf('%s.%s', 'general', self::NO_OF_PERSON)),
            self::DATE => __(sprintf('%s.%s', 'general', self::DATE)),
            self::TIME_IN => __(sprintf('%s.%s', 'general', self::TIME_IN)),
            self::TIME_OUT => __(sprintf('%s.%s', 'general', self::TIME_OUT)),
            self::NOTE => __(sprintf('%s.%s', 'general', self::NOTE)),
            self::DOCUMENT => __(sprintf('%s.%s', 'general', self::DOCUMENT)),
        ];
    }
}
