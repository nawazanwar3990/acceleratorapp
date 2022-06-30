@forelse($records as $record)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $record->hr_no }}</td>
        <td>{{ $record->full_name }}</td>
        <td>{{ $record->cell_1 }}</td>
        <td class="text-center">
            <a class="btn btn-sm btn-success" href="{{ route('dashboard.subscriptions.create',['id'=>$record->user_id]) }}">
                {{__('general.apply_subscription')}} <i class="bx bx-plus-circle"></i>
            </a>
        </td>
    </tr>
@empty

@endforelse
