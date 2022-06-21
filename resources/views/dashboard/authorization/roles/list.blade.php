@forelse($records as $record)
    <tr>
        <td class="text-center">{{ $loop->iteration }}</td>
        <td>{{ $record->name}}</td>
        <td>{{ $record->slug}}</td>
        <td class="text-center">
            <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary">{{__('general.action')}}</button>
                <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle dropdown-toggle-split"
                        data-bs-toggle="dropdown" aria-expanded="false"><span
                        class="visually-hidden">Toggle Dropdown</span>
                </button>
                <ul class="dropdown-menu">
                    <li>
                        <a href="{{ route('dashboard.role-users.index',['role'=>$record->id]) }}"
                           class="dropdown-item text-black-50" href="#">
                            {{__('general.users')}}
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('dashboard.role-permissions.index',['role'=>$record->id]) }}"
                           class="dropdown-item text-black-50" href="#">
                            {{__('general.permissions')}}
                        </a>
                    </li>
                </ul>
            </div>
        </td>
    </tr>
@empty
    <tr>
        <td colspan="100%" class="text-center">
            {{ __('general.no_record_found') }}
        </td>
    </tr>
@endforelse
