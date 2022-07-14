@forelse($records as $record)
    <tr>
        <td class="text-center">{{ $loop->iteration }}</td>
        <td>{{ $record->name }}</td>
        <td>
            <ul class="list-group list-group-flush bg-transparent">
                <li class="list-group-item py-0 border-0  bg-transparent px-0">
                    <small>
                        <strong>{{ __('general.length') }}</strong>: {{ $record->length }}
                    </small>
                </li>
                <li class="list-group-item py-0 border-0  bg-transparent px-0">
                    <small>
                        <strong>{{ __('general.width') }}</strong>: {{ $record->width }}
                    </small>
                </li>
                <li class="list-group-item py-0 border-0  bg-transparent px-0">
                    <small>
                        <strong>{{ __('general.height') }}</strong>: {{ $record->height }}
                    </small>
                </li>
                <li class="list-group-item py-0 border-0  bg-transparent px-0">
                    <small>
                        <strong>{{ __('general.area') }}</strong>: {{ $record->area }}
                    </small>
                </li>
            </ul>
        </td>
        <td>{{ \App\Services\BuildingService::buildingTypesForDropdown( $record->building_type)  }}</td>
        <td>{{ \App\Services\BuildingService::buildingEntryGatesForDropdown( $record->entry_gates)  }}</td>
        <td>{{ \App\Services\BuildingService::buildingNoOfFloorsForDropdown( $record->no_of_floors)  }}</td>
        <td>{{ \App\Services\BuildingService::buildingFacingsForDropdown( $record->facing)  }}</td>
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
