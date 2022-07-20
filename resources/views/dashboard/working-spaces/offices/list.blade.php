@forelse($records as $office)
    <tr>
        <td class="text-center">{{ $loop->iteration }}</td>
        <td>
            @if($office->building  AND $office->floor)
                <strong>{{ $office->floor->name }}</strong> of <strong>{{ $office->building->name }}</strong>
            @elseif($office->building  AND !$office->floor)
                {{ $office->building->name }}
            @endif
        </td>
        <td>{{ $office->name }}</td>
        <td>{{ $office->type->name ?? '' }}</td>
        <td>{{ $office->sitting_capacity }}</td>
        <td class="text-center">
            @include('dashboard.working-spaces.components.office-action')
        </td>
    </tr>
@empty
    <tr>
        <td colspan="100%" class="text-center">
            {{ __('general.no_record_found') }}
        </td>
    </tr>
@endforelse
