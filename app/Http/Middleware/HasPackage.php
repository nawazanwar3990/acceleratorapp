<?php

namespace App\Http\Middleware;

use App\Enum\RoleEnum;
use App\Models\Subscriptions\Package;
use App\Models\Subscriptions\Subscription;
use App\Providers\RouteServiceProvider;
use App\Services\GeneralService;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HasPackage
{
    public function handle(Request $request, Closure $next)
    {
        $guards = empty($guards) ? [null] : $guards;
        foreach ($guards as $guard) {
            $currentGuard = Auth::guard($guard);
            if ($currentGuard->check()) {
                if ($currentGuard->user()->hasRole(RoleEnum::BUSINESS_ACCELERATOR)) {
                    $userId = $currentGuard->id();
                    $user = $currentGuard->user();
                    $subscriptionQuery = Subscription::where('subscribed_id', $userId);
                    if ($subscriptionQuery->exists()) {
                        $subscription = $subscriptionQuery->first();
                        if (GeneralService::isExpireSubscription(\Carbon\Carbon::now(), $subscription->expire_date)) {
                            return redirect()->route('package.expire');
                        }
                    }
                }
            }
        }
        return $next($request);
    }
}
