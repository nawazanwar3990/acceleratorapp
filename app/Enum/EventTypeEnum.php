<?php

declare(strict_types=1);

namespace App\Enum;

use Illuminate\Support\Str;

class EventTypeEnum extends AbstractEnum
{
    public static function getValues(): array
    {
        return array();
    }

    public static function getTranslationKeys(): array
    {
        return array();
    }

    public static function getEventTypesArray(): array
    {
        return [
            [
                'Professional',
                'children' => [
                    'Education',
                    'Business',
                    'Workshop',
                    'Training',
                    'Other'
                ]
            ],
            [
                'Entertainment',
                'children' => [
                    'Music Concert',
                    'Art & Craft',
                    'Game Show',
                    'Other'
                ]
            ], [
                'Charity Based',
                'children' => [
                    'Fund',
                    'Nobel Case',
                    'Helping HomeLess People',
                    'Other',
                ]
            ]
        ];
    }
}
