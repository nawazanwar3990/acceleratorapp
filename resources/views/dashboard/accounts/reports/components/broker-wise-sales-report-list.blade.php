@forelse($records as $record)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>
            <a href="{{ route('dashboard.human-resource.show', $record->hr_id) }}" target="_blank">{{ $record->full_name }}</a>
        </td>
        <td>{{ \App\Services\GeneralService::number_format( $record->totalSalesAmount ) }}</td>
        <td>{{ $record->totalSales }}</td>
    </tr>
@empty
    <tr>
        <td class="text-center" colspan="4">
            {{ __('general.no_record_found') }}
        </td>
    </tr>
@endforelse
