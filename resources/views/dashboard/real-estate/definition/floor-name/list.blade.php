@forelse($records as $record)
    <tr>
        <td class="text-center">{{ $loop->iteration }}</td>
        <td>{{ $record->name ?? '' }}</td>
        <td>
            <span class="badge bg-{{ $record->status === 1 ? "success" : "danger" }}">
                {{ $record->status === 1 ? "Active" : "Deactivate" }}
            </span>
        </td>
        <td class="text-center">
            @include('components.General.table-actions', [
                'edit' => route('dashboard.floor-name.edit', $record->id),
                'delete' => route('dashboard.floor-name.destroy', $record->id),
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
