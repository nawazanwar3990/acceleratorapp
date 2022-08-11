@forelse($records as $record)
    <tr>
        <td class="text-center">{{ $loop->iteration }}</td>
        <td>{{ $record->user->email }}</td>
        <td>{{ $record->user->getFullName() }}</td>
        <td>
            {{ \App\Enum\AcceleratorTypeEnum::getTranslationKeyBy($record->type)  }}
        </td>
        <td>
            {!! \App\Enum\PaymentTypeProcessEnum::getTranslationKeyBy($record->payment_process) !!}
        </td>
        <td>
            <button type="button" class="btn btn-xs btn-info" data-bs-toggle="modal"
                    data-bs-target="#service-model-{{$record->id}}">
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
                @if($record->payment_process==\App\Enum\PaymentTypeProcessEnum::PRE_PAYMENT)
                    <a class="btn btn-sm btn-success"
                       href="{{ route('dashboard.packages.create',['type'=>($record->type=='company')?\App\Enum\PackageTypeEnum::BUSINESS_ACCELERATOR:\App\Enum\PackageTypeEnum::BUSINESS_ACCELERATOR_INDIVIDUAL,'model_id'=>$record->id]) }}">
                        {{ trans('general.apply_subscription') }}
                    </a>
                @else
                    <a class="btn btn-sm btn-success"
                       href="{{ route('website.ba.create',[$record->type,$record->payment_process,\App\Enum\StepEnum::PACKAGES,$record->id,'action'=>'edit']) }}">
                        {{ trans('general.apply_subscription') }}
                    </a>
                @endif
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
