<?php

declare(strict_types=1);

namespace App\Enum;
class AbilityEnum extends AbstractEnum
{
    public const VIEW = 'view';
    public const CREATE = 'create';
    public const UPDATE = 'update';
    public const DELETE = 'delete';

    public static function getValues(): array
    {
        return array(
            self::VIEW,
            self::CREATE,
            self::UPDATE,
            self::DELETE
        );
    }

    public static function getTranslationKeys(): array
    {
        return array();
    }
}
