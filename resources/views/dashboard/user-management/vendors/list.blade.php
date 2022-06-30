@forelse($records as $record)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $record->hr_no }}</td>
        <td>{{ $record->full_name }}</td>
        <td>{{ $record->cell_1 }}</td>
        <td class="text-center">
            @include('dashboard.components.general.table-actions', [
                'edit' => route('dashboard.vendors.edit', $record->id),
                'delete' => route('dashboard.vendors.destroy', $record->id),
            ])
            <a class="btn btn-sm btn-success" href="{{ route('dashboard.subscriptions.index',['vId'=>$record->id]) }}">
                {{__('general.subscriptions')}} <i class="bx bx-happy-heart-eyes"></i>
            </a>
        </td>
    </tr>
@empty

@endforelse
