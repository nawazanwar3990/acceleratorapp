@extends('layouts.dashboard')
@section('css-before')
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow-none pt-0">
                @include('dashboard.components.general.form-list-header')
                <div class="card-body">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">{{ trans('general.packages') }}</h5>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th scope="col">Type</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Duration Type</th>
                                    <th scope="col">Duration Limit</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Module</th>
                                    <th class="text-center">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($packages as $package)
                                    <td>{{ \App\Enum\PackageTypeEnum::getTranslationKeyBy($package->type) }}</td>
                                    <td>{{ $package->name }}</td>
                                    <td>
                                        @isset($package->duration_type)
                                            {{ $package->duration_type->name }}
                                        @else
                                            --
                                        @endisset
                                    </td>
                                    <td>
                                        {{ $package->duration_limit }}
                                        @if($package->duration_type->slug===\App\Enum\DurationEnum::Daily)
                                            Days
                                        @elseif($package->duration_type->slug===\App\Enum\DurationEnum::MONTHLY)
                                            Months
                                        @elseif($package->duration_type->slug===\App\Enum\DurationEnum::WEEKLY)
                                            Weeks
                                        @elseif($package->duration_type->slug===\App\Enum\DurationEnum::YEARLY)
                                            Years
                                        @endif
                                    </td>
                                    <td>{{ $package->price }}</td>
                                    <td style="width: 230px;">
                                        <UL class="list-group list-group-flush bg-transparent">
                                            @foreach($package->modules as $module)
                                                <li class="list-group-item py-0 border-0  bg-transparent px-0">
                                                    <i class="bx bx-check text-success"></i> <small><strong
                                                            class="text-infogit ">{{ $module->pivot->limit }}</strong> {{ str_replace('_',' ',$module->name) }}
                                                    </small>
                                                </li>
                                            @endforeach
                                        </UL>
                                    </td>
                                    <td class="text-center">
                                        <div class="form-check">
                                            {!! Form::radio('package_id',$package->id,false,['class'=>'form-check-input']) !!}
                                        </div>
                                    </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="9" class="text-center p-5">
                                            <a href="{{ route('dashboard.packages.create') }}"
                                               class="btn btn-info">
                                                {{ trans('general.new_package') }} <i class="bx bx-plus-circle"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                    @if(count($packages)>0)
                        <div class="my-3 text-center">
                            <a class="btn btn-info" onclick="apply_subscription();">{{ trans('general.save') }}</a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
@section('innerScript')
    <script>

        function apply_subscription() {
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
                            'package_id': $("input[name='package_id']:checked").val(),
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
    </script>
@endsection
