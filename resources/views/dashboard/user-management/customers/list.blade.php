@forelse($records as $customer)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $customer->id }}</td>
        <td>{{ $customer->getFullName() }}</td>
        <td>{{ $customer->email }}</td>
        <td class="text-center">
            @if( auth()->user()->hasRole(\App\Enum\RoleEnum::BUSINESS_ACCELERATOR))
                @include('dashboard.user-management.components.customer-action')
            @endif
        </td>
    </tr>
@empty

@endforelse
