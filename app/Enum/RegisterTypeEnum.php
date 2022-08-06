<?php

declare(strict_types=1);

namespace App\Enum;

use App\Enum\AbstractEnum;

class RegisterTypeEnum extends AbstractEnum
{
    public const BUSINESS_ACCELERATOR = 'business_accelerator';
    public const FREELANCER_SERVICE_PROVIDER_COMPANY = 'freelancer';
    public const CUSTOMER = 'customer';
    public const MENTOR = 'mentor';

    public static function getValues(): array
    {
        return array(
            self::BUSINESS_ACCELERATOR,
            self::FREELANCER_SERVICE_PROVIDER_COMPANY,
            self::CUSTOMER,
            self::MENTOR
        );
    }
    public static function getRoute($key){
        $images = array(
            self::BUSINESS_ACCELERATOR => route('website.ba.create'),
            self::FREELANCER_SERVICE_PROVIDER_COMPANY => route('website.freelancers.create'),
            self::CUSTOMER => route('website.customers.create',[StepEnum::USER_INFO]),
            self::MENTOR => route('website.mentors.create',[StepEnum::USER_INFO]),
        );
        if (!is_null($key) && array_key_exists($key, $images)) {
            return $images[$key];
        } else {
            return null;
        }
    }
    public static function getImage($key)
    {
        $images = array(
            self::BUSINESS_ACCELERATOR => asset('images/icon/business_accelerator.png'),
            self::FREELANCER_SERVICE_PROVIDER_COMPANY => asset('images/icon/freelancer.png'),
            self::CUSTOMER => asset('images/icon/customer.png'),
            self::MENTOR => asset('images/icon/mentor.png')
        );
        if (!is_null($key) && array_key_exists($key, $images)) {
            return $images[$key];
        } else {
            return null;
        }
    }
    public static function getTranslationKeys(): array
    {
        return array(
            self::BUSINESS_ACCELERATOR => __(sprintf('%s.%s', 'general.register_types', self::BUSINESS_ACCELERATOR)),
            self::FREELANCER_SERVICE_PROVIDER_COMPANY => __(sprintf('%s.%s', 'general.register_types', self::FREELANCER_SERVICE_PROVIDER_COMPANY)),
            self::MENTOR => __(sprintf('%s.%s', 'general.register_types', self::MENTOR)),
            self::CUSTOMER => __(sprintf('%s.%s', 'general.register_types', self::CUSTOMER)),
        );
    }
}
