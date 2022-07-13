<?php
declare(strict_types=1);

namespace App\Enum\TableHeadings\ServiceManagement;

use App\Enum\AbstractEnum;
use function __;

class ServiceTableHeading extends AbstractEnum
{
    public const TYPE = 'type';
    public const NAME = 'name';
    public const SLUG = 'slug';
    public const PARENT = 'parent';
    public const STATUS = 'status';
    public static function getValues(): array
    {
        return [];
    }
    public static function getTranslationKeys(): array
    {
        return [
            self::TYPE => __(sprintf('%s.%s', 'general', self::TYPE)),
            self::NAME => __(sprintf('%s.%s', 'general', self::NAME)),
            self::SLUG => __(sprintf('%s.%s', 'general', self::SLUG)),
            self::PARENT => __(sprintf('%s.%s', 'general', self::PARENT)),
            self::STATUS => __(sprintf('%s.%s', 'general', self::STATUS)),
        ];
    }
}
