<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class VerifyEmailLink extends Notification
{
    use Queueable;

    private string $token;

    public function __construct($token)
    {
        $this->token = $token;
    }

    public function via($notifiable): array
    {
        return ['mail'];
    }

    public function toMail($notifiable): MailMessage
    {
        return (new MailMessage)
            ->line('Activate Your Account')
            ->action('Click to Activate', route('user.verify', $this->token))
            ->line(trans('general.mail_footer'))
            ->from(env('MAIL_FROM_ADDRESS'));
    }

    public function toArray($notifiable): array
    {
        return [
        ];
    }
}
