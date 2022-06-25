@forelse($records as $record)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $record->hr->first_name }}</td>
        <td>{{ $record->hr->first_name }}</td>
        <td>{{ $record->hr->first_name }}</td>

        <td class="text-center">
            @include('dashboard.components.general.table-actions', [
                'edit' => route('dashboard.nominee.edit', $record->id),
                'delete' => route('dashboard.nominee.destroy', $record->id),
                'show' => route('dashboard.nominee.destroy', $record->id),
            ])
        </td>
    </tr>
@empty

@endforelse
