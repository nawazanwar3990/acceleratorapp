@forelse($records as $record)
    <tr>
        <td class="text-center">{{ $loop->iteration }}</td>
        <td>
            @if($record->building  AND $record->floor)
                <strong>{{ $record->floor->name }}</strong> of <strong>{{ $record->building->name }}</strong>
            @elseif($record->building  AND !$record->floor)
                {{ $record->building->name }}
            @endif
        </td>
        <td>{{ $record->name }}</td>
        <td>{{ $record->type->name ?? '' }}</td>
        <td>
            @if($record->view)
                {{ \App\Services\OfficeService::office_views_dropdown($record->view)}}
            @else
            @endif
        </td>
        <td>{{ $record->sitting_capacity }}</td>
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
            <a class="btn btn-xs btn-info" href="{{ route('dashboard.office-plans.index',[$record->id]) }}">
                {{ __('general.plans') }} <i class="bx bxs-eyedropper"></i>
            </a>
        </td>
        <td class="text-center">
            @if(\Illuminate\Support\Facades\Auth::user()->hasRole(\App\Enum\RoleEnum::BUSINESS_ACCELERATOR))
                @include('dashboard.components.general.table-actions', [
                         'edit' => route('dashboard.offices.edit', $record->id),
                         'delete' => route('dashboard.offices.destroy', $record->id),
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
