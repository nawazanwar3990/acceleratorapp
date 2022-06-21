<?php

declare(strict_types=1);
namespace App\Enum;

class NotificationTypeEnum extends AbstractEnum
{
    public const PENDING_INSTALLMENT_NOTIFICATIONS = 'App\Notifications\PendingInstallmentNotification';

    public static function getValues(): array
    {
        return [];
    }

    public static function getTranslationKeys(): array
    {
        return [

        ];
    }
}
