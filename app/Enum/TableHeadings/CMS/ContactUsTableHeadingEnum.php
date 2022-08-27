<?php
declare(strict_types=1);

namespace App\Enum\TableHeadings\CMS;

use App\Enum\AbstractEnum;
use function __;

class ContactUsTableHeadingEnum extends AbstractEnum
{
    public const NAME = 'name';
    public const EMAIL = 'email';
    public const PHONE = 'phone';
    public const MESSAGE = 'message';


    public static function getValues(): array
    {
        return [];
    }

    public static function getTranslationKeys(): array
    {
        return [
            self::NAME => __(sprintf('%s.%s', 'general', self::NAME)),
            self::EMAIL => __(sprintf('%s.%s', 'general', self::EMAIL)),
            self::PHONE => __(sprintf('%s.%s', 'general', self::PHONE)),
            self::MESSAGE => __(sprintf('%s.%s', 'general', self::MESSAGE)),
        ];
    }
}
