@forelse($records as $record)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $record->id }}</td>
        <td>{{ $record->getFullName() }}</td>
        <td>{{ $record->email }}</td>
        @if(!$record->already_subscription($record->id,\App\Enum\SubscriptionTypeEnum::PLAN))
            <td class="text-center">
                <a class="btn btn-sm btn-success"
                   href="{{ route('dashboard.subscriptions.create',['id'=>$record->id,'type'=>\App\Enum\SubscriptionTypeEnum::PLAN]) }}">
                    {{__('general.apply_subscription')}} <i class="bx bx-plus-circle"></i>
                </a>
            </td>
        @else
            <td class="text-center">
                <a class="btn btn-sm btn-info"
                   href="{{ route('dashboard.subscriptions.index',['id'=>$record->id,'type'=>\App\Enum\SubscriptionTypeEnum::PLAN]) }}">
                    {{__('general.subscriptions')}} <i class="bx bx-arrow-to-right"></i>
                </a>
            </td>
        @endif
    </tr>
@empty

@endforelse
