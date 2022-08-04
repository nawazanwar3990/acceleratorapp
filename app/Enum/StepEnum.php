<?php

declare(strict_types=1);

namespace App\Enum;

use App\Enum\AbstractEnum;

class StepEnum extends AbstractEnum
{
    public const STEP1 = 'step1';
    public const STEP2 = 'step2';
    public const STEP3 = 'step3';
    public const STEP4 = 'step4';
    public const STEP5 = 'step5';
    public const PRINT = 'print';
    public const PACKAGES = 'packages';
    public const SERVICES = 'services';
    public const USER_INFO = 'user-info';

    public static function getValues(): array
    {
        return array(
            self::USER_INFO,
            self::PACKAGES,
            self::SERVICES,
            self::STEP1,
            self::STEP1,
            self::STEP3,
            self::STEP4,
            self::STEP5,
            self::PRINT
        );
    }

    public static function getTranslationKeys(): array
    {
        return array();
    }
}
