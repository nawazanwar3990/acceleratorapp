@if(\Illuminate\Support\Facades\Auth::user()->hasRole(\App\Enum\RoleEnum::BUSINESS_ACCELERATOR))
    @if($record->plan_subscription->status==\App\Enum\SubscriptionStatusEnum::PENDING)
        <a class="btn btn-sm btn-info  mx-1"
           onclick="approved_subscription('{{ $record->plan_subscription->id}}');">
            {{ trans('general.approved') }} <i class="bx bx-plus-circle"></i>
        </a>
    @endif
    <a class="btn btn-sm btn-info  mx-1"
       onclick="decline_subscription('{{ $record->plan_subscription->id}}');">
        {{ trans('general.declined') }} <i class="bx bx-minus-circle"></i>
    </a>
@else
    <a class="btn btn-sm btn-info  mx-1"
       onclick="renew_subscription('{{ $record->plan_subscription->id}}');">
        {{ trans('general.renew') }} <i class="bx bx-plus-circle"></i>
    </a>
@endif
