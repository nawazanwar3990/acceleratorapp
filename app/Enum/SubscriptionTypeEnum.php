<?php

declare(strict_types=1);

namespace App\Enum;

use App\Enum\AbstractEnum;

class SubscriptionTypeEnum extends AbstractEnum
{
    public const PACKAGE = KeyWordEnum::PACKAGE;
    public const PLAN = KeyWordEnum::PLAN;
    public const OFFICE = KeyWordEnum::OFFICE;

    public static function getValues(): array
    {
        return array(
            self::PACKAGE,
            self::PLAN
        );
    }

    public static function getBAScriptionTypes(): array
    {
        return array(
            self::OFFICE => __(sprintf('%s.%s', 'general', 'office')),
        );
    }

    public static function getTranslationKeys(): array
    {
        return array(
            self::PACKAGE => __(sprintf('%s.%s', 'general', self::PACKAGE)),
            self::PLAN => __(sprintf('%s.%s', 'general', self::PLAN)),
        );
    }
}
