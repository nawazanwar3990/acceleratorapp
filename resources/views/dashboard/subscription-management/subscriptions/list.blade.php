@forelse($records as $record)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>
            @isset($record->subscribed)
                {{ $record->subscribed->getFullName() }}
            @else
                --
            @endisset
        </td>
        <td>
            {{ \App\Enum\SubscriptionTypeEnum::getTranslationKeyBy($record->subscription_type) }}
        </td>
        <td>
            @if($record->subscription_type==\App\Enum\SubscriptionTypeEnum::PLAN)
                {{ $record->office->name??null}}
            @else
                {{ $record->package->name??null}}
            @endif
        </td>
        <td>
            {{ $record->price }} {{ \App\Services\GeneralService::get_default_currency() }}
        </td>
        <td>
            {{ $record->expire_date }}
        </td>
        <td>
            {{ $record->renewal_date }}
        </td>
        <td class="text-center d-flex">
            @if(\App\Services\GeneralService::isExpireSubscription(\Carbon\Carbon::now(),$record->expire_date))
                <a class="btn btn-xs btn-warning mx-1"
                   onclick="renew_package('{{ $record->id }}','{{ $record->subscription_id }}','{{ $record->subscribed_id }}')">
                    {{ trans('general.renew') }} <i class="bx bx-plus-circle"></i>
                </a>
            @endif
            <a class="btn btn-xs btn-info mx-1" href="{{ route('dashboard.payments.index',['type'=>$type]) }}">
                {{ trans('general.payments') }}
            </a>
            <a class="btn btn-xs btn-info mx-1"
               href="{{ route('dashboard.subscription-logs.index',['type'=>$type]) }}">
                {{ trans('general.logs') }}
            </a>
        </td>
    </tr>
@empty
@endforelse
