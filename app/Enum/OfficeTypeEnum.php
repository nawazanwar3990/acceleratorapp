<?php

declare(strict_types=1);

namespace App\Enum;

use App\Enum\AbstractEnum;

class OfficeTypeEnum extends AbstractEnum
{
    public const CONFERENCE_ROOM = 'conference_room';
    public const MEETING_ROOM = 'meeting_room';
    public const DEDICATED_OFFICE = 'dedicated_room';
    public const SHARED_OFFICE = 'shared_office';


    public static function getValues(): array
    {
        return array(
            self::CONFERENCE_ROOM,
            self::MEETING_ROOM,
            self::DEDICATED_OFFICE,
            self::SHARED_OFFICE,
        );
    }

    public static function getTranslationKeys(): array
    {
        return array(
            self::CONFERENCE_ROOM => __(sprintf('%s.%s', 'general', self::CONFERENCE_ROOM)),
            self::MEETING_ROOM => __(sprintf('%s.%s', 'general', self::MEETING_ROOM)),
            self::DEDICATED_OFFICE => __(sprintf('%s.%s', 'general', self::DEDICATED_OFFICE)),
            self::SHARED_OFFICE => __(sprintf('%s.%s', 'general', self::SHARED_OFFICE)),
        );
    }
}
