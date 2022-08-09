@forelse($records as $record)
    <tr>
        <td class="text-center">
            {{ $loop->iteration }}
        </td>

        <td>
            @isset($record->building)
                {{ $record->building->name  }}
            @else
                --
            @endif
        </td>
        <td>{{ $record->name}}</td>
        <td>
            @if($record->type_id)
                {{ \App\Services\BuildingService::buildingTypesForDropdown($record->type_id)  }}
            @else
                --
            @endif
        </td>
        <td class="text-center">
            @if(\Illuminate\Support\Facades\Auth::user()->hasRole(\App\Enum\RoleEnum::BUSINESS_ACCELERATOR))
                <a class="btn btn-xs btn-info" href="{{route('dashboard.offices.index',['fId'=>$record->id])}}">
                    {{__('general.offices')}}  ({{ count($record->offices) }})
                </a>
                <a class="btn btn-xs btn-info" href="{{ route('dashboard.floors.edit',$record->id) }}">
                    {{__('general.edit')}}
                </a>
                <a class="btn btn-xs btn-info" href="{{ route('dashboard.floors.show',$record->id) }}">
                    {{__('general.show')}}
                </a>
            @endif
        </td>
    </tr>
@empty

@endforelse
