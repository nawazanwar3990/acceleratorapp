@forelse($records as $record)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $record->transfer_no }}</td>
        <td>{{ \App\Services\GeneralService::formatDate( $record->date ) }}</td>
        <td>
            <span data-bs-toggle="tooltip" data-bs-placement="top" title="{{ __('general.building') }}: {{ \App\Services\BuildingService::getBuildingName() }}<br>{{ __('general.floor') }}: {{ $record->floor->floor_name }}">
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
        <td>{{ \App\Services\GeneralService::number_format( $record->after_discount_amount ) }}</td>
        <td>{{ $record->commodity_units }}</td>
        <td>{{ \App\Services\GeneralService::number_format( $record->commodity_unit_value ) }}</td>
        <td class="text-center">
            <div class="btn-group">
                <button type="button" class="btn btn-outline-secondary btn-sm dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false" aria-haspopup="true">{{__('general.action')}}</button>
                <ul class="dropdown-menu">
                    <li>
                        <button type="button" class="dropdown-item text-black-50" data-bs-toggle="modal" data-bs-target="#value_modal" rec-id="{{ $record->id }}" old-val="{{ $record-> }}">
                            {{ __('general.update_commodity_value') }}</button>
                    </li>
                </ul>
            </div>
        </td>
    </tr>

@empty
    <tr>
        <td class="text-center" colspan="6">{{ __('general.no_record_found') }}</td>
    </tr>
@endforelse
