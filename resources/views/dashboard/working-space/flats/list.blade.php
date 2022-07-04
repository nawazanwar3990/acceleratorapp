@forelse($records as $record)
    <tr>
        <td class="text-center">{{ $loop->iteration }}</td>
        <td>{{ $record->floor->name }}</td>
        <td>{{ $record->name }}</td>
        <td>{{ $record->number }}</td>
        <td>{{ $record->type->name ?? '' }}</td>
        <td>{{ $record->area }}</td>
        <td>
            @switch($record->sales_status)
                @case ('open')
                    <h4><span class="badge bg-success">{{ __('general.available') }}</span></h4>
                    @break
                @case ('in-execution')
                    <h4><span class="badge bg-danger">{{ __('general.in_execution') }}</span></h4>
                    @break
                @case ('sold')
                    <h4><span class="badge bg-warning">{{ __('general.sold') }}</span></h4>
                    @break
            @endswitch
        </td>
        <td class="text-center">
            @if ($record->sales_status == 'open')
                @include('dashboard.components.general.table-actions', [
                    'edit' => route('dashboard.flats.edit', $record->id),
                    'delete' => route('dashboard.flats.destroy', $record->id),
                ])
            @endif
        </td>
    </tr>
@empty
    <tr>
        <td colspan="100%" class="text-center">
            {{ __('general.no_record_found') }}
        </td>
    </tr>
@endforelse
