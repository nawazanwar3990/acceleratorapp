<table class="table table-bordered table-hover">
    @include('components.General.table-headings',['headings'=>\App\Enum\TableHeadings\Authorization\User::getTranslationKeys()])
    <tbody>
    @forelse($persons as $person)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $person->full_name }}</td>
            <td>{{ $person->email }}</td>
            <td class="text-center">
               @isset($person->user)
                    <a class="btn btn-sm btn-danger text-white cursor-pointer disabled">
                        <i class="fa fa-ban" aria-hidden="true"></i> Already User</a>
                @else
                    <a class="btn btn-sm btn-info text-white cursor-pointer"
                       onclick="Custom.makeUser({{ $person->id }});"><i
                            class="fa fa-plus-circle"></i> Make it User</a>
                @endif
            </td>
        </tr>
    @empty
    @endforelse
    </tbody>
</table>
