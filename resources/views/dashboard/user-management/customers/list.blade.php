@forelse($records as $record)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $record->id }}</td>
        <td>{{ $record->getFullName() }}</td>
        <td>{{ $record->email }}</td>
        @if( auth()->user()->hasRole(\App\Enum\RoleEnum::BUSINESS_ACCELERATOR))
            <td class="text-center">
                <a class="btn btn-sm btn-success"
                   href="{{ route('dashboard.subscriptions.create',['id'=>$record->id,'type'=>\App\Enum\SubscriptionTypeEnum::PLAN]) }}">
                    {{__('general.apply_subscription')}} <i class="bx bx-plus-circle"></i>
                </a>
            </td>
        @endif
    </tr>
@empty

@endforelse
