<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class GlobalEmailNotification extends Notification
{
    use Queueable;

    private string|null $subject = null;
    private string|null $link = null;
    private string|null $description = null;

    public function __construct(
        $subject,
        $link,
        $description
    )
    {
        $this->subject = $subject;
        $this->link = $link;
        $this->description = $description;
    }
    public function via($notifiable): array
    {
        return ['mail'];
    }
    public function toMail($notifiable): MailMessage
    {
        return (new MailMessage)
                    ->line($this->subject)
                    ->action($this->link)
                    ->line($this->description);
    }
    public function toArray($notifiable)
    {
        return [
        ];
    }
}
