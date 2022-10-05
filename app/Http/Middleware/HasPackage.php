<?php

namespace App\Http\Middleware;

use App\Enum\RoleEnum;
use App\Enum\StepEnum;
use App\Enum\SubscriptionStatusEnum;
use App\Models\Subscription;
use App\Services\GeneralService;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class HasPackage
{
    public function handle(Request $request, Closure $next)
    {
        $guards = empty($guards) ? [null] : $guards;
        foreach ($guards as $guard) {
            $currentGuard = Auth::guard($guard);
            if ($currentGuard->check()) {
                if (
                    $currentGuard->user()->hasRole(RoleEnum::BUSINESS_ACCELERATOR) ||
                    $currentGuard->user()->hasRole(RoleEnum::FREELANCER) ||
                    $currentGuard->user()->hasRole(RoleEnum::MENTOR)
                ) {
                    $userId = $currentGuard->id();
                    $user = $currentGuard->user();
                    $subscriptionQuery = Subscription::where('subscribed_id', $userId);
                    if ($subscriptionQuery->exists()) {
                        $subscription = $subscriptionQuery->first();
                        if (GeneralService::isExpireSubscription(\Carbon\Carbon::now(), $subscription->expire_date)) {
                            return redirect()->route('subscription.expire');
                        } else if ($subscription->status == SubscriptionStatusEnum::PENDING) {
                            $currentGuard->logout();
                            Cache::flush();
                            return redirect()->route('website.pending-subscription', ['subscribed_id' => $user->id]);
                        }
                    } else {
                        if ($user->hasRole(RoleEnum::BUSINESS_ACCELERATOR)) {
                            $ba = $user->ba;
                            return redirect()->route('ba.create', ['ba', $ba->type, $ba->payment_process, $ba->type == 'company' ? StepEnum::COMPANY_PROFILE : StepEnum::PACKAGES, $ba->id]);
                        } else if ($user->hasRole(RoleEnum::FREELANCER)) {
                            $freelancer = $user->freelancer;
                            return redirect()->route('freelancers.create', ['ba', $freelancer->type, $freelancer->payment_process, $freelancer->type == 'company' ? StepEnum::COMPANY_PROFILE : StepEnum::PACKAGES, $freelancer->id]);
                        } else if ($user->hasRole(RoleEnum::MENTOR)) {
                            $mentor = $user->mentor;
                            return redirect()->route('freelancers.create', ['mentor', $mentor->payment_process, StepEnum::PACKAGES, $mentor->id]);
                        } else {
                            return $next($request);
                        }
                    }
                }
            }
        }
        return $next($request);
    }
}
