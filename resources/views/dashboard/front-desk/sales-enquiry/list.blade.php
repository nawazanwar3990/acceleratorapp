@forelse($records as $record)
    <tr>
        <td class="text-center">{{ $loop->iteration }}</td>
        <td>{{ $record->name ?? ''}}</td>
        <td>
            {{ $record->phone }}
        </td>
        <td>
            {{ $record->email }}
        </td>
        <td>
            {{ $record->address }}
        </td>
        <td>
            {{ $record->date }}
        </td>
        <td>
            {{ $record->next_followup_date }}
        </td>
        <td>
            {{ $record->hr->first_name ?? null }}
        </td>
        <td>
            {{ $record->reference->name ?? null }}
        </td>
        <td>
            {{ $record->source->name ?? null }}
        </td>
        <td class="text-center">
            @include('components.General.table-actions', [
                'edit' => route('dashboard.sales-enquiry.edit', $record->id),
                'delete' => route('dashboard.sales-enquiry.destroy', $record->id),
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
