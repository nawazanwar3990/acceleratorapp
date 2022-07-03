@forelse($records as $record)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $record->hr_no }}</td>
        <td>{{ $record->full_name }}</td>
        <td>{{ $record->email }}</td>
        @if(!isset($record->user->subscribed))
            <td class="text-center">
                <a class="btn btn-sm btn-success"
                   href="{{ route('dashboard.subscriptions.create',['id'=>$record->user_id]) }}">
                    {{__('general.apply_subscription')}} <i class="bx bx-plus-circle"></i>
                </a>
            </td>
        @else
            <td class="text-center">
                <a class="btn btn-sm btn-info"
                   href="{{ route('dashboard.subscriptions.index',['id'=>$record->user_id]) }}">
                    {{__('general.subscriptions')}} <i class="bx bx-arrow-to-right"></i>
                </a>
            </td>
        @endif
    </tr>
@empty

@endforelse
