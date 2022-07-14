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
            @if($record->subscription_type==\App\Enum\SubscriptionTypeEnum::OFFICE)
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
            @if(\Illuminate\Support\Facades\Auth::user()->hasRole(\App\Enum\RoleEnum::SUPER_ADMIN))
                @if(\App\Services\GeneralService::is_expire_package(\Carbon\Carbon::now(),$record->expire_date))
                    <a class="btn btn-xs btn-warning mx-1"
                       onclick="renew_package('{{ $record->id }}','{{ $record->package->id }}','{{ $record->subscribed->id }}')">
                        {{ trans('general.renew') }} <i class="bx bx-plus-circle"></i>
                    </a>
                @endif
                <a class="btn btn-xs btn-info mx-1" href="{{ route('dashboard.payments.index') }}">
                    {{ trans('general.payments') }}
                </a>
                <a class="btn btn-xs btn-info mx-1"
                   href="{{ route('dashboard.subscription-logs.index') }}">
                    {{ trans('general.logs') }}
                </a>
            @endif
        </td>
    </tr>
@empty
@endforelse
