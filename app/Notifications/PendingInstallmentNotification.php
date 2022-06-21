<?php

namespace App\Notifications;

use App\Enum\NotificationTypeEnum;
use App\Enum\TableEnum;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Notifications\Messages\BroadcastMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;

class PendingInstallmentNotification extends Notification implements ShouldBroadcastNow
{
    use Dispatchable, InteractsWithSockets, SerializesModels, Queueable;

    protected $notification;
    private $notifier;

    public function __construct($notification, $notifier = null)
    {
        $this->notification = $notification;
        $this->notifier = $notifier;
    }

    public function via($notifiable): array
    {
        return ['broadcast', 'database'];
    }

    public function toBroadcast($notifiable): BroadcastMessage
    {
        return new BroadcastMessage([
            "test" => "nesting"
        ]);
    }

    public function broadcastOn(): Channel
    {
        return new Channel('pending.installments');
    }

    public function broadcastAs(): string
    {
        return 'PendingInstallments';
    }

    public function broadcastWith(): array
    {
        $notifications = DB::table(TableEnum::TABLE_NOTIFICATIONS)
            ->whereType(NotificationTypeEnum::PENDING_INSTALLMENT_NOTIFICATIONS)
            ->where('notifiable_id',$this->notifier)
            ->orderBy('read_at', 'asc')
            ->orderBy('created_at', 'desc')
            ->get();
        return ['notifications' => $notifications];
    }

    public function toArray($notifiable)
    {
        return $this->notification;
    }
}
