<?php

declare(strict_types=1);

namespace App\Enum;

class StartUpForEnum extends AbstractEnum
{
    public const BA = 'ba';
    public const FREELANCER = 'freelancer';
    public const MENTOR = 'mentor';

    public static function getValues(): array
    {
        return array(
            self::BA,
            self::FREELANCER,
            self::MENTOR
        );
    }

    public static function getTranslationKeys(): array
    {
        return array(
            self::BA => 'Business Accelerator',
            self::FREELANCER => 'Freelancer',
            self::MENTOR => 'Mentor',
        );
    }
}
