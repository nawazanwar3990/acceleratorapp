@forelse($records as $record)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $record->first_name." ".$record->last_name }}</td>
        <td>{{ $record->cnic }}</td>
        <td>{{ $record->cell_1 }}</td>
        <td>{{ $record->present_linear_address }}</td>

        <td class="text-center">
            @include('components.General.print-btn', [
                'print' => route('dashboard.human-resource.show', $record->id),
            ])
        </td>
    </tr>
@empty

@endforelse
