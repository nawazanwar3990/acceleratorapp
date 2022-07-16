@forelse($records as $record)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $record->id }}</td>
        <td>{{ $record->getFullName() }}</td>
        <td>{{ $record->email }}</td>
        @if( auth()->user()->hasRole(\App\Enum\RoleEnum::BUSINESS_ACCELERATOR))
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
