@forelse ($records as $key=>$value)
    <tr>
        <td></td>
        <td>
            {{ ucwords($key) }}
        </td>
        @foreach($value as $inner_key=>$inner_value)
            <td>
                {{ $inner_value->slug }}
            </td>
        @endforeach
        <td></td>
    </tr>
@empty
    <tr>
        <td colspan="20" class="text-center">
            {{__('general.no_record_found')}}
        </td>
    </tr>
@endforelse
