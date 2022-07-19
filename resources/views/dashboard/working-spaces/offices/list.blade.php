@forelse($records as $record)
    <tr>
        <td class="text-center">{{ $loop->iteration }}</td>
        <td>
            @if($record->building  AND $record->floor)
                <strong>{{ $record->floor->name }}</strong> of <strong>{{ $record->building->name }}</strong>
            @elseif($record->building  AND !$record->floor)
                {{ $record->building->name }}
            @endif
        </td>
        <td>{{ $record->name }}</td>
        <td>{{ $record->type->name ?? '' }}</td>
        <td>{{ $record->sitting_capacity }}</td>
        <td class="text-center">
            <a class="btn btn-xs btn-info"
               href="{{ route('dashboard.office-plans.index',[$record->id,'type'=>'office']) }}">
                {{ __('general.plans') }}
                ({{ count($record->plans) }})
            </a>
            @if(\App\Services\OfficeService::already_subscribed($record->id))
                <a href="{{ route('dashboard.subscriptions.index',['id'=>\App\Services\OfficeService::get_subscribed_id($record->id),'type'=>\App\Enum\SubscriptionTypeEnum::PLAN]) }}"
                   class="btn btn-xs btn-info">
                    {{ trans('general.view_subscription') }}
                </a>
            @else
                @if(count($record->plans)>0)
                    <a class="btn btn-xs btn-info"
                       onclick="apply_subscription('{{ $record->plans}}','{{$record->id}}','{{ $record->sitting_capacity }}');">
                        {{ trans('general.subscription') }} <i class="bx bx-plus-circle"></i>
                    </a>
                @endif
            @endif
        </td>
    </tr>
@empty
    <tr>
        <td colspan="100%" class="text-center">
            {{ __('general.no_record_found') }}
        </td>
    </tr>
@endforelse
