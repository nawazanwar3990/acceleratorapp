@forelse($records as $record)
    <tr>
        <td class="text-center">{{ $loop->iteration }}</td>
        <td>{{ $record->name }}</td>
        <td>
            @if($record->no_of_floors)
                <a class="btn btn-xs btn-warning mx-1"
                   href="{{route('dashboard.floors.index',['bId'=>$record->id])}}">
                    {{ trans('general.view') }}
                </a>
            @else
                0
            @endif
        </td>
        <td>
            @if($record->no_of_floors)
                <a class="btn btn-xs btn-warning mx-1"
                   href="{{route('dashboard.offices.index',['bId'=>$record->id])}}">
                    {{ trans('general.view') }}
                </a>
            @else
                0
            @endif
        </td>
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
        <td class="text-center">
            @if(\Illuminate\Support\Facades\Auth::user()->hasRole(\App\Enum\RoleEnum::BUSINESS_ACCELERATOR))
                @include('dashboard.components.general.table-actions', [
                    'edit' => route('dashboard.buildings.edit', $record->id),
                     'show' => route('dashboard.buildings.show', $record->id),
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
