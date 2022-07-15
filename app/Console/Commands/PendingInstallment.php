<?php

namespace App\Console\Commands;

use App\Enum\NotificationTypeEnum;
use App\Models\Users\User;
use App\Models\Notification;
use App\Notifications\PendingInstallmentNotification;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class PendingInstallment extends Command
{
    protected $signature = 'pending:installment';
    protected $description = 'This Code is related to the pending Installments Alerts';

    public function handle()
    {
        Log::info("Yes called");
        $notifier = User::getNotifier();
        $this->manageInstallments($notifier);
        broadcast(new PendingInstallmentNotification('success', $notifier->id));
    }

    private function manageInstallments($notifier)
    {
        /*'is query ko modify kerna he ap ne apny hisab se bai....'*/

        /*$model = OwnerShipAllocation::with('applicant');
        $dates = $model->pluck('installment_date_in_between', 'id');
        $current_date = Carbon::parse(Carbon::now()->format('m-d-Y'));
        foreach ($dates as $key => $date) {
            $range = explode(" - ", $date);
            $start_date = Carbon::createFromFormat('d-m-Y', $range[0]);
            $last_date = Carbon::createFromFormat('d-m-Y', $range[1]);
            if ($current_date->between($start_date, $last_date)) {

                $start_date_message = $start_date->format('m-d-Y');
                $end_date_message = $last_date->format('m-d-Y');

                $model = $model->findOrFail($key);
                $amount = $model->per_installment_cost;
                $applicant_name = GeneralService::getPersonName($model->applicant);
                $message = "{$applicant_name} pending installment amount is {$amount} but the due dates is form {$start_date_message} to {$end_date_message}";
                $this->notify($notifiable, $message);
            }
        }*/


        $message = "{username} pending installment amount is {12} but the due dates is form {start_date} to {end_date}";
        $this->notify($notifier, $message);
    }

    private function notify($notifier, $message)
    {
        Notification::where('type', NotificationTypeEnum::PENDING_INSTALLMENT_NOTIFICATIONS)
            ->where('notifiable_id', $notifier->id)
            ->delete();
        $notifier->notify(new PendingInstallmentNotification($message, $notifier));
    }
}
