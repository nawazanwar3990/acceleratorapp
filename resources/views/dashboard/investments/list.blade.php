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
            {{ $record->country }}
        </td>
        <td class="text-center">
            <a class="btn btn-xs btn-info" href="{{ route('dashboard.investment-asks.show',$record->id) }}">{{ trans('general.view') }}</a>
        </td>
    </tr>
@empty

@endforelse
