<?php

namespace App\Services;

use App\Enum\PaymentForEnum;
use App\Enum\RoleEnum;
use App\Enum\SubscriptionTypeEnum;
use App\Models\PaymentReceipt;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Auth;

class PaymentReceiptService
{

    public function findByPagination(): LengthAwarePaginator
    {
        $type = request()->input('type');
        $records = PaymentReceipt::with(
            'package_subscription',
            'plan_subscription',
            'subscribed'
        )->orderBy('id', 'desc');
        if (PersonService::hasRole(RoleEnum::SUPER_ADMIN)) {
            $records = $records->where('is_processed', false)
                ->whereHas('subscribed', function ($query) use ($type) {
                    $query->whereHas('roles', function ($q) use ($type) {
                        $q->where('slug', $type);
                    });
                });
        }
        if ($type == SubscriptionTypeEnum::OFFICE && PersonService::hasRole(RoleEnum::BUSINESS_ACCELERATOR)) {
            $records = $records->where('is_processed', false)
                ->where('owner_id', Auth::id());
        }
        if ($type == SubscriptionTypeEnum::PACKAGE && PersonService::hasRole(RoleEnum::BUSINESS_ACCELERATOR)) {
            $records = $records
                ->where('subscribed_id', Auth::id())
                ->whereIn('is_processed', [true, false])
                ->whereIn('payment_for', [PaymentForEnum::PACKAGE_APPROVAL, PaymentForEnum::PACKAGE_EXPIRE]);
        }
        if (request()->has('id')) {
            $id = request()->query('id');
            $records = $records->where('id', $id);
        }
        return $records->paginate(20);
    }
}
