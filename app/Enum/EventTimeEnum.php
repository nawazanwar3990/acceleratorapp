<?php

declare(strict_types=1);

namespace App\Enum;

use App\Models\User;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class EventTimeEnum extends AbstractEnum
{
    public const DAY =KeyWordEnum::DAY;
    public const NIGHT =KeyWordEnum::NIGHT;
    public const DAY_AND_NIGHT =KeyWordEnum::DAY_AND_NIGHT;

    public static function getValues(): array
    {
        return [
            self::DAY,
            self::NIGHT,
            self::DAY_AND_NIGHT
        ];
    }

    public static function getTranslationKeys(): array
    {
        return [
            self::DAY => __('general.' . self::DAY),
            self::NIGHT => __('general.' . self::NIGHT),
            self::DAY_AND_NIGHT => __('general.' . self::DAY_AND_NIGHT)
        ];
    }
}
