@forelse($records as $record)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $record->name }}</td>
        <td>{{ $record->parent->name ?? '' }}</td>
        <td class="text-center">
            @include('components.General.table-actions', [
                'edit' => route('dashboard.employee-type.edit', $record->id),
                'delete' => route('dashboard.employee-type.destroy', $record->id),
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
