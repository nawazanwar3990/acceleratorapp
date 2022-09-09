<?php

namespace App\Services;

use App\Enum\RoleEnum;
use App\Enum\SubscriptionTypeEnum;
use App\Models\Subscription;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Auth;

class SubscriptionService
{
    public function getListByPagination($type): LengthAwarePaginator
    {
        $id = request()->query('id');
        $subscription_for = request()->query('subscription_for');

        $subscriptions = Subscription::with('receipt')
            ->orderBy('id', 'DESC');

        if ($type) {
            $subscriptions = $subscriptions->where('subscription_type', $type);
        }
        if ($id) {
            $subscriptions = $subscriptions->where('id', $id);
        }

        if (PersonService::hasRole(RoleEnum::SUPER_ADMIN)) {
            $subscriptions = $subscriptions->whereHas('subscribed', function ($query) use ($subscription_for) {
                $query->whereHas('roles', function ($q) use ($subscription_for) {
                    $q->where('slug', $subscription_for);
                });
            });
        }
        if ($type == SubscriptionTypeEnum::PACKAGE) {
            if (PersonService::hasRole(RoleEnum::BUSINESS_ACCELERATOR) || PersonService::hasRole(RoleEnum::FREELANCER) || PersonService::hasRole(RoleEnum::MENTOR)
            ) {
                $subscriptions = $subscriptions->where('subscribed_id', Auth::id());
            }
        }
        if ($type == SubscriptionTypeEnum::PLAN) {
            if (PersonService::hasRole(RoleEnum::BUSINESS_ACCELERATOR)) {
                $subscriptions = $subscriptions->where('owner_id', Auth::id());
            }
            if (PersonService::hasRole(RoleEnum::CUSTOMER)) {
                $subscriptions = $subscriptions->where('subscribed_id', Auth::id());
            }
        }
        return $subscriptions->paginate(20);
    }
}
