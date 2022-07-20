@forelse($records as $ba)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $ba->id }}</td>
        <td>{{ $ba->getFullName() }}</td>
        <td>{{ $ba->email }}</td>
        <td class="text-center">
            @include('dashboard.user-management.components.ba-action')
        </td>
    </tr>
@empty
@endforelse
