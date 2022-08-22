<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class VerifyEmailLink extends Notification
{
    use Queueable;

    public function __construct()
    {
    }

    public function via($notifiable): array
    {
        return ['mail'];
    }

    public function toMail($notifiable): MailMessage
    {
        return (new MailMessage)
            ->line('Activate Your Account')
            ->action('Click to Activate', url('user/verify', $notifiable->verifyUser->token))
            ->line(trans('general.mail_footer'));
    }

    public function toArray($notifiable): array
    {
        return [
        ];
    }
}
