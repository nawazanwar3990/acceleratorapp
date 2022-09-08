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
        <td></td>
        <td>{{ $office->type->name ?? '' }}</td>
        <td>{{ $office->sitting_capacity }}</td>
        <td class="text-center">
            <a class="btn btn-xs btn-info" href="{{ route('dashboard.offices.edit',$office->id) }}">
                {{__('general.edit')}}
            </a>
            <a class="btn btn-xs btn-info" href="{{ route('dashboard.offices.show',$office->id) }}">
                {{__('general.show')}}
            </a>
            <a class="btn btn-xs btn-info" href="{{ route('dashboard.office-plans.index',[$office->id]) }}">
                {{ __('general.plans') }} ({{ count($office->plans) }})
            </a>
        </td>
    </tr>
@empty

@endforelse
