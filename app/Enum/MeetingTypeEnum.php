<?php

declare(strict_types=1);

namespace App\Enum;

use App\Models\User;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class MeetingTypeEnum extends AbstractEnum
{
    public const PHYSICAL =KeyWordEnum::PHYSICAL;
    public const ONLINE =KeyWordEnum::ONLINE;

    public static function getValues(): array
    {
        return [
            self::PHYSICAL,
            self::ONLINE
        ];
    }

    public static function getTranslationKeys(): array
    {
        return [
            self::PHYSICAL => __('general.' . self::PHYSICAL),
            self::ONLINE => __('general.' . self::ONLINE)
        ];
    }
}
