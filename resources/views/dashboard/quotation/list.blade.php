@forelse($records as $record)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $record->quot_no }}</td>
        <td>{{ \App\Services\GeneralService::formatDate( $record->date ) }}</td>
        <td>{{ $record->customer_name }}</td>
        <td>{{ $record->customer_contact }}</td>
        <td>
            <span data-bs-toggle="tooltip" data-bs-placement="top" title="{{ __('general.building') }}: {{ \App\Services\RealEstate\BuildingService::getBuildingName() }}<br>{{ __('general.floor') }}: {{ $record->floor->floor_name }}">
                {{ $record->flat->flat_name }}
            </span>
        </td>
        <td class="text-center">
            <div class="btn-group">
                <button type="button" class="btn btn-outline-secondary btn-sm dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false" aria-haspopup="true">{{__('general.action')}}</button>
                <ul class="dropdown-menu">
                    <li>
                        <a class="dropdown-item text-black-50" href="{{ route('dashboard.quotations.show', $record->quot_no) }}" target="_blank">
                            {{__('general.print')}}
                        </a>
                    </li>
                </ul>
            </div>
        </td>
    </tr>
@empty
    <tr>
        <td class="text-center" colspan="7">
            {{ __('general.no_record_found') }}
        </td>
    </tr>
@endforelse
