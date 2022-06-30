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
            @isset($record->package)
                <strong class="text-center">{{ $record->package->name }}</strong>
            @else
                --
            @endisset
        </td>
        <td>
            {{ $record->price }}
        </td>
        <td>
            @isset($record->package->duration_type)
                {{ $record->package->duration_limit }}
                {{ \App\Services\GeneralService::get_duration_name($record->package->duration_type->slug) }}
            @else
                --
            @endisset
        </td>
        <td>
            {{ $record->expire_date }}
        </td>
        <td>
            {{ $record->renewal_date }}
        </td>
        <td class="text-center">
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
        </td>
    </tr>
@empty
@endforelse
