<?php

declare(strict_types=1);

namespace App\Enum;


class InvestmentEmailEnum extends AbstractEnum
{
    public const SAVE_LATER = 'save_later';

    public static function getValues(): array
    {
        return [
            self::SAVE_LATER
        ];
    }

    public static function getTranslationKeys(): array
    {
        return [
            self::SAVE_LATER => [
                'subject' => 'Save Later',
                'description' => 'Please Click the Link below for Save the Form'
            ],
        ];
    }
}
