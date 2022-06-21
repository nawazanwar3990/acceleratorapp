<?php
declare(strict_types=1);

namespace App\Enum\TableHeadings\RealEstate;

use App\Enum\AbstractEnum;

class Employee extends AbstractEnum
{
    public const NAME = 'name';
    public const CNIC = 'cnic';
    public const CONTACT = 'contact';
    public const SALARY_TYPE = 'salary_type';
    public const DEPARTMENT = 'department';
    public const DESIGNATION = 'designation';

    /**
     * @inheritDoc
     */
    public static function getValues(): array
    {
        return [];
    }

    /**
     * @inheritDoc
     */
    public static function getTranslationKeys(): array
    {
        return [
            self::NAME => __(sprintf('%s.%s', 'general', self::NAME)),
            self::CNIC => __(sprintf('%s.%s', 'general', self::CNIC)),
            self::CONTACT => __(sprintf('%s.%s', 'general', self::CONTACT)),
            self::SALARY_TYPE => __(sprintf('%s.%s', 'general', self::SALARY_TYPE)),
            self::DEPARTMENT => __(sprintf('%s.%s', 'general', self::DEPARTMENT)),
            self::DESIGNATION => __(sprintf('%s.%s', 'general', self::DESIGNATION)),
        ];
    }
}
