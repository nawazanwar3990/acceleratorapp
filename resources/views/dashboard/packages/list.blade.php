@forelse($records as $record)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $record->name }}</td>
        <td>
            @isset($record->payment_process)
                {{ \App\Enum\PaymentTypeProcessEnum::getTranslationKeyBy($record->payment_process) }}
            @endisset
        </td>
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
        <td>
            <button type="button" class="btn btn-xs btn-info" data-bs-toggle="modal" data-bs-target="#service-model-{{$record->id}}">
                {{ trans('general.view') }}
            </button>
            @include('components.models.package-services',['id'=>$record->id])
        </td>
        <td>
            <span class="btn btn-xs bg-{{ $record->status === 1 ? "success" : "danger" }}">
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
