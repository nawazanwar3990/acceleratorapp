<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class RenewSubscription extends Notification
{
    use Queueable;

    public function __construct()
    {
        //
    }

    public function via($notifiable): array
    {
        return ['mail'];
    }

    public function toMail($notifiable): MailMessage
    {
        return (new MailMessage)
            ->line(trans('general.renew_subscription'))
            ->line(trans('general.renew_subscription_mail_message'))
            ->action('Login', url('/login'))
            ->line(trans('general.mail_footer'));
    }

    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
