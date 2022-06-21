@forelse($records as $record)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $record->hr->first_name }}</td>
        <td>{{ $record->hr->first_name }}</td>
        <td>{{ $record->hr->first_name }}</td>

        <td class="text-center">
            @include('components.General.print-btn', [
                'print' => route('dashboard.nominee.destroy', $record->id),
            ])
        </td>
    </tr>
@empty

@endforelse
