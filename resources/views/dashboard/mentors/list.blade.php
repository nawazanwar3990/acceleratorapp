@forelse($records as $record)
    <tr>
        <td class="text-center">{{ $loop->iteration }}</td>
        <td>{{ $record->user->email }}</td>
        <td>{{ $record->user->getFullName() }}</td>
        <td>
            {{ \App\Enum\PaymentTypeProcessEnum::getTranslationKeyBy($record->payment_process)  }}
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
                    <a class="btn btn-sm btn-success"
                       href="{{ route('dashboard.payment-logs.index',$record->user->subscription->id) }}">
                        {{ trans('general.view_payment') }}
                    </a>
                @else
                    <a class="btn btn-sm btn-success"
                       href="{{ route('website.pending-subscription',[$record->user->subscription->id,\App\Enum\RoleEnum::MENTOR]) }}">
                        {{ trans('general.view_subscription') }}
                    </a>
                @endif
            @else
                @if($record->payment_process==\App\Enum\PaymentTypeProcessEnum::PRE_PAYMENT)
                    <a class="btn btn-sm btn-success"
                       href="{{ route('dashboard.packages.create',['type'=>\App\Enum\PackageTypeEnum::MENTOR,'model_id'=>$record->id]) }}">
                        {{ trans('general.create_plan') }}
                    </a>
                @else
                    <a class="btn btn-sm btn-success"
                       href="{{ route('website.mentors.create',[$record->payment_process,\App\Enum\StepEnum::PACKAGES,$record->id]) }}">
                        {{ trans('general.apply_subscription') }}
                    </a>
                @endif
            @endif
            @if($record->created_by==\Illuminate\Support\Facades\Auth::id())
                @include('dashboard.components.general.table-actions', [
                   'edit' => route('website.mentors.create',[$record->payment_process,\App\Enum\StepEnum::USER_INFO,$record->id,'action'=>'edit']),
                   'delete' => route('dashboard.mentors.destroy', $record->id),
               ])
            @endif
        </td>
    </tr>
@empty

@endforelse
