<?php

declare(strict_types=1);

namespace App\Enum;

interface EnumInterface
{
    public static function isValid($enum): bool;
    public static function getKey($enum): string;
    public static function getValues(): array;
}
