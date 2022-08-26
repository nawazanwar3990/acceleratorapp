<?php

declare(strict_types=1);

namespace App\Enum;


class SettingEnum extends AbstractEnum
{



    public const SITE_FAVICON = 'site_favicon';
    public const SITE_LOGO = 'site_logo';
    public const EMAIL_HEADER = 'email_header';
    public const EMAIL_FOOTER = 'email_footer';
    public const ACCOUNT_VERIFICATION_EMAIL_HEADING = 'account_verification_email_heading';
    public const ACCOUNT_VERIFICATION_EMAIL_DESCRIPTION = 'account_verification_email_description';
    public const PACKAGE_APPROVED_EMAIL_HEADING = 'package_approved_email_heading';
    public const PACKAGE_APPROVED_EMAIL_DESCRIPTION = 'package_approved_email_description';
    public const PACKAGE_DECLINED_EMAIL_HEADING = 'package_declined_email_heading';
    public const PACKAGE_DECLINED_EMAIL_DESCRIPTION = 'package_declined_email_description';
    public const PACKAGE_CREATED = 'package_created';


    public static function getValues(): array
    {
        return [
            self::SITE_FAVICON,
            self::SITE_LOGO,
            self::EMAIL_HEADER,
            self::EMAIL_FOOTER,
            self::ACCOUNT_VERIFICATION_EMAIL_HEADING,
            self::ACCOUNT_VERIFICATION_EMAIL_DESCRIPTION,
            self::PACKAGE_APPROVED_EMAIL_HEADING,
            self::PACKAGE_APPROVED_EMAIL_DESCRIPTION,
            self::PACKAGE_DECLINED_EMAIL_HEADING,
            self::PACKAGE_DECLINED_EMAIL_DESCRIPTION,
            self::PACKAGE_CREATED,
        ];
    }

    public static function getTranslationKeys(): array
    {
        return [
            self::SITE_FAVICON => __('general.' . self::SITE_FAVICON),
            self::SITE_LOGO => __('general.' . self::SITE_LOGO),
            self::EMAIL_HEADER => __('general.' . self::EMAIL_HEADER),
            self::EMAIL_FOOTER => __('general.' . self::EMAIL_FOOTER),
            self::ACCOUNT_VERIFICATION_EMAIL_HEADING => __('general.' . self::ACCOUNT_VERIFICATION_EMAIL_HEADING),
            self::ACCOUNT_VERIFICATION_EMAIL_DESCRIPTION => __('general.' . self::ACCOUNT_VERIFICATION_EMAIL_DESCRIPTION),
            self::PACKAGE_APPROVED_EMAIL_HEADING => __('general.' . self::PACKAGE_APPROVED_EMAIL_HEADING),
            self::PACKAGE_APPROVED_EMAIL_DESCRIPTION => __('general.' . self::PACKAGE_APPROVED_EMAIL_DESCRIPTION),
            self::PACKAGE_DECLINED_EMAIL_HEADING => __('general.' . self::PACKAGE_DECLINED_EMAIL_HEADING),
            self::PACKAGE_DECLINED_EMAIL_DESCRIPTION => __('general.' . self::PACKAGE_DECLINED_EMAIL_DESCRIPTION),
            self::PACKAGE_CREATED => __('general.' . self::PACKAGE_CREATED),
        ];


    }
}
