<?php

declare(strict_types=1);

namespace App\Enum;

use App\Models\User;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class AcceleratorTypeEnum extends AbstractEnum
{
    public const COMPANY ='company';
    public const INDIVIDUAL ='individual';

    public static function getValues(): array
    {
        return [
            self::COMPANY,
            self::INDIVIDUAL
        ];
    }

    public static function getTranslationKeys(): array
    {
        return [
            self::COMPANY => __('general.' . self::COMPANY),
            self::INDIVIDUAL => __('general.' . self::INDIVIDUAL)
        ];
    }
}
