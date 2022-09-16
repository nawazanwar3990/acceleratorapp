@if(\Illuminate\Support\Facades\Auth::user()->hasRole(\App\Enum\RoleEnum::SUPER_ADMIN))
    @if($record->payment_for==\App\Enum\PaymentForEnum::PACKAGE_APPROVAL)
        @if($record->package_subscription->status==\App\Enum\SubscriptionStatusEnum::PENDING)
            <a class="btn btn-sm btn-info  mx-1"
               onclick="approved_subscription('{{ $record->package_subscription->id}}');">
                {{ trans('general.approved') }} <i class="bx bx-plus-circle"></i>
            </a>
            <a class="btn btn-sm btn-info  mx-1"
               onclick="decline_subscription('{{ $record->package_subscription->id}}');">
                {{ trans('general.declined') }} <i class="bx bx-minus-circle"></i>
            </a>
        @else
            <a class="btn btn-xs btn-warning mx-1" target="_blank" download
               href="{{asset($record->file_name)}}">
                {{ trans('general.download_receipt') }}
            </a>
        @endif
    @endif
    @if($record->payment_for==\App\Enum\PaymentForEnum::PACKAGE_EXPIRE)
        <a class="btn btn-sm btn-info  mx-1"
           onclick="renew_subscription('{{ $record->package_subscription->id}}');">
            {{ trans('general.renew') }} <i class="bx bx-plus-circle"></i>
        </a>
    @endif
@else
    @isset($record->subscribed)
        <a class="btn btn-xs btn-warning mx-1" target="_blank" download
           href="{{asset($record->file_name)}}">
            {{ trans('general.download_receipt') }}
        </a>
    @endisset
@endif
