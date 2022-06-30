<?php
declare(strict_types=1);

namespace App\Enum\TableHeadings\PackageManagement;

use App\Enum\AbstractEnum;
use function __;

class SubscriptionTableHeading extends AbstractEnum
{
    public const SUBSCRIBED_BY = 'subscribed_by';
    public const PACKAGE = 'package';
    public const PRICE = 'price';
    public const LIMIT = 'limit';
    public const EXPIRE_DATE = 'expire_date';
    public const RENEWAL_DATE = 'renewal_data';

    public static function getValues(): array
    {
        return [];
    }

    public static function getTranslationKeys(): array
    {
        return [
            self::SUBSCRIBED_BY => __(sprintf('%s.%s', 'general', self::SUBSCRIBED_BY)),
            self::PACKAGE => __(sprintf('%s.%s', 'general', self::PACKAGE)),
            self::PRICE => __(sprintf('%s.%s', 'general', self::PRICE)),
            self::LIMIT => __(sprintf('%s.%s', 'general', self::LIMIT)),
            self::EXPIRE_DATE => __(sprintf('%s.%s', 'general', self::EXPIRE_DATE)),
            self::RENEWAL_DATE => __(sprintf('%s.%s', 'general', self::RENEWAL_DATE))
        ];
    }
}
