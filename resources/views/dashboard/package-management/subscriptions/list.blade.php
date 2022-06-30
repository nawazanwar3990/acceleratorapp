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
                <UL class="list-group list-group-flush bg-transparent">
                    @foreach($record->package->modules as $module)
                        <li class="list-group-item py-0 border-0  bg-transparent px-0">
                            <i class="bx bx-check text-success"></i> <small><strong
                                    class="text-infogit ">{{ $module->pivot->limit }}</strong> {{ str_replace('_',' ',$module->name) }}
                            </small>
                        </li>
                    @endforeach
                </UL>
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
            @if(!$record->is_payed)
                <a class="btn btn-xs btn-warning mx-1"
                   onclick="renew_package('{{ $record->id }}','{{ $record->package->id }}','{{ $record->subscribed->id }}')">
                    {{ trans('general.pay_to_subscribe') }} <i class="bx bx-plus-circle"></i>
                </a>
            @endif
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
