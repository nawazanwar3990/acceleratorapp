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
            <div class="btn-group">
                <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ trans('general.view') }}
                </button>
                <ul class="dropdown-menu" style="min-width: 300px;">
                    @include('components.models.package-services')
                </ul>
            </div>
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
