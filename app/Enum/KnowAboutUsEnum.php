<?php

declare(strict_types=1);

namespace App\Enum;

use App\Enum\AbstractEnum;

class KnowAboutUsEnum extends AbstractEnum
{
    public const SEARCH_ENGINE = 'search_engine';
    public const GOOGLE_ADS = 'google_ads';
    public const FACEBOOK_ADS = 'facebook_ads';
    public const YOUTUBE_ADS = 'youtube_ads';
    public const OTHER_PAID_SOCIAL_MEDIA_ADVERTISING = 'other_paid_social_media_advertising';
    public const FACEBOOK_POST_GROUP = 'facebook_post_group';
    public const TWITTER_POST = 'twitter_post';
    public const INSTAGRAM_POST_STORY = 'instagram_post_story';
    public const OTHER_SOCIAL_MEDIA = 'other_social_media';
    public const EMAIL = 'email';
    public const RADIO = 'radio';
    public const TV = 'tv';
    public const NEWSPAPER = 'newspaper';
    public const WORD_OF_MOUTH = 'word_of-mouth';
    public const FRIENDS = 'friends';
    public const OTHER = 'other';

    public static function getValues(): array
    {
        return array(
            self::SEARCH_ENGINE,
            self::GOOGLE_ADS,
            self::FACEBOOK_ADS,
            self::YOUTUBE_ADS,
            self::OTHER_PAID_SOCIAL_MEDIA_ADVERTISING,
            self::FACEBOOK_POST_GROUP,
            self::TWITTER_POST,
            self::INSTAGRAM_POST_STORY,
            self::OTHER_SOCIAL_MEDIA,
            self::EMAIL,
            self::RADIO,
            self::TV,
            self::NEWSPAPER,
            self::WORD_OF_MOUTH,
            self::FRIENDS,
            self::OTHER
        );
    }

    public static function getTranslationKeys(): array
    {
        return array(
            self::SEARCH_ENGINE => __(sprintf('%s.%s', 'general', self::SEARCH_ENGINE)),
            self::GOOGLE_ADS => __(sprintf('%s.%s', 'general', self::GOOGLE_ADS)),
            self::FACEBOOK_ADS => __(sprintf('%s.%s', 'general', self::FACEBOOK_ADS)),
            self::YOUTUBE_ADS => __(sprintf('%s.%s', 'general', self::YOUTUBE_ADS)),
            self::OTHER_PAID_SOCIAL_MEDIA_ADVERTISING => __(sprintf('%s.%s', 'general', self::OTHER_PAID_SOCIAL_MEDIA_ADVERTISING)),
            self::FACEBOOK_POST_GROUP => __(sprintf('%s.%s', 'general', self::FACEBOOK_POST_GROUP)),
            self::TWITTER_POST => __(sprintf('%s.%s', 'general', self::TWITTER_POST)),
            self::INSTAGRAM_POST_STORY => __(sprintf('%s.%s', 'general', self::INSTAGRAM_POST_STORY)),
            self::OTHER_SOCIAL_MEDIA => __(sprintf('%s.%s', 'general', self::OTHER_SOCIAL_MEDIA)),
            self::EMAIL => __(sprintf('%s.%s', 'general', self::EMAIL)),
            self::RADIO => __(sprintf('%s.%s', 'general', self::RADIO)),
            self::TV => __(sprintf('%s.%s', 'general', self::TV)),
            self::NEWSPAPER => __(sprintf('%s.%s', 'general', self::NEWSPAPER)),
            self::WORD_OF_MOUTH => __(sprintf('%s.%s', 'general', self::WORD_OF_MOUTH)),
            self::FRIENDS => __(sprintf('%s.%s', 'general', self::FRIENDS)),
            self::OTHER => __(sprintf('%s.%s', 'general', self::OTHER)),


        );
    }
}
