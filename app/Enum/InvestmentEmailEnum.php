<?php

declare(strict_types=1);

namespace App\Enum;


class InvestmentEmailEnum extends AbstractEnum
{
    public const SAVE_LATER = 'save_later';
    public const NEW_PITCH = 'new_pitch';

    public static function getValues(): array
    {
        return [
            self::SAVE_LATER,
            self::NEW_PITCH
        ];
    }

    public static function getTranslationKeys(): array
    {
        return [
            self::SAVE_LATER => [
                'subject' => 'Save Later',
                'description' => 'Please Click the Link below for Save the Form'
            ],
            self::NEW_PITCH => [
                'subject' => 'New Pitch',
                'description' => 'You have received a new pitch, kindly visit this link to view.'
            ],
        ];
    }
}
