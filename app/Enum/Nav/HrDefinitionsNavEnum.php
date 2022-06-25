<?php
namespace App\Enum\Nav;

use App\Enum\AbstractEnum;
use App\Enum\KeyWordEnum;

class HrDefinitionsNavEnum extends AbstractEnum
{
    public const RELATION = KeyWordEnum::RELATION;
    public const CAST = KeyWordEnum::CAST;
    public const TAX_TYPE = KeyWordEnum::TAX_TYPE;
    public const TAX_STATUS = KeyWordEnum::TAX_STATUS;
    public const NATIONALITY = KeyWordEnum::NATIONALITY;
    public const COUNTRY = KeyWordEnum::COUNTRY;
    public const PROVINCE = KeyWordEnum::PROVINCE;
    public const DISTRICT = KeyWordEnum::DISTRICT;
    public const TEHSIL = KeyWordEnum::TEHSIL;
    public const COLONY = KeyWordEnum::COLONY;
    public const DEPARTMENT = KeyWordEnum::DEPARTMENT;
    public const DESIGNATION = KeyWordEnum::DESIGNATION;
    public const MINISTRY = KeyWordEnum::MINISTRY;
    public const PROFESSION = KeyWordEnum::PROFESSION;
    public const ORGANIZATION = KeyWordEnum::ORGANIZATION;
    public const HR_BUSINESS = KeyWordEnum::HR_BUSINESS;

    public static function getValues(): array
    {
        return [
            self::RELATION,
            self::CAST,
            self::TAX_TYPE,
            self::TAX_STATUS,
            self::NATIONALITY,
            self::COUNTRY,
            self::PROVINCE,
            self::DISTRICT,
            self::TEHSIL,
            self::COLONY,
            self::DEPARTMENT,
            self::DESIGNATION,
            self::MINISTRY,
            self::PROFESSION,
            self::ORGANIZATION,
            self::HR_BUSINESS,
        ];
    }

    public static function getIcon($key = null): ?string
    {
        $routes = [
            self::RELATION => '<i class="mdi mdi-account"></i>',
            self::CAST => '<i class="mdi mdi-account"></i>',
            self::TAX_TYPE => '<i class="mdi mdi-account"></i>',
            self::TAX_STATUS => '<i class="mdi mdi-account"></i>',
            self::NATIONALITY => '<i class="mdi mdi-account"></i>',
            self::COUNTRY => '<i class="mdi mdi-account"></i>',
            self::PROVINCE => '<i class="mdi mdi-account"></i>',
            self::DISTRICT => '<i class="mdi mdi-account"></i>',
            self::TEHSIL => '<i class="mdi mdi-account"></i>',
            self::COLONY => '<i class="mdi mdi-account"></i>',
            self::DEPARTMENT => '<i class="mdi mdi-account"></i>',
            self::DESIGNATION => '<i class="mdi mdi-account"></i>',
            self::MINISTRY => '<i class="mdi mdi-account"></i>',
            self::PROFESSION => '<i class="mdi mdi-account"></i>',
            self::ORGANIZATION => '<i class="mdi mdi-account"></i>',
            self::HR_BUSINESS => '<i class="mdi mdi-account"></i>',
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
            self::CAST => __(sprintf('%s.%s', 'general', self::CAST)),
            self::TAX_TYPE => __(sprintf('%s.%s', 'general', self::TAX_TYPE)),
            self::TAX_STATUS => __(sprintf('%s.%s', 'general', self::TAX_STATUS)),
            self::NATIONALITY => __(sprintf('%s.%s', 'general', self::NATIONALITY)),
            self::COUNTRY => __(sprintf('%s.%s', 'general', self::COUNTRY)),
            self::PROVINCE => __(sprintf('%s.%s', 'general', self::PROVINCE)),
            self::DISTRICT => __(sprintf('%s.%s', 'general', self::DISTRICT)),
            self::TEHSIL => __(sprintf('%s.%s', 'general', self::TEHSIL)),
            self::COLONY => __(sprintf('%s.%s', 'general', self::COLONY)),
            self::DEPARTMENT => __(sprintf('%s.%s', 'general', self::DEPARTMENT)),
            self::DESIGNATION => __(sprintf('%s.%s', 'general', self::DESIGNATION)),
            self::MINISTRY => __(sprintf('%s.%s', 'general', self::MINISTRY)),
            self::PROFESSION => __(sprintf('%s.%s', 'general', self::PROFESSION)),
            self::ORGANIZATION => __(sprintf('%s.%s', 'general', self::ORGANIZATION)),
            self::HR_BUSINESS => __(sprintf('%s.%s', 'general', self::HR_BUSINESS)),
        ];
    }

    public static function getRoute($key = null)
    {
        $routes = array(
            self::RELATION => route('dashboard.relation.index'),
            self::CAST => route('dashboard.cast.index'),
            self::TAX_TYPE => route('dashboard.tax-type.index'),
            self::TAX_STATUS => route('dashboard.tax-status.index'),
            self::NATIONALITY => route('dashboard.nationality.index'),
            self::COUNTRY => route('dashboard.country.index'),
            self::PROVINCE => route('dashboard.province.index'),
            self::DISTRICT => route('dashboard.district.index'),
            self::TEHSIL => route('dashboard.tehsil.index'),
            self::COLONY => route('dashboard.colony.index'),
            self::DEPARTMENT => route('dashboard.department.index'),
            self::DESIGNATION => route('dashboard.designation.index'),
            self::MINISTRY => route('dashboard.ministry.index'),
            self::PROFESSION => route('dashboard.profession.index'),
            self::ORGANIZATION => route('dashboard.organization.index'),
            self::HR_BUSINESS => route('dashboard.hr-business.index'),
        );
        if (!is_null($key) && array_key_exists($key, $routes)) {
            return $routes[$key];
        } else {
            return null;
        }
    }
}
