<?php

declare(strict_types=1);

namespace App\Enum;

use App\Enum\AbstractEnum;

class PaymentTypeEnum extends AbstractEnum
{
    public const ONLINE = 'online';
    public const OFFLINE = 'offline';
    public static function getValues(): array
    {
        return array(
            self::ONLINE,
            self::OFFLINE
        );
    }

    public static function getTranslationKeys(): array
    {
        return array(
            self::ONLINE => __(sprintf('%s.%s', 'general', self::ONLINE)),
            self::OFFLINE => __(sprintf('%s.%s', 'general', self::OFFLINE)),

        );
    }
}
