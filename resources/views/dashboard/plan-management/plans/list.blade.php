@forelse($records as $record)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $record->name }}</td>
        <td>{{ $record->no_of_persons }}</td>
        <td>
            {{ $record->duration }} {{trans('general.months')}}
        </td>
        <td>
            {{ $record->price }} {{ \App\Services\GeneralService::get_default_currency() }}
        </td>
        <td>
            @if(count($record->basic_services))
                <ul class="list-group list-group-flush bg-transparent">
                    @foreach($record->basic_services as $service)
                        <li class="list-group-item py-0 border-0  bg-transparent px-0">
                            <i class="bx bx-check text-success"></i> <small><strong
                                    class="text-infogit ">{{ $service->name }}
                            </small>
                        </li>
                    @endforeach
                </ul>
            @endif
        </td>
        <td>
            @if(count($record->additional_services))
                <ul class="list-group list-group-flush bg-transparent">
                    @foreach($record->additional_services as $service)
                        <li class="list-group-item py-0 border-0  bg-transparent px-0">
                            <i class="bx bx-check text-success"></i> <small><strong
                                    class="text-infogit ">{{ $service->name }}
                            </small>
                        </li>
                    @endforeach
                </ul>
            @endif
        </td>
        <td class="text-center">
            @if(\Illuminate\Support\Facades\Auth::user()->hasRole(\App\Enum\RoleEnum::BUSINESS_ACCELERATOR))
                @include('dashboard.components.general.table-actions', [
                    'edit' => route('dashboard.plans.edit', $record->id),
                    'delete' => route('dashboard.plans.destroy', $record->id),
                ])
            @endif
        </td>
    </tr>
@empty

@endforelse
