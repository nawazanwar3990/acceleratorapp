@forelse($records as $record)
    @php
        $brokerData = \App\Services\BrokerService::getBrokerAmounts($record->Hr->id, $startDate, $endDate);
    @endphp
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $record->Hr->full_name }}</td>
        <td>{{ \App\Services\GeneralService::number_format( $brokerData['total'] ) }}</td>
        <td>{{ \App\Services\GeneralService::number_format( $brokerData['paid'] ) }}</td>
        <td>{{ \App\Services\GeneralService::number_format( ($brokerData['total'] - $brokerData['paid']) ) }}</td>
    </tr>
@empty
    <tr>
        <td class="text-center" colspan="5">
            {{ __('general.no_record_found') }}
        </td>
    </tr>
@endforelse
