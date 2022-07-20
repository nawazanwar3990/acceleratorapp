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
                <div class="btn-group">
                    <button type="button" class="btn btn-outline-secondary btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" aria-haspopup="true">Action</button>
                    <ul class="dropdown-menu" style="">
                        <li>
                            <a class="dropdown-item text-black-50" href="{{route('dashboard.floors.index',['bId'=>$record->id])}}">
                                {{__('general.floors')}}  ({{ count($record->floors) }})
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item text-black-50" href="{{route('dashboard.offices.index',['bId'=>$record->id])}}">
                                {{__('general.offices')}}  ({{ count($record->offices) }})
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item text-black-50" href="{{ route('dashboard.buildings.edit',$record->id) }}">
                                {{__('general.edit')}}
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item text-black-50" href="{{ route('dashboard.buildings.show',$record->id) }}">
                                {{__('general.show')}}
                            </a>
                        </li>
                    </ul>
                </div>
            @endif
        </td>
    </tr>
@empty
    <tr>
        <td class="text-center" colspan="20">{{ __('general.no_record_found') }}</td>
    </tr>
@endforelse
