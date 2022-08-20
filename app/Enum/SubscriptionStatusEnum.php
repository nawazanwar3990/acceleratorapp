<?php

declare(strict_types=1);

namespace App\Enum;
class SubscriptionStatusEnum extends AbstractEnum
{
    public const PENDING = 'pending';
    public const APPROVED = 'approved';
    public const DECLINED = 'declined';
    public const RENEW = 'renew';

    public static function getValues(): array
    {
        return array(
            self::PENDING,
            self::APPROVED,
            self::DECLINED,
            self::RENEW,
        );
    }

    public static function getTranslationKeys(): array
    {
        return array(
            self::PENDING => 'Pending',
            self::APPROVED => 'Approved',
            self::DECLINED => 'Declined',
            self::RENEW => 'Renew'
        );
    }
}
