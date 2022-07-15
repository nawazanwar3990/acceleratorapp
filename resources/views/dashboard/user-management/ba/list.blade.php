@forelse($records as $record)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $record->id }}</td>
        <td>{{ $record->getFullName() }}</td>
        <td>{{ $record->email }}</td>

        <td class="text-center">
            @if(!$record->already_subscription($record->id,\App\Enum\SubscriptionTypeEnum::PACKAGE))
                <a class="btn btn-sm btn-success"
                   href="{{ route('dashboard.subscriptions.create',['id'=>$record->id,'type'=>\App\Enum\SubscriptionTypeEnum::PACKAGE]) }}">
                    {{__('general.apply_subscription')}} <i class="bx bx-plus-circle"></i>
                </a>
            @else
                <a class="btn btn-sm btn-info"
                   href="{{ route('dashboard.subscriptions.index',['id'=>$record->id,'type'=>\App\Enum\SubscriptionTypeEnum::PACKAGE]) }}">
                    {{__('general.subscriptions')}} <i class="bx bx-arrow-to-right"></i>
                </a>
            @endif
            @include('dashboard.components.general.table-actions', [
            'edit' => route('dashboard.ba.edit', $record->id),
            'delete' => route('dashboard.ba.destroy', $record->id),
        ])
        </td>
    </tr>
@empty

@endforelse
