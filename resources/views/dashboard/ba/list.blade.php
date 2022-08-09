@forelse($records as $record)
    <tr>
        <td class="text-center">{{ $loop->iteration }}</td>
        <td>{{ $record->user->email }}</td>
        <td>{{ $record->user->getFullName() }}</td>
        <td>
            {{ \App\Enum\AcceleratorTypeEnum::getTranslationKeyBy($record->type)  }}
        </td>
        <td class="text-center">
            <button type="button" class="btn btn-xs btn-info" data-bs-toggle="modal" data-bs-target="#service-model-{{$record->id}}">
                {{ trans('general.view') }}
            </button>
            @include('components.models.registered-services',['id'=>$record->id])
        </td>
        <td class="text-center">
            @if($record->user->subscription)
                @if($record->user->subscription->status==\App\Enum\SubscriptionStatusEnum::APPROVED)
                    {{ $record->user->subscription->status}}
                @else
                    <a class="btn btn-sm btn-success"
                       href="{{ route('website.pending-subscription',['subscribed_id'=>$record->user->id]) }}">
                        {{ trans('general.view') }}
                    </a>
                @endif
            @else
                <a class="btn btn-sm btn-success"
                   href="{{ route('dashboard.packages.create',['type'=>($record->type=='company')?\App\Enum\PackageTypeEnum::BUSINESS_ACCELERATOR:\App\Enum\PackageTypeEnum::BUSINESS_ACCELERATOR_INDIVIDUAL,$record->id,'subscribed_id'=>$record->id]) }}">
                    {{ trans('general.apply_subscription') }}
                </a>
            @endif
        </td>
        <td class="text-center">
            @include('dashboard.components.general.table-actions', [
               'edit' => route('website.ba.create',[$record->type,$record->payment_process,\App\Enum\StepEnum::USER_INFO,$record->id]),
               'delete' => route('dashboard.ba.destroy', $record->id),
           ])
        </td>
    </tr>
@empty

@endforelse
