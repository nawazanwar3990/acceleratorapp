@forelse($records as $record)
    <tr>
        <td class="text-center">{{ $loop->iteration }}</td>
        <td>
            {{ $record->startup_name }}
        </td>
        <td>
            {{ $record->email }}
        </td>
        <td>
            {{ $record->full_name }}
        </td>
        <td>
            {{ $record->mobile }}
        </td>
        <td>
            {{ $record->city }}
        </td>
        <td>
            {{ \App\Services\GeneralService::getCountriesArray($record->country )}}
        </td>
        <td class="text-center">
            @if($record->status)
                <a class="btn btn-info mx-2">
                    Already {{ ucwords($record->status) }}
                </a>
            @else
                <a class="btn btn-xs btn-info">{{ trans('general.pending') }}</a>
            @endif
        </td>
        <td class="text-center">
            <a class="btn btn-xs btn-info" href="{{ route('dashboard.investment-asks.show',$record->id) }}">
                {{ trans('general.view') }}
            </a>
        </td>
    </tr>
@empty
@endforelse
