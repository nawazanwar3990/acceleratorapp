<?php
declare(strict_types=1);

namespace App\Enum\TableHeadings;

use App\Enum\AbstractEnum;

class MeetingTableHeadingEnum extends AbstractEnum
{
    public const MEETING_TYPE = 'meeting_type';
    public const MEETING_SUB_TYPE = 'meeting_sub_type';
    public const MEETING_NAME = 'meeting_name';
    public const MEETING_HELD_DATE = 'meeting_held_date';
    public const MEETING_TIME = 'meeting_time';
    public const MEETING_MODE = 'meeting_mode';
    public const MEETING_ORGANIZED_FOR = 'meeting_organized_for';
    public const MEETING_ORGANIZED_LOCATION = 'meeting_organized_location';

    public static function getValues(): array
    {
        return [];
    }

    public static function getTranslationKeys(): array
    {
        return [
            self::MEETING_TYPE => __(sprintf('%s.%s', 'general', self::MEETING_TYPE)),
            self::MEETING_SUB_TYPE => __(sprintf('%s.%s', 'general', self::MEETING_SUB_TYPE)),
            self::MEETING_NAME => __(sprintf('%s.%s', 'general', self::MEETING_NAME)),
            self::MEETING_HELD_DATE => __(sprintf('%s.%s', 'general', self::MEETING_HELD_DATE)),
            self::MEETING_TIME => __(sprintf('%s.%s', 'general', self::MEETING_TIME)),
            self::MEETING_MODE => __(sprintf('%s.%s', 'general', self::MEETING_MODE)),
            self::MEETING_ORGANIZED_FOR => __(sprintf('%s.%s', 'general', self::MEETING_ORGANIZED_FOR)),
            self::MEETING_ORGANIZED_LOCATION => __(sprintf('%s.%s', 'general', self::MEETING_ORGANIZED_LOCATION)),
        ];
    }
}
