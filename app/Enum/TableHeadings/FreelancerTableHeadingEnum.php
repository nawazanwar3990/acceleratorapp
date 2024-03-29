<?php
declare(strict_types=1);

namespace App\Enum\TableHeadings;

use App\Enum\AbstractEnum;
use function __;

class FreelancerTableHeadingEnum extends AbstractEnum
{
    public const EMAIL = 'email';
    public const NAME = 'name';
    public const TYPE = 'type';
    public const SUBSCRIPTION_STATUS = 'subscription_status';
    public const SERVICES = 'services';

    public static function getValues(): array
    {
        return [];
    }

    public static function getTranslationKeys(): array
    {
        return [
            self::EMAIL => __(sprintf('%s.%s', 'general', self::EMAIL)),
            self::NAME => __(sprintf('%s.%s', 'general', self::NAME)),
            self::TYPE => __(sprintf('%s.%s', 'general', self::TYPE)),
            self::SUBSCRIPTION_STATUS => __(sprintf('%s.%s', 'general', self::SUBSCRIPTION_STATUS)),
            self::SERVICES => __(sprintf('%s.%s', 'general', self::SERVICES)),
        ];
    }
}
