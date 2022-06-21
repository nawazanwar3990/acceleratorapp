<?php
declare(strict_types=1);

namespace App\Enum\TableHeadings\RealEstate;

use App\Enum\AbstractEnum;

class POA extends AbstractEnum
{
    public const Executent = 'executant';
    public const Attorney = 'authorised_attorney';

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
            self::Executent => __(sprintf('%s.%s', 'general', self::Executent)),
            self::Attorney => __(sprintf('%s.%s', 'general', self::Attorney)),
        ];
    }
}
