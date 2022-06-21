<?php
declare(strict_types=1);

namespace App\Enum\TableHeadings\RealEstate;

use App\Enum\AbstractEnum;

class Nominee extends AbstractEnum
{
    public const OWNER = 'owner';
    public const NOMINEE = 'nominee';
    public const FLAT_SHOP = 'flat_shop';

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
            self::OWNER => __(sprintf('%s.%s', 'general', self::OWNER)),
            self::NOMINEE => __(sprintf('%s.%s', 'general', self::NOMINEE)),
            self::FLAT_SHOP => __(sprintf('%s.%s', 'general', self::FLAT_SHOP)),
        ];
    }
}
