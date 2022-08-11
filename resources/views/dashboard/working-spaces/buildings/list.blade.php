@forelse($records as $record)
    <tr>
        <td class="text-center">{{ $loop->iteration }}</td>
        <td>{{ $record->name }}</td>
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
                <a class="btn btn-xs btn-info" href="{{route('dashboard.floors.index',['bId'=>$record->id])}}">
                    {{__('general.floors')}}  ({{ count($record->floors) }})
                </a>
                <a class="btn btn-xs btn-info" href="{{route('dashboard.offices.index',['bId'=>$record->id])}}">
                    {{__('general.offices')}}  ({{ count($record->offices) }})
                </a>
                <a class="btn btn-xs btn-info" href="{{ route('dashboard.buildings.edit',$record->id) }}">
                    {{__('general.edit')}}
                </a>
                <a class="btn btn-xs btn-info" href="{{ route('dashboard.buildings.show',$record->id) }}">
                    {{__('general.show')}}
                </a>
            @endif
        </td>
    </tr>
@empty
@endforelse
