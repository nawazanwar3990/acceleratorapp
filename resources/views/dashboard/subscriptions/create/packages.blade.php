@extends('layouts.dashboard')
@section('css-before')
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow-none pt-0">
                @include('dashboard.components.general.form-list-header')
                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        @include('dashboard.components.general.table-headings',['headings'=>\App\Enum\TableHeadings\PackageTableHeading::getTranslationKeys()])
                        <tbody>
                        @forelse($records as $record)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    @foreach($record->types as $type)
                                        <button class="btn btn-xs btn-info mx-1">{{ $type }}</button>
                                    @endforeach
                                </td>
                                <td>{{ $record->name }}</td>
                                <td>
                                    @isset($record->duration_type)
                                        {{ $record->duration_type->name }}
                                    @else
                                        --
                                    @endisset
                                </td>
                                <td>
                                    {{ $record->duration_limit }}
                                    @if($record->duration_type->slug===\App\Enum\DurationEnum::Daily)
                                        Days
                                    @elseif($record->duration_type->slug===\App\Enum\DurationEnum::MONTHLY)
                                        Months
                                    @elseif($record->duration_type->slug===\App\Enum\DurationEnum::WEEKLY)
                                        Weeks
                                    @elseif($record->duration_type->slug===\App\Enum\DurationEnum::YEARLY)
                                        Years
                                    @endif
                                </td>
                                <td>{{ $record->price }}</td>
                                <td>{{ $record->reminder_days }}</td>
                                <td style="width: 230px;">
                                    <UL class="list-group list-group-flush bg-transparent">
                                        @foreach($record->services as $service)
                                            <li class="list-group-item py-0 border-0  bg-transparent px-0">
                                                <i class="bx bx-check text-success"></i> <small><strong
                                                            class="text-infogit ">{{ ($service->pivot->limit)=='∞'?'Unlimited':$service->pivot->limit }}</strong> {{ str_replace('_',' ',$service->name) }}
                                                </small>
                                            </li>
                                        @endforeach
                                    </UL>
                                </td>
                                <td class="text-center">
                                    {!! Form::radio('subscription_id',$record->id,false) !!}
                                </td>
                            </tr>
                        @empty
                        @endforelse
                        </tbody>
                    </table>
                </div>
                @if(count($records)>0)
                    <div class="my-3 text-center">
                        <a class="btn btn-info"
                           onclick="apply_subscription();">{{ trans('general.save') }}</a>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
@section('innerScript')
    <script>

        function apply_subscription() {
            let subscription_id = $("input[name='subscription_id']:checked").val();
            if (subscription_id === undefined) {
                showError("First Choose Package for Subscription")
            } else {
                Swal.fire({
                    title: 'Apply Subscription',
                    html: `{!!  Html::decode(Form::label('payment_type' ,__('general.payment_type').'<i class="text-danger">*</i>' ,['class'=>'form-label'])) !!}{{ Form::select('payment_type',\App\Enum\PaymentTypeEnum::getTranslationKeys(),\App\Enum\PaymentTypeEnum::OFFLINE,['class'=>'form-control','id'=>'payment_type','placeholder'=>'Select Payment Type']) }}`,
                    confirmButtonText: 'Next',
                    focusConfirm: false,
                    preConfirm: () => {
                        const payment_type = Swal.getPopup().querySelector('#payment_type').value
                        if (!payment_type) {
                            Swal.showValidationMessage(`First Choose Payment Type`)
                        }
                        return {payment_type: payment_type}
                    }
                }).then((result) => {
                    let payment_type = result.value.payment_type;
                    if (payment_type === '{{ \App\Enum\PaymentTypeEnum::OFFLINE }}') {
                        Swal.fire({
                            title: 'Manage Payment',
                            html: `{!!  Html::decode(Form::label('transaction_id' ,__('general.transaction_id').'<i class="text-danger">*</i>' ,['class'=>'form-label'])) !!}{{ Form::text('transaction_id',null,['class'=>'form-control','id'=>'transaction_id']) }}`,
                            confirmButtonText: 'Submit',
                            focusConfirm: false,
                            preConfirm: () => {
                                const transaction_id = Swal.getPopup().querySelector('#transaction_id').value
                                if (!transaction_id) {
                                    Swal.showValidationMessage(`First Enter Transaction ID`)
                                }
                                return {transaction_id: transaction_id}
                            }
                        }).then((result) => {
                            Swal.fire({
                                html: '{!! __('general.request_wait') !!}',
                                allowOutsideClick: () => !Swal.isLoading()
                            });
                            Swal.showLoading();
                            let data = {
                                'payment_type': payment_type,
                                'transaction_id': result.value.transaction_id,
                                'subscription_id': $("input[name='subscription_id']:checked").val(),
                                'subscription_type': '{{ $type }}',
                                'subscribed_id': {{ request()->query('id') }}
                            }
                            $.ajax({
                                url: "{{ route('dashboard.subscriptions.store') }}",
                                method: 'POST',
                                data: data,
                                success: function (response) {
                                    if (response.status === true) {
                                        location.assign(response.route);
                                    }
                                },
                                error: function (response) {
                                }
                            });
                            console.log(data);
                        });
                    } else {
                        Swal.fire(
                            'Pending!',
                            'This will be don later!',
                            'pending'
                        )
                    }
                });
            }
        }
    </script>
@endsection
