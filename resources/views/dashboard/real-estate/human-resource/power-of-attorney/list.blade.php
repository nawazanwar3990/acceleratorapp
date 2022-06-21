@forelse($data as $d)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $d->executent->full_name }}</td>
        <td>{{ $d->attorney->full_name }}</td>

        <td class="text-center">
            @include('components.General.table-actions', [
                'edit' => route('dashboard.poa.edit', $d->id),
                'delete' => route('dashboard.poa.destroy', $d->id)
            ])
        </td>
    </tr>
@empty

@endforelse
