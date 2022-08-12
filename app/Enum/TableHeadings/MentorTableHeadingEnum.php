<?php
declare(strict_types=1);

namespace App\Enum\TableHeadings;

use App\Enum\AbstractEnum;
use function __;

class MentorTableHeadingEnum extends AbstractEnum
{
    public const EMAIL = 'email';
    public const NAME = 'name';
    public const PAYMENT_TYPE = 'payment_type';
    public const SERVICES = 'services';
    public static function getValues(): array
    {
        return [];
    }

    public static function getTranslationKeys(): array
    {
        return [
            self::EMAIL => __(sprintf('%s.%s', 'general', self::EMAIL)),
            self::NAME => __(sprintf('%s.%s', 'general', self::NAME)),
            self::PAYMENT_TYPE => __(sprintf('%s.%s', 'general', self::PAYMENT_TYPE)),
            self::SERVICES => __(sprintf('%s.%s', 'general', self::SERVICES))
        ];
    }
}
