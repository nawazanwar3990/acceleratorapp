@forelse($records as $ba)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $ba->id }}</td>
        <td>{{ $ba->getFullName() }}</td>
        <td>{{ $ba->email }}</td>
        <td>
            @if(!$ba->already_subscription($ba->id,\App\Enum\SubscriptionTypeEnum::PACKAGE))
                <a class="dropdown-item text-black-50"
                   href="{{ route('dashboard.subscriptions.create',['id'=>$ba->id,'type'=>\App\Enum\SubscriptionTypeEnum::PACKAGE]) }}">
                    {{__('general.apply_subscription')}} <i class="bx bx-plus-circle"></i>
                </a>
            @else
                <li>
                    <a class="dropdown-item text-black-50"
                       href="{{ route('dashboard.subscriptions.index',['id'=>$ba->id,'type'=>\App\Enum\SubscriptionTypeEnum::PACKAGE]) }}">
                        {{__('general.subscriptions')}} <i class="bx bx-arrow-to-right"></i>
                    </a>
                </li>
            @endif
        </td>
        <td class="text-center">
            @include('dashboard.user-management.components.ba-action')
        </td>
    </tr>
@empty
@endforelse
