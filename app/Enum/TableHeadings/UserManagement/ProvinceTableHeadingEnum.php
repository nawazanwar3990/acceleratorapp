<?php
declare(strict_types=1);

namespace App\Enum\TableHeadings\UserManagement;

use App\Enum\AbstractEnum;
use function __;

class ProvinceTableHeadingEnum extends AbstractEnum
{
    public const NAME = 'name';
    public const COUNTRY = 'country';
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
            self::NAME => __(sprintf('%s.%s', 'general', self::NAME)),
            self::COUNTRY => __(sprintf('%s.%s', 'general', self::COUNTRY)),
            self::STATUS => __(sprintf('%s.%s', 'general', self::STATUS)),
        ];
    }
}
