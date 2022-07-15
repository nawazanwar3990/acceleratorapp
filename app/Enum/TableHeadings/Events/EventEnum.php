<?php
declare(strict_types=1);

namespace App\Enum\TableHeadings\Events;

use App\Enum\AbstractEnum;

class EventEnum extends AbstractEnum
{
    public const NAME = 'name';
    public const EVENT_TYPE = 'event_type';
    public const START_DATE = 'start_date';
    public const END_DATE = 'end_date';
    public const START_TIME = 'start_time';
    public const END_TIME = 'end_time';
    public const DESCRIPTION = 'description';
    public const IMAGE = 'images';

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
            self::EVENT_TYPE => __(sprintf('%s.%s', 'general', self::EVENT_TYPE)),
            self::START_DATE => __(sprintf('%s.%s', 'general', self::START_DATE)),
            self::END_DATE => __(sprintf('%s.%s', 'general', self::END_DATE)),
            self::START_TIME => __(sprintf('%s.%s', 'general', self::START_TIME)),
            self::END_TIME => __(sprintf('%s.%s', 'general', self::END_TIME)),
            self::DESCRIPTION => __(sprintf('%s.%s', 'general', self::DESCRIPTION)),
            self::IMAGE => __(sprintf('%s.%s', 'general', self::IMAGE)),
        ];
    }
}
