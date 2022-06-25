@forelse($records as $record)
    <tr>
        <td class="text-center">{{ $loop->iteration }}</td>
        <td>{{ $record->name ?? ''}}</td>
        <td>
            {{ $record->phone }}
        </td>
        <td>
            {{ $record->call_duration }}
        </td>
        <td>
            {{ $record->callType->name ?? null }}
        </td>
        <td>
            {{ $record->date }}
        </td>
        <td>
            {{ $record->next_followup_date }}
        </td>
        <td>
            {{ $record->description  }}
        </td>
        <td>
            {{ $record->note  }}
        </td>

        <td class="text-center">
            @include('components.General.table-actions', [
                'edit' => route('dashboard.phone-call-log.edit', $record->id),
                'delete' => route('dashboard.phone-call-log.destroy', $record->id),
            ])
        </td>
    </tr>
@empty
    <tr>
        <td colspan="100%" class="text-center">
            {{ __('general.no_record_found') }}
        </td>
    </tr>
@endforelse
