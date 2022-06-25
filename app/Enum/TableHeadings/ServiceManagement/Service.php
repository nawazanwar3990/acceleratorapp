<?php
declare(strict_types=1);

namespace App\Enum\TableHeadings\ServiceManagement;

use App\Enum\AbstractEnum;
use function __;

class Service extends AbstractEnum
{
    public const TYPE = 'type';
    public const NAME = 'name';
    public const STATUS = 'status';

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
            self::TYPE => __(sprintf('%s.%s', 'general', self::TYPE)),
            self::NAME => __(sprintf('%s.%s', 'general', self::NAME)),
            self::STATUS => __(sprintf('%s.%s', 'general', self::STATUS)),
        ];
    }
}
