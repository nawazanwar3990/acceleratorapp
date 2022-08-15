<?php

declare(strict_types=1);

namespace App\Enum;

use Illuminate\Support\Str;

class MeetingParentTypeEnum extends AbstractEnum
{
    public static function getValues(): array
    {
        return array();
    }

    public static function getTranslationKeys(): array
    {
        return array();
    }

    public static function getMeetingTypes(): array
    {
        return [
            [
                'Formal Meeting',
                'children' => [
                    'Education',
                    'Official',
                    'Business',
                    'Other'
                ]
            ],
            [
                'Informal Meeting',
                'children' => [
                    'Personal Get to Gather',
                    'Agenda Based',
                    'Case Based',
                    'Other'
                ]
            ], [
                'Conference'
            ]
        ];
    }
}
