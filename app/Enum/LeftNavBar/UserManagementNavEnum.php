<?php

namespace App\Enum\LeftNavBar;

use App\Enum\AbstractEnum;
use App\Enum\KeyWordEnum;

class UserManagementNavEnum extends AbstractEnum
{
    public const RELATION = KeyWordEnum::RELATION;
    public const COUNTRY = KeyWordEnum::COUNTRY;
    public const PROVINCE = KeyWordEnum::PROVINCE;
    public const DISTRICT = KeyWordEnum::DISTRICT;
    public const DEPARTMENT = KeyWordEnum::DEPARTMENT;
    public const DESIGNATION = KeyWordEnum::DESIGNATION;
    public const PROFESSION = KeyWordEnum::PROFESSION;
    public const ORGANIZATION = KeyWordEnum::ORGANIZATION;
    public const PERMISSION = KeyWordEnum::PERMISSION;
    public const SYNC_PERMISSION = KeyWordEnum::SYNC_PERMISSION;
    public const ROLE = KeyWordEnum::ROLE;
    public const USER = KeyWordEnum::USER;
    public const HR_PERSON = KeyWordEnum::HR_PERSON;

    public static function getValues(): array
    {
        return [
            self::RELATION,
            self::COUNTRY,
            self::PROVINCE,
            self::DISTRICT,
            self::DEPARTMENT,
            self::DESIGNATION,
            self::PROFESSION,
            self::ORGANIZATION,
            self::PERMISSION,
            self::SYNC_PERMISSION,
            self::ROLE,
            self::USER,
            self::HR_PERSON
        ];
    }

    public static function getIcon($key = null): ?string
    {
        $routes = [
            self::RELATION => '<i class="mdi mdi-account"></i>',
            self::COUNTRY => '<i class="mdi mdi-account"></i>',
            self::PROVINCE => '<i class="mdi mdi-account"></i>',
            self::DISTRICT => '<i class="mdi mdi-account"></i>',
            self::DEPARTMENT => '<i class="mdi mdi-account"></i>',
            self::DESIGNATION => '<i class="mdi mdi-account"></i>',
            self::PROFESSION => '<i class="mdi mdi-account"></i>',
            self::ORGANIZATION => '<i class="mdi mdi-account"></i>',
            self::PERMISSION => '<i class="mdi mdi-account"></i>',
            self::SYNC_PERMISSION => '<i class="mdi mdi-account"></i>',
            self::ROLE => '<i class="far fa-user"></i>',
            self::USER => '<i class="far fa-user"></i>',
            self::HR_PERSON => '<i class="mdi mdi-account"></i>',
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
            self::RELATION => __(sprintf('%s.%s', 'general', self::RELATION)),
            self::COUNTRY => __(sprintf('%s.%s', 'general', self::COUNTRY)),
            self::PROVINCE => __(sprintf('%s.%s', 'general', self::PROVINCE)),
            self::DISTRICT => __(sprintf('%s.%s', 'general', self::DISTRICT)),
            self::DEPARTMENT => __(sprintf('%s.%s', 'general', self::DEPARTMENT)),
            self::DESIGNATION => __(sprintf('%s.%s', 'general', self::DESIGNATION)),
            self::PROFESSION => __(sprintf('%s.%s', 'general', self::PROFESSION)),
            self::ORGANIZATION => __(sprintf('%s.%s', 'general', self::ORGANIZATION)),
            self::PERMISSION => __(sprintf('%s.%s', 'general', self::PERMISSION)),
            self::SYNC_PERMISSION => __(sprintf('%s.%s', 'general', self::SYNC_PERMISSION)),
            self::ROLE => __(sprintf('%s.%s', 'general', self::ROLE)),
            self::USER => __(sprintf('%s.%s', 'general', self::USER)),
            self::HR_PERSON => __(sprintf('%s.%s', 'general', self::HR_PERSON)),
        ];
    }

    public static function getRoute($key = null)
    {
        $routes = array(
            self::RELATION => route('dashboard.relation.index'),
            self::COUNTRY => route('dashboard.country.index'),
            self::PROVINCE => route('dashboard.province.index'),
            self::DISTRICT => route('dashboard.district.index'),
            self::DEPARTMENT => route('dashboard.department.index'),
            self::DESIGNATION => route('dashboard.designation.index'),
            self::PROFESSION => route('dashboard.profession.index'),
            self::ORGANIZATION => route('dashboard.organization.index'),
            self::HR_PERSON => route('dashboard.human-resource.index'),
            self::PERMISSION => route('dashboard.permissions.index'),
            self::SYNC_PERMISSION => route('dashboard.sync-permissions.index'),
            self::ROLE => route('dashboard.roles.index'),
            self::USER => route('dashboard.users.index'),
        );
        if (!is_null($key) && array_key_exists($key, $routes)) {
            return $routes[$key];
        } else {
            return null;
        }
    }
}
