@forelse($records as $record)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td><a href="{{ route('dashboard.broker-ledger', ['broker_id' => $record->id]) }}" target="_blank" data-bs-toggle="tooltip" data-placement="top" title="{{ __('general.view_ledger') }}">{{ $record->Hr->full_name }}</a></td>
        <td>{{ $record->Hr->cnic }}</td>
        <td>{{ $record->Hr->cell_1 }}</td>
        <td>
            <a href="{{ route('dashboard.human-resource.show', $record->Hr->id) }}" target="_blank">{{ $record->Hr->hr_no }}</a>
        </td>
    </tr>
@empty
    <tr>
        <td class="text-center" colspan="5">{{ __('general.no_record_found') }}</td>
    </tr>
@endforelse
