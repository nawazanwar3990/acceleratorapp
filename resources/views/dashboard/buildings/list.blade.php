@forelse($records as $record)
    <tr>
        <td class="text-center">{{ $loop->iteration }}</td>
        <td>{{ $record->name }}</td>
        <td>{{ $record->area }}</td>
        <td>{{ \App\Services\RealEstate\BuildingService::buildingTypesForDropdown( $record->building_type)  }}</td>
        <td>{{ \App\Services\RealEstate\BuildingService::buildingNoOfFloorsForDropdown( $record->no_of_floors)  }}</td>
        <td>@include('components.General.status-column')</td>
        <td class="text-center">
            @include('components.General.table-actions', [
                'edit' => route('dashboard.buildings.edit', $record->id),
                'delete' => route('dashboard.buildings.destroy', $record->id),
            ])
        </td>
    </tr>
@empty
    <tr>
        <td class="text-center">{{ __('general.no_record_found') }}</td>
    </tr>
@endforelse
