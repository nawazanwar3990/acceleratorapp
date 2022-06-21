<?php

declare(strict_types=1);

namespace App\Enum;

use App\Enum\AbstractEnum;

class MethodEnum extends AbstractEnum
{
    public const GET = 'GET';
    public const POST = 'POST';
    public const PUT = 'PUT';
    public const PATCH = 'PATCH';
    public const DELETE = 'DELETE';

    public static function getValues(): array
    {
        return array(
            self::GET,
            self::POST,
            self::PUT,
            self::PATCH,
            self::DELETE
        );
    }

    public static function getTranslationKeys(): array
    {
        return array(

        );
    }
}
