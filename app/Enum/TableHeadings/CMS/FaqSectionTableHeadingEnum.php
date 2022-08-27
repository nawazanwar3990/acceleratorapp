<?php
declare(strict_types=1);

namespace App\Enum\TableHeadings\CMS;

use App\Enum\AbstractEnum;
use function __;

class FaqSectionTableHeadingEnum extends AbstractEnum
{
    public const TOPIC_ID = 'topic_id';
    public const QUESTION = 'question';
    public const ANSWER = 'answer';
    public const ORDER = 'order';
    public const ACTIVE = 'active';

    public static function getValues(): array
    {
        return [];
    }

    public static function getTranslationKeys(): array
    {
        return [
            self::TOPIC_ID => __(sprintf('%s.%s', 'general', self::TOPIC_ID)),
            self::QUESTION => __(sprintf('%s.%s', 'general', self::QUESTION)),
            self::ANSWER => __(sprintf('%s.%s', 'general', self::ANSWER)),
            self::ORDER => __(sprintf('%s.%s', 'general', self::ORDER)),
            self::ACTIVE => __(sprintf('%s.%s', 'general', self::ACTIVE)),
        ];
    }
}
