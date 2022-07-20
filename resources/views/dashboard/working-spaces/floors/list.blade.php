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
            @if($record->offices)
                <a class="btn btn-xs btn-warning mx-1"
                   href="{{route('dashboard.offices.index',['fId'=>$record->id])}}">
                    {{ trans('general.view') }}
                </a>
            @else
                0
            @endif
        </td>

        <td>
            <ul class="list-group list-group-flush bg-transparent">
                @if($record->length)
                    <li class="list-group-item py-0 border-0  bg-transparent px-0">
                        <small>
                            <strong>{{ __('general.length') }}</strong>: {{ $record->length }}
                        </small>
                    </li>
                @endif
                @if($record->width)
                <li class="list-group-item py-0 border-0  bg-transparent px-0">
                    <small>
                        <strong>{{ __('general.width') }}</strong>: {{ $record->width }}
                    </small>
                </li>
                    @endif
                    @if($record->height)
                <li class="list-group-item py-0 border-0  bg-transparent px-0">
                    <small>
                        <strong>{{ __('general.height') }}</strong>: {{ $record->height }}
                    </small>
                </li>
                    @endif
                    @if($record->area)
                <li class="list-group-item py-0 border-0  bg-transparent px-0">
                    <small>
                        <strong>{{ __('general.area') }}</strong>: {{ $record->area }}
                    </small>
                </li>
                    @endif
            </ul>
        </td>
        <td>
            @if($record->type_id)
                {{ \App\Services\BuildingService::buildingTypesForDropdown($record->type_id)  }}
            @else
                --
            @endif
        </td>
        <td class="text-center">
            @if(\Illuminate\Support\Facades\Auth::user()->hasRole(\App\Enum\RoleEnum::BUSINESS_ACCELERATOR))
                @include('dashboard.components.general.table-actions', [
                    'edit' => route('dashboard.floors.edit', $record->id),
                    'show' => route('dashboard.floors.show', $record->id),
                    'delete' => route('dashboard.floors.destroy', $record->id),
                ])
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
