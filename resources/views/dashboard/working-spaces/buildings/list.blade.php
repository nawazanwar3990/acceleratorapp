@forelse($records as $record)
    <tr>
        <td class="text-center">{{ $loop->iteration }}</td>
        <td>{{ $record->name }}</td>
        <td>{{ $record->area }}</td>
        <td>{{ \App\Services\BuildingService::buildingTypesForDropdown( $record->building_type)  }}</td>
        <td>{{ $record->price }}</td>
        <td>{{ \App\Services\BuildingService::buildingNoOfFloorsForDropdown( $record->no_of_floors)  }}</td>
        <td>@include('dashboard.components.general.status-column')</td>
        <td class="text-center">
            @include('dashboard.components.general.table-actions', [
                'edit' => route('dashboard.buildings.edit', $record->id),
                'delete' => route('dashboard.buildings.destroy', $record->id),
            ])
        </td>
    </tr>
@empty
    <tr>
        <td class="text-center" colspan="20">{{ __('general.no_record_found') }}</td>
    </tr>
@endforelse
