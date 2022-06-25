<?php

namespace App\Services;

use function session;

class BusinessService
{
    private static function getBusinessModel() {
        return session()->get('business');
    }
    public static function getBusinessId()
    {
        return self::getBusinessModel()->id;
    }

    public static function getBusinessName()
    {
        return self::getBusinessModel()->name;
    }

    public static function getBusinessCell()
    {
        return self::getBusinessModel()->cell;
    }

    public static function getBusinessLandline()
    {
        return self::getBusinessModel()->landline;
    }

    public static function getBusinessemail()
    {
        return self::getBusinessModel()->email;
    }

    public static function getBusinessWebsite()
    {
        return self::getBusinessModel()->website;
    }

    public static function getBusinessFacebook()
    {
        return self::getBusinessModel()->facebook;
    }

    public static function getBusinessInstagram()
    {
        return self::getBusinessModel()->instagram;
    }

    public static function getBusinessLogo()
    {
        return self::getBusinessModel()->logo;
    }
}
