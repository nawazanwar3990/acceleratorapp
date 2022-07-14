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
        <td>
            @if($record->building_type)
                {{ \App\Services\BuildingService::buildingTypesForDropdown($record->building_type)  }}
            @else
            @endif
        </td>
        <td>
            @if($record->entry_gates)
                {{ \App\Services\BuildingService::buildingEntryGatesForDropdown($record->entry_gates)  }}
            @else
            @endif
        </td>
        <td>
            @if($record->no_of_floors)
                {{ \App\Services\BuildingService::no_of_floors($record->no_of_floors)  }}
            @else
            @endif
        </td>
        <td>
            @if($record->facing)
                {{ \App\Services\BuildingService::buildingFacingsForDropdown($record->facing)  }}
            @else
            @endif
        </td>
        <td class="text-center">
            @if(\Illuminate\Support\Facades\Auth::user()->hasRole(\App\Enum\RoleEnum::BUSINESS_ACCELERATOR))
                @include('dashboard.components.general.table-actions', [
                    'edit' => route('dashboard.buildings.edit', $record->id),
                    'delete' => route('dashboard.buildings.destroy', $record->id),
                ])
            @endif
        </td>
    </tr>
@empty
    <tr>
        <td class="text-center" colspan="20">{{ __('general.no_record_found') }}</td>
    </tr>
@endforelse
