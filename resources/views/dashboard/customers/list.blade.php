@forelse($records as $customer)
    <tr>
        <td>{{ $customer->id }}</td>
        <td>{{ $customer->getFullName() }}</td>
        <td>{{ $customer->email }}</td>
        <td class="text-center">
            <a class="btn btn-info btn-sm" href="{{ route('dashboard.customers.show',$customer->id) }}">
                {{__('general.show')}}
            </a>
        </td>
    </tr>
@empty

@endforelse
