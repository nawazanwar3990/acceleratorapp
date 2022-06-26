@forelse($records as $record)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $record->hr_no }}</td>
        <td>{{ $record->full_name }}</td>
        <td>{{ $record->cnic }}</td>
        <td>{{ $record->cell_1 }}</td>
        <td>{{ $record->cell_1 }}</td>
        <td class="text-center">
            @include('dashboard.components.general.table-actions', [
                'edit' => route('dashboard.human-resource.edit', $record->id),
                'delete' => route('dashboard.human-resource.destroy', $record->id),
                'show' => route('dashboard.human-resource.show', $record->id),
            ])
        </td>
    </tr>
@empty

@endforelse
