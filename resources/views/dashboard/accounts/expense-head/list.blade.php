@forelse($records as $record)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $record->expense_head_name }}</td>
        <td>{{ $record->parent->expense_head_name ?? '' }}</td>
        <td class="text-center">
            @include('components.General.table-actions', [
                'edit' => route('dashboard.expense.heads.edit', $record->id),
                'delete' => route('dashboard.expense.heads.destroy', $record->id),
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
