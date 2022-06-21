<?php
declare(strict_types=1);

namespace App\Enum\TableHeadings\RealEstate;

use App\Enum\AbstractEnum;

class Complain extends AbstractEnum
{
    public const COMPLAIN_TYPE = 'complain_type';
    public const SOURCE = 'source';
    public const COMPLAIN_BY = 'complain_by';
    public const PHONE = 'phone';
    public const ACTION_TAKEN = 'action_taken';
    public const ASSIGNED = 'assigned';
    public const DATE = 'date';
    public const DESCRIPTION = 'description';
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
            self::COMPLAIN_TYPE => __(sprintf('%s.%s', 'general', self::COMPLAIN_TYPE)),
            self::SOURCE => __(sprintf('%s.%s', 'general', self::SOURCE)),
            self::COMPLAIN_BY => __(sprintf('%s.%s', 'general', self::COMPLAIN_BY)),
            self::PHONE => __(sprintf('%s.%s', 'general', self::PHONE)),
            self::DATE => __(sprintf('%s.%s', 'general', self::DATE)),
            self::ACTION_TAKEN => __(sprintf('%s.%s', 'general', self::ACTION_TAKEN)),
            self::ASSIGNED => __(sprintf('%s.%s', 'general', self::ASSIGNED)),
            self::NOTE => __(sprintf('%s.%s', 'general', self::NOTE)),
            self::DOCUMENT => __(sprintf('%s.%s', 'general', self::DOCUMENT)),
        ];
    }
}
