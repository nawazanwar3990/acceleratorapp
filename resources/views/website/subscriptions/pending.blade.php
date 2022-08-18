@extends((auth()->user())?'layouts.dashboard':'layouts.website')
@section('innerCSS')
    <style>
        .card {
            border-top: 1px solid #edf1f5 !important;
        }
    </style>
@endsection
@section('css-before')
@endsection
@section('css-after')
@endsection
@section('content')
    <div class="container p-4">
        <div class="row justify-content-center">
            <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8">
                <h3 class="text-center fw-bold">{{__('general.pending_subscription')}}</h3>
                <div class="row justify-content-center mt-3 pt-3">
                    <div class="col-12">
                        <div class="card  bg-white mb-0">
                            <div class="card-header">
                                <h4 class="fw-bold mb-0">{{__('general.package_info')}}</h4>
                            </div>
                            <div class="card-body px-0 py-0">
                                <table class="table custom-datatable table-bordered mb-0">
                                    <tr>
                                        <th>{{__('general.package_name')}}</th>
                                        <td>{{ str_replace('_',' ',$subscription->package->name) }}</td>
                                    </tr>
                                    <tr>
                                        <th>{{__('general.price')}}</th>
                                        <td>{{ $subscription->price }} {{ \App\Services\GeneralService::get_default_currency() }}</td>
                                    </tr>
                                    <tr>
                                        <th>{{__('general.payment_token_number')}}</th>
                                        <td>{{ $subscription->payment_token_number }}</td>
                                    </tr>
                                    <tr>
                                        <th>{{__('general.created_date')}}</th>
                                        <td>{{ $subscription->created_at }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 my-3 text-center">
                        @if($subscription_type)
                            @php
                                $model = \App\Services\GeneralService::get_models_by_role($subscription_type,$subscription_id);
                            @endphp
                            @if($subscription_type==\App\Enum\RoleEnum::BUSINESS_ACCELERATOR)
                                <a class="btn btn-info btn-sm"
                                   href="{{ route('website.ba.create',[$model->type,$model->payment_process,\App\Enum\StepEnum::USER_INFO,$model->id,'action'=>'edit']) }}">
                                    {{ trans('general.edit_profile') }}
                                </a>
                            @endif
                            @if($subscription_type==\App\Enum\RoleEnum::FREELANCER)
                                <a class="btn btn-info btn-sm"
                                   href="{{ route('website.freelancers.create',[$model->type,$model->payment_process,\App\Enum\StepEnum::USER_INFO,$model->id,'action'=>'edit']) }}">
                                    {{ trans('general.edit_profile') }}
                                </a>
                            @endif
                            @if($subscription_type==\App\Enum\RoleEnum::MENTOR)
                                <a class="btn btn-info btn-sm"
                                   href="{{ route('website.mentors.create',[$model->payment_process,\App\Enum\StepEnum::USER_INFO,$model->id,'action'=>'edit']) }}">
                                    {{ trans('general.edit_profile') }}
                                </a>
                            @endif
                            <a class="btn btn-info btn-sm" onclick="apply_payment();">
                                {{ trans('general.apply_payment') }} <i class="bx bx-plus-circle"></i>
                            </a>
                        @endif
                    </div>
                    <div class="col-12">
                        {{--  @if(\Illuminate\Support\Facades\Session::has('upload_receipt_success') OR $media)
                              <div class="alert alert-info alert-dismissible show" role="info">
                                  <strong>info!! </strong>
                                  @if($media)
                                      Wait, Your Request is under processed and let you while Approving Your Subscription
                                  @else
                                      {{ \Illuminate\Support\Facades\Session::get('upload_receipt_success') }}
                                  @endif
                                  <button type="button" class="btn-close" data-bs-dismiss="alert"
                                          aria-label="Close"></button>
                              </div>
                          @else
                          @endif--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('inner-script-files')
@endsection
@section('innerScript')
    <script>
        function apply_payment() {
            Swal.fire({
                title: '{{ trans('general.apply_payment') }}',
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
                        html: `<div class="text-left fs-13">{!!  Html::decode(Form::label('transaction_id' ,__('general.transaction_id').'<i class="text-danger">*</i>' ,['class'=>'form-label'])) !!}{{ Form::text('transaction_id',null,['class'=>'form-control','id'=>'transaction_id']) }}{!!  Html::decode(Form::label('file_name' ,__('general.receipt'),['class'=>'form-label'])) !!}{{ Form::file('file_name',['class'=>'form-control dropify','id'=>'file_name']) }}</div>`,
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
                            html: '<?php echo __('general.request_wait'); ?>',
                            allowOutsideClick: () => !Swal.isLoading()
                        });
                        Swal.showLoading();
                        let data = {
                            'payment_type': payment_type,
                            'transaction_id': result.value.transaction_id,
                            'subscription_id': "{{ $subscription->id }}",
                            'subscribed_id': {{ $subscription_id }},
                            'payment_for': 'package_approval',
                            'price': '{{ $subscription->package->price }}',
                        }
                        $.ajax({
                            url: "{{ route('website.payment-receipts.store')}}",
                            method: 'POST',
                            data: data,
                            success: function (response) {
                                if (response.status === true) {
                                    location.reload();
                                }
                            },
                            error: function (response) {
                            }
                        });
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
