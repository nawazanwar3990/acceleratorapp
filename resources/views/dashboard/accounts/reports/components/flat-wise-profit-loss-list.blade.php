@forelse($records as $record)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $record->flat_name }}</td>
        <td>{{ $record->flat_number }}</td>
        <td>{{ \App\Services\GeneralService::formatDate( $record->date ) }}</td>
        <td>{{ \App\Services\GeneralService::number_format( $record->purchase_price ) }}</td>
        <td>{{ \App\Services\GeneralService::number_format( $record->after_discount_amount ) }}</td>
        <td>
            @php
                $percentage = \App\Services\GeneralService::getPercentageDifference($record->purchase_price, $record->after_discount_amount);
            @endphp
            {{
                \App\Services\GeneralService::number_format( ($record->after_discount_amount - $record->purchase_price))
            }}
            ({{ $percentage }}%)&nbsp;
            @if ($percentage > 0)
                <i class="fas fa-arrow-up text-success"></i>
            @else
                <i class="fas fa-arrow-down text-danger"></i>
            @endif
        </td>
    </tr>
@empty
    <tr>
        <td class="text-center" colspan="7">
            {{ __('general.no_record_found') }}
        </td>
    </tr>
@endforelse
