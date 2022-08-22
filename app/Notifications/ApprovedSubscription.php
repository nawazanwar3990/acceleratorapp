<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ApprovedSubscription extends Notification
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
            ->line(trans('general.approved_subscription'))
            ->line(trans('general.approved_subscription_mail_message'))
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
