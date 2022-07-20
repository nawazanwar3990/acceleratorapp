@forelse($records as $record)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $record->id }}</td>
        <td>{{ $record->getFullName() }}</td>
        <td>{{ $record->email }}</td>
        @if( auth()->user()->hasRole(\App\Enum\RoleEnum::BUSINESS_ACCELERATOR))
          {{--  <td class="text-center">
                <a class="btn btn-sm btn-success"
                   href="{{ route('dashboard.subscriptions.create',['id'=>$record->id,'type'=>\App\Enum\SubscriptionTypeEnum::PLAN]) }}">
                    {{__('general.subscriptions')}}
                </a>
            </td>--}}
            <div class="btn-group">
                <button type="button" class="btn btn-outline-secondary btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" aria-haspopup="true">Action</button>
                <ul class="dropdown-menu" style="">
                    <li>
                        <a class="dropdown-item text-black-50" href="{{route('dashboard.subscriptions.create',['fId'=>$record->id])}}">
                            {{__('general.offices')}}  ({{ count($record->offices) }})
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item text-black-50" href="{{ route('dashboard.floors.edit',$record->id) }}">
                            {{__('general.edit')}}
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item text-black-50" href="{{ route('dashboard.floors.show',$record->id) }}">
                            {{__('general.show')}}
                        </a>
                    </li>
                </ul>
            </div>
        @endif
    </tr>
@empty

@endforelse
