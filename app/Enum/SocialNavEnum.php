<?php

namespace App\Enum;


use App\Enum\AbstractEnum;

class SocialNavEnum extends AbstractEnum
{
    public const FACEBOOK = KeyWordEnum::FACEBOOK;
    public const TWITTER = KeyWordEnum::TWITTER;
    public const INSTAGRAM = KeyWordEnum::INSTAGRAM;
    public const LINKEDIN = KeyWordEnum::LINKEDIN;
    public const YOUTUBE = KeyWordEnum::YOUTUBE;
    public const WHATSAPP = KeyWordEnum::WHATSAPP;

    public static function getValues(): array
    {
        return [
            self::FACEBOOK,
            self::TWITTER,
            self::INSTAGRAM,
            self::LINKEDIN,
            self::YOUTUBE,
            self::WHATSAPP,
        ];
    }

    public static function getIcon($key = null): ?string
    {
        $routes = [
            self::FACEBOOK => '<i class="bx bxl-facebook"></i>',
            self::TWITTER => '<i class="bx bxl-twitter"></i>',
            self::INSTAGRAM => '<i class="bx bxl-instagram"></i>',
            self::LINKEDIN => '<i class="bx bxl-linkedin"></i>',
            self::YOUTUBE => '<i class="bx bxl-youtube"></i>',
            self::WHATSAPP => '<i class="bx bxl-whatsapp"></i>',
        ];
        if (!is_null($key) && array_key_exists($key, $routes)) {
            return $routes[$key];
        } else {
            return null;
        }
    }

    public static function getTranslationKeys(): array
    {
        return [
            self::FACEBOOK => __(sprintf('%s.%s', 'general', self::FACEBOOK)),
            self::TWITTER => __(sprintf('%s.%s', 'general', self::TWITTER)),
            self::INSTAGRAM => __(sprintf('%s.%s', 'general', self::INSTAGRAM)),
            self::LINKEDIN => __(sprintf('%s.%s', 'general', self::LINKEDIN)),
            self::YOUTUBE => __(sprintf('%s.%s', 'general', self::YOUTUBE)),
            self::WHATSAPP => __(sprintf('%s.%s', 'general', self::WHATSAPP)),
        ];
    }

}
