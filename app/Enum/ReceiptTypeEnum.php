<?php

declare(strict_types=1);

namespace App\Enum;

class ReceiptTypeEnum extends AbstractEnum
{
    public const PACKAGE = 'package';
    public const PLAN = 'plan';

    public static function getValues(): array
    {
        return [
            self::PACKAGE,
            self::PLAN
        ];
    }

    public static function getTranslationKeys(): array
    {
        return [
            self::PACKAGE => __('general.' . self::PACKAGE),
            self::PLAN => __('general.' . self::PLAN)
        ];
    }
}
