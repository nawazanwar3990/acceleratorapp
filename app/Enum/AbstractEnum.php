<?php

declare(strict_types=1);

namespace App\Enum;

abstract class AbstractEnum implements EnumInterface
{
    public static function isValid($enum): bool
    {
        return in_array($enum, static::getValues(), true);
    }
    public static function getKey($enum): string
    {
        return array_search($enum, static::getValues());
    }
    public static function getValuesForForm(?array $values = null): array
    {
        if(null === $values){
            $values = static::getValues();
        }

        $res = [];
        foreach ($values as $value) {
            $res[static::getTranslationKeyBy($value)] = $value;
        }

        return $res;
    }
    public static function getTranslationKeyBy($enum)
    {
        return (array_key_exists($enum, static::getTranslationKeys())) ? static::getTranslationKeys()[$enum] : '';
    }
    public static function getTranslationKeyOfArrayBy($enum)
    {
        return (array_key_exists($enum, static::getTranslationKeys())) ? static::getTranslationKeys()[$enum] : array();
    }
    abstract public static function getValues(): array;
    abstract public static function getTranslationKeys(): array;
}
