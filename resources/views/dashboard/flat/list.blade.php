@forelse($records as $record)
    <tr>
        <td class="text-center">{{ $loop->iteration }}</td>
        <td>{{ $record->floor->floor_name }}</td>
        <td>{{ $record->flat_name }}</td>
        <td>{{ $record->flat_number }}</td>
        <td>{{ $record->flatType->name ?? '' }}</td>
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
{{--        <td>--}}
{{--            @php $flatOwners = $record->owners()->where('status', true)->get(); @endphp--}}
{{--            @foreach($flatOwners as $owner)--}}
{{--                <small>{{ $owner->Hr->full_name }}</small>--}}
{{--                @if (!$loop->last)--}}
{{--                    <br>--}}
{{--                @endif--}}
{{--            @endforeach--}}
{{--        </td>--}}
        <td class="text-center">
            @if ($record->sales_status == 'open')
                @include('components.General.table-actions', [
                    'edit' => route('dashboard.flats-shops.edit', $record->id),
                    'delete' => route('dashboard.flats-shops.destroy', $record->id),
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
