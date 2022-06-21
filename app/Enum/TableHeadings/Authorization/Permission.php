<?php

declare(strict_types=1);

namespace App\Enum\TableHeadings\Authorization;

use App\Enum\AbstractEnum;

class Permission extends AbstractEnum
{


    public const FUNCTION_NAME ='function_name';
    public const VIEW ='view';
    public const CREATE ='create';
    public const UPDATE ='update';
    public const DELETE ='delete';

    public static function getValues(): array
    {
        return [

        ];
    }

    public static function getTranslationKeys(): array
    {
        return [
            self::FUNCTION_NAME => __(sprintf('%s.%s', 'general', self::FUNCTION_NAME)),
            self::VIEW => __(sprintf('%s.%s', 'general', self::VIEW)),
            self::CREATE => __(sprintf('%s.%s', 'general', self::CREATE)),
            self::DELETE => __(sprintf('%s.%s', 'general', self::DELETE)),
            self::UPDATE => __(sprintf('%s.%s', 'general', self::UPDATE)),
        ];
    }
}
