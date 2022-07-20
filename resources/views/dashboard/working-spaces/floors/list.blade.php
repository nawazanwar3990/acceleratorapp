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
                <div class="btn-group">
                    <button type="button" class="btn btn-outline-secondary btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" aria-haspopup="true">Action</button>
                    <ul class="dropdown-menu" style="">
                        <li>
                            <a class="dropdown-item text-black-50" href="{{route('dashboard.offices.index',['fId'=>$record->id])}}">
                                {{__('general.offices')}}  ({{ count($record->offices) }})
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item text-black-50" href="{{ route('dashboard.floors.edit',$record->id) }}">
                                {{__('general.edit')}}
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item text-black-50" href="{{ route('dashboard.floors.show',$record->id) }}">
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
        <td colspan="100%" class="text-center">
            {{ __('general.no_record_found') }}
        </td>
    </tr>
@endforelse
