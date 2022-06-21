@forelse($records as $record)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $record->sales_no }}</td>
        <td>{{ \App\Services\GeneralService::formatDate( $record->date ) }}</td>
        <td>
            <span data-bs-toggle="tooltip" data-bs-placement="top" title="{{ __('general.building') }}: {{ $record->Building->name }}<br>{{ __('general.floor') }}: {{ $record->floor->floor_name }}">
                {{ $record->flat->flat_name }}
            </span>
        </td>
        <td>
            @foreach($record->purchasers as $purchaser)
                <a href="{{ route('dashboard.human-resource.show', $purchaser->Hr->id) }}" target="_blank"><small>{{ $purchaser->Hr->full_name }}</small></a>
                @if (!$loop->last)
                    <br>
                @endif
            @endforeach
        </td>
        <td class="text-center">
            @include('components.General.print-btn', [
                            'print' => route('dashboard.sales.show', $record->transfer_no),
                        ])
        </td>
    </tr>

@empty
    <tr>
        <td class="text-center" colspan="6">{{ __('general.no_record_found') }}</td>
    </tr>
@endforelse
