@forelse($records as $record)
    <tr>
        <td class="text-center">{{ $loop->iteration }}</td>
        <td>{{ $record->name }}</td>
        <td>{{ $record->number }}</td>
        <td>{{ $record->type->name ?? '' }}</td>
        <td>
            @if($record->view)
                {{ \App\Services\OfficeService::getOfficeViewsForDropdown($record->view)}}
            @else
            @endif
        </td>
        <td>{{ $record->sitting_capacity }}</td>
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
            @if(count($record->plans)>0)
                <ul class="list-group list-group-flush bg-transparent">
                    @foreach($record->plans as $plan)
                        <li class="list-group-item py-0 border-0  bg-transparent px-0">
                            <i class="bx bx-check text-success"></i>
                            <small>
                                <strong class="text-infogit ">{{ $plan->name }}</strong>
                                ({{ $plan->price }} {{ \App\Services\GeneralService::get_default_currency() }})
                            </small>
                        </li>
                    @endforeach
                </ul>
            @endif
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
