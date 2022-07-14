@forelse($records as $record)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $record->name }}</td>
        <td>{{ $record->slug }}</td>
        <td class="text-center">
            @include('dashboard.components.general.table-actions', [
                'edit' => route('dashboard.durations.edit', $record->id),
                'delete' => route('dashboard.durations.destroy', $record->id),
            ])
        </td>
    </tr>
@empty

@endforelse
