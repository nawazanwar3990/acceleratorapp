@php
    $totalAmount = $totalReceived = $totalBalance = 0;
@endphp
@forelse($records as $record)
@php
    $receivedAmount = \App\Services\RealEstate\SalesService::salesReceivedAmount($record->id)['received'];
    $totalAmount += $record->after_discount_amount;
    $totalReceived += $receivedAmount;
    $totalBalance += ($record->after_discount_amount - $receivedAmount);
    @endphp
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $record->transfer_no }}</td>
        <td>{{ \App\Services\GeneralService::formatDate( $record->date ) }}</td>
        <td>{{ \App\Services\GeneralService::number_format( $record->after_discount_amount ) }}</td>
        <td>{{ \App\Services\GeneralService::number_format( $receivedAmount ) }}</td>
        <td>{{ \App\Services\GeneralService::number_format( ($record->after_discount_amount - $receivedAmount) ) }}</td>
    </tr>
@empty
    <tr>
        <td class="text-center" colspan="6">
            {{ __('general.no_record_found') }}
        </td>
    </tr>
@endforelse
<tfoot>
    <tr>
        <td class="text-right fw-bold" colspan="3">{{ __('general.total') }}</td>
        <td class="fw-bold">{{ \App\Services\GeneralService::number_format( $totalAmount ) }}</td>
        <td class="fw-bold">{{ \App\Services\GeneralService::number_format( $totalReceived ) }}</td>
        <td class="fw-bold">{{ \App\Services\GeneralService::number_format( $totalBalance ) }}</td>
    </tr>
</tfoot>
