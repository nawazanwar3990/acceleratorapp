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
            <a class="btn btn-xs btn-info" href="{{ route('dashboard.offices.edit',$office->id) }}">
                {{__('general.edit')}}
            </a>
            <a class="btn btn-xs btn-info" href="{{ route('dashboard.offices.show',$office->id) }}">
                {{__('general.show')}}
            </a>
            <a class="btn btn-xs btn-info" href="{{ route('dashboard.office-plans.index',[$office->id]) }}">
                {{ __('general.plans') }}({{ count($office->plans) }})
            </a>
            @if(\App\Services\OfficeService::already_subscribed($office->id))
                <a href="{{ route('dashboard.subscriptions.index',['id'=>\App\Services\OfficeService::get_subscribed_id($office->id),'type'=>\App\Enum\SubscriptionTypeEnum::PLAN]) }}"
                   class="btn btn-xs btn-info">
                    {{ trans('general.view_subscription') }}
                </a>
            @else
                @if(count($office->plans)>0)
                    <a class="btn btn-xs btn-info"
                       onclick="apply_subscription('{{ $office->plans}}','{{$office->id}}','{{ $office->sitting_capacity }}');">
                        {{ trans('general.subscription') }} <i class="bx bx-plus-circle"></i>
                    </a>
                @endif
            @endif
        </td>
    </tr>
@empty

@endforelse
