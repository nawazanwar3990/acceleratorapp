<?php
declare(strict_types=1);

namespace App\Enum\TableHeadings;

use App\Enum\AbstractEnum;

class EventTableHeadingEnum extends AbstractEnum
{
    public const EVENT_TYPE = 'event_type';
    public const EVENT_SUB_TYPE = 'event_sub_type';
    public const EVENT_NAME = 'event_name';
    public const EVENT_START_DATE = 'event_start_date';
    public const MO_OF_DAYS = 'no_of_days';
    public const EVENT_END_DATE = 'event_end_date';
    public const EVENT_START_TIME = 'event_start_time';
    public const EVENT_END_TIME = 'event_end_time';
    public const EVENT_ORGANIZED_BY = 'event_organized_by';
    public const EVENT_ORGANIZED_FOR = 'event_organized_for';
    public const TICKET = 'ticket';
    public static function getValues(): array
    {
        return [];
    }
    public static function getTranslationKeys(): array
    {
        return [
            self::EVENT_NAME => __(sprintf('%s.%s', 'general', self::EVENT_NAME)),
            self::EVENT_TYPE => __(sprintf('%s.%s', 'general', self::EVENT_TYPE)),
            self::EVENT_SUB_TYPE => __(sprintf('%s.%s', 'general', self::EVENT_SUB_TYPE)),
            self::EVENT_START_DATE => __(sprintf('%s.%s', 'general', self::EVENT_START_DATE)),
            self::MO_OF_DAYS => __(sprintf('%s.%s', 'general', self::MO_OF_DAYS)),
            self::EVENT_END_DATE => __(sprintf('%s.%s', 'general', self::EVENT_END_DATE)),
            self::EVENT_START_TIME => __(sprintf('%s.%s', 'general', self::EVENT_START_TIME)),
            self::EVENT_END_TIME => __(sprintf('%s.%s', 'general', self::EVENT_END_TIME)),
            self::EVENT_ORGANIZED_BY => __(sprintf('%s.%s', 'general', self::EVENT_ORGANIZED_BY)),
            self::EVENT_ORGANIZED_FOR => __(sprintf('%s.%s', 'general', self::EVENT_ORGANIZED_FOR)),
            self::TICKET => __(sprintf('%s.%s', 'general', self::TICKET)),
        ];
    }
}
