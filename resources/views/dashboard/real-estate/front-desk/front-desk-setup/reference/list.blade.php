@forelse($records as $record)
    <tr>
        <td class="text-center">{{ $loop->iteration }}</td>
        <td>{{ $record->name ?? '' }}</td>
        <td>
            {{ $record->description }}
        </td>
        <td class="text-center">
            @include('components.General.table-actions', [
                'edit' => route('dashboard.reference.edit', $record->id),
                'delete' => route('dashboard.reference.destroy', $record->id),
            ])
        </td>
    </tr>
@empty
    <tr>
        <td colspan="4" class="text-center">
            {{ __('general.no_record_found') }}
        </td>
    </tr>
@endforelse
