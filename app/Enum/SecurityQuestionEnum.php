<?php

declare(strict_types=1);

namespace App\Enum;

use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class SecurityQuestionEnum extends AbstractEnum
{
    public const WHAT_IS_YOUR_DATE_OF_BIRTH ='what_is_your_date_of_birth';
    public const WHAT_WAS_YOUR_FAVORITE_SCHOOL_TEACHER_NAME ='what_us_your_favorite_school_teacher_name';
    public const WHATS_YOU_FAVORITE_MOVIE ='whats_you_favorite_movie';
    public const WHAT_WAS_YOUR_FIRST_CAR ='what_was_your_first_car';
    public const WHAT_IS_YOUR_ASTROLOGICAL_SIGN ='What_is_your_astrological_sign';

    public static function getValues(): array
    {
        return [
            self::WHAT_IS_YOUR_DATE_OF_BIRTH,
            self::WHAT_WAS_YOUR_FAVORITE_SCHOOL_TEACHER_NAME,
            self::WHATS_YOU_FAVORITE_MOVIE,
            self::WHAT_WAS_YOUR_FIRST_CAR,
            self::WHAT_IS_YOUR_ASTROLOGICAL_SIGN
        ];
    }

    public static function getTranslationKeys(): array
    {
        return [
            self::WHAT_IS_YOUR_DATE_OF_BIRTH => __('general.' . self::WHAT_IS_YOUR_DATE_OF_BIRTH),
            self::WHAT_WAS_YOUR_FAVORITE_SCHOOL_TEACHER_NAME => __('general.' . self::WHAT_WAS_YOUR_FAVORITE_SCHOOL_TEACHER_NAME),
            self::WHATS_YOU_FAVORITE_MOVIE => __('general.' . self::WHATS_YOU_FAVORITE_MOVIE),
            self::WHAT_WAS_YOUR_FIRST_CAR => __('general.' . self::WHAT_WAS_YOUR_FIRST_CAR),
            self::WHAT_IS_YOUR_ASTROLOGICAL_SIGN => __('general.' . self::WHAT_IS_YOUR_ASTROLOGICAL_SIGN),
        ];
    }
}
