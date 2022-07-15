<?php
declare(strict_types=1);

namespace App\Enum\TableHeadings\SubscriptionManagement;

use App\Enum\AbstractEnum;
use function __;

class SubscriptionTableHeading extends AbstractEnum
{
    public const SUBSCRIPTION_TYPE = 'subscription_type';
    public const SUBSCRIBED_BY = 'subscribed_by';
    public const SUBSCRIPTION_FOR = 'subscription_for';
    public const PRICE = 'price';
    public const EXPIRE_DATE = 'expire_date';
    public const RENEWAL_DATE = 'renewal_data';

    public static function getValues(): array
    {
        return [];
    }

    public static function getTranslationKeys(): array
    {
        return [
            self::SUBSCRIPTION_TYPE => __(sprintf('%s.%s', 'general', self::SUBSCRIPTION_TYPE)),
            self::SUBSCRIBED_BY => __(sprintf('%s.%s', 'general', self::SUBSCRIBED_BY)),
            self::SUBSCRIPTION_FOR => __(sprintf('%s.%s', 'general', self::SUBSCRIPTION_FOR)),
            self::PRICE => __(sprintf('%s.%s', 'general', self::PRICE)),
            self::EXPIRE_DATE => __(sprintf('%s.%s', 'general', self::EXPIRE_DATE)),
            self::RENEWAL_DATE => __(sprintf('%s.%s', 'general', self::RENEWAL_DATE))
        ];
    }
}
