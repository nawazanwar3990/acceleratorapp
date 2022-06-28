<?php

declare(strict_types=1);

namespace App\Enum;

use App\Enum\AbstractEnum;

class PackageTypeEnum extends AbstractEnum
{
    public const SUPER_ADMIN_PACKAGE = 'super-admin-package';
    public const ADMIN_PACKAGE = 'admin-package';

    public static function getValues(): array
    {
        return array(
            self::SUPER_ADMIN_PACKAGE,
            self::ADMIN_PACKAGE
        );
    }

    public static function getTranslationKeys(): array
    {
        return array(
            self::SUPER_ADMIN_PACKAGE => __(sprintf('%s.%s', 'general', self::SUPER_ADMIN_PACKAGE)),
            self::ADMIN_PACKAGE => __(sprintf('%s.%s', 'general', self::ADMIN_PACKAGE))

        );
    }
}
