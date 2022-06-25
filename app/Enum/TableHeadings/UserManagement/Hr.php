<?php
declare(strict_types=1);

namespace App\Enum\TableHeadings\UserManagement;

use App\Enum\AbstractEnum;
use function __;

class Hr extends AbstractEnum
{
    public const HR_NO = 'hr_no';
    public const NAME = 'name';
    public const CNIC = 'cnic';
    public const CONTACT = 'contact';
    public const ADDRESS = 'address';

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
            self::HR_NO => __(sprintf('%s.%s', 'general', self::HR_NO)),
            self::NAME => __(sprintf('%s.%s', 'general', self::NAME)),
            self::CNIC => __(sprintf('%s.%s', 'general', self::CNIC)),
            self::CONTACT => __(sprintf('%s.%s', 'general', self::CONTACT)),
            self::ADDRESS => __(sprintf('%s.%s', 'general', self::ADDRESS)),
        ];
    }
}
