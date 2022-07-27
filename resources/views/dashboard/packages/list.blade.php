@forelse($records as $record)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>
            @foreach($record->types as $type)
                <button class="btn btn-xs btn-info mx-1">{{ $type }}</button>
            @endforeach
        </td>
        <td>{{ $record->name }}</td>
        <td>
            @isset($record->duration_type)
                {{ $record->duration_type->name }}
            @else
                --
            @endisset
        </td>
        <td>
            {{ $record->duration_limit }}
            @if($record->duration_type->slug===\App\Enum\DurationEnum::Daily)
                Days
            @elseif($record->duration_type->slug===\App\Enum\DurationEnum::MONTHLY)
                Months
            @elseif($record->duration_type->slug===\App\Enum\DurationEnum::WEEKLY)
                Weeks
            @elseif($record->duration_type->slug===\App\Enum\DurationEnum::YEARLY)
                Years
            @endif
        </td>
        <td>{{ $record->price }}</td>
        <td>{{ $record->reminder_days }}</td>
        <td style="width: 230px;">
            <UL class="list-group list-group-flush bg-transparent">
                @foreach($record->services as $service)
                    <li class="list-group-item py-0 border-0  bg-transparent px-0">
                        <i class="bx bx-check text-success"></i> <small><strong
                                class="text-infogit ">{{ ($service->pivot->limit)=='∞'?'Unlimited':$service->pivot->limit }}</strong> {{ str_replace('_',' ',$service->name) }}
                        </small>
                    </li>
                @endforeach
            </UL>
        </td>
        <td>
            <span class="badge bg-{{ $record->status === 1 ? "success" : "danger" }}">
                {{ $record->status === 1 ? "Active" : "Deactivate" }}
            </span>
        </td>
        <td class="text-center">
            @include('dashboard.components.general.table-actions', [
               'edit' => route('dashboard.packages.edit', $record->id),
               'delete' => route('dashboard.packages.destroy', $record->id),
           ])
        </td>
    </tr>
@empty

@endforelse
