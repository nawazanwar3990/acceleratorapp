@forelse($records as $record)
    <tr>
        <td class="text-center">{{ $loop->iteration }}</td>
        <td>{{ $record->building->name??null  }}</td>
        <td>{{ $record->name}}</td>
        <td>{{ $record->number}}</td>
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
            @if($record->type_id)
                {{ \App\Services\BuildingService::buildingTypesForDropdown($record->type_id)  }}
            @else
                --
            @endif
        </td>
        <td>{{ $record->no_of_offices}}</td>
        <td class="text-center">
            @if(\Illuminate\Support\Facades\Auth::user()->hasRole(\App\Enum\RoleEnum::BUSINESS_ACCELERATOR))
                @include('dashboard.components.general.table-actions', [
                    'edit' => route('dashboard.floors.edit', $record->id),
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
