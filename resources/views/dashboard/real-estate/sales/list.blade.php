@forelse($records as $record)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $record->transfer_no }}</td>
        <td>{{ \App\Services\GeneralService::formatDate( $record->date ) }}</td>
        <td>
            <span data-bs-toggle="tooltip" data-bs-placement="top" title="{{ __('general.building') }}: {{ \App\Services\RealEstate\BuildingService::getBuildingName() }}<br>{{ __('general.floor') }}: {{ $record->floor->floor_name }}">
                {{ $record->flat->flat_name }}
            </span>
        </td>
        <td>
            <small>{{ \App\Services\GeneralService::getPaymentTypesForDropdown( $record->payment_method ) }}<br>
            {{ \App\Services\GeneralService::getPaymentSubTypesForDropdown( $record->payment_sub_method ) }}</small>
        </td>
        <td>
            @foreach($record->purchasers as $purchaser)
                <a href="{{ route('dashboard.human-resource.show', $purchaser->Hr->id) }}" target="_blank"><small>{{ $purchaser->Hr->full_name }}</small></a>
                @if (!$loop->last)
                    <br>
                @endif
            @endforeach
        </td>
        <td>{{ \App\Services\GeneralService::number_format( $record->after_discount_amount ) }}</td>
        <td class="text-center">
            @include('dashboard.real-estate.sales.components.list-action-buttons')
        </td>
    </tr>

@empty
    <tr>
        <td class="text-center" colspan="8">{{ __('general.no_record_found') }}</td>
    </tr>
@endforelse
