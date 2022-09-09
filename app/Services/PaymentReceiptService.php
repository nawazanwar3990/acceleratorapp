<?php

namespace App\Services;

use App\Enum\RoleEnum;
use App\Enum\SubscriptionTypeEnum;
use App\Models\PaymentReceipt;

class PaymentReceiptService
{

    public function findByPagination()
    {
        $type = request()->input('type');
        $records = PaymentReceipt::where('is_processed', false)->has('subscription');
        if (PersonService::hasRole(RoleEnum::SUPER_ADMIN)) {
            $records = $records->whereHas('subscribed', function ($query) use ($type) {
                $query->whereHas('roles', function ($q) use ($type) {
                    $q->where('slug', $type);
                });
            });
        }
        if ($type == SubscriptionTypeEnum::OFFICE) {
            $records = $records->where('payment_for','office_subscription_approval');
        }
        $records = $records->with('subscription', 'subscribed');
        if (request()->has('id')) {
            $id = request()->query('id');
            $records = $records->where('id', $id);
        }
        return $records->paginate(20);
    }
}
