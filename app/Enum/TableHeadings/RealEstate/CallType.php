<?php
declare(strict_types=1);

namespace App\Enum\TableHeadings\RealEstate;

use App\Enum\AbstractEnum;

class CallType extends AbstractEnum
{
    public const NAME = 'name';
    public const DESCRIPTION = 'description';

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
            self::DESCRIPTION => __(sprintf('%s.%s', 'general', self::DESCRIPTION)),
        ];
    }
}
