@extends((auth()->user())?'layouts.dashboard':'layouts.website')
@section('innerCSS')
    <style>
        .card {
            border-top: 1px solid #edf1f5 !important;
        }
    </style>
@endsection
@section('css-after')
@endsection
@section('content')
    <div class="container p-4 @auth bg-white @endauth">
        <div class="row justify-content-center">
            <div class="{{ auth()->user()?'col-12':'col-xxl-9 col-xl-9 col-lg-9 col-md-9' }}">
                <div class="row bg-white p-3">
                    @include('website.ba.components.steps')
                    <div class="col-lg-8 col-md-8 border-start">
                        @include('website.ba.components.step-heading')
                        {!! Form::open(['url' =>route('website.ba.store',[$type,$payment,$step,($model)?$model->id:null,$action?'action=edit':'']), 'method' => 'POST','files' => true,'id' =>'plan_form', 'class' => 'solid-validation']) !!}
                        @include(sprintf('%s.%s', 'website.ba.components', $step))
                        <div class="text-center mt-4">
                            @if($step==\App\Enum\StepEnum::PACKAGES)
                                <a onclick="apply_ba_subscription();"
                                   class="btn btn-primary btn-rounded cs-btn text-white">
                                    {{ trans('general.next') }} <i class="bx bx-arrow-to-right"></i>
                                </a>
                            @else
                                @if($action)
                                    <button type="submit" class="btn btn-primary btn-rounded cs-btn text-white">
                                        {{ trans('general.update') }} <i class="bx bx-arrow-to-right"></i>
                                    </button>
                                @else
                                    <button type="submit" class="btn btn-primary btn-rounded cs-btn text-white">
                                        {{ trans('general.next') }} <i class="bx bx-arrow-to-right"></i>
                                    </button>
                                @endif
                            @endif
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('innerScript')
    <script>
        (function () {
        })();

        function apply_ba_subscription() {

            let subscription = $("input[name='subscription_id']:checked");
            let subscription_id = subscription.val();
            if (subscription_id === undefined) {
                showError("First Choose Package for Subscription")
            } else {
                let payment_token_number = Date.now();
                Swal.fire({
                    title: 'Request Package Subscription',
                    html: '<table class="table table-sm table-bordered"><tr><th style="font-size:13px;">Package</th><td style="font-size:13px;">' + subscription.attr("data-name") + '</td></tr><tr><th style="font-size:13px;">Price</th><td style="font-size:13px;">' + subscription.attr("data-price") + '</td><tr><tr><th style="font-size:13px;">Expiry Data</th><td style="font-size:13px;">' + subscription.attr("data-expiry") + '</td></tr><tr><th style="font-size:13px;">Payment Token Number</th><td style="font-size:13px;">' + payment_token_number + '</td></tr><tr><th style="font-size:13px;">Additional Information</th><td style="font-size:13px;">{{ Form::textarea('payment_addition_information',null,['id'=>'payment_addition_information','class'=>'form-control form-control-sm','rows'=>2]) }}</td></tr></table>',
                    confirmButtonText: 'Next',
                    focusConfirm: false,
                    preConfirm: () => {
                        const payment_addition_information = Swal.getPopup().querySelector('#payment_addition_information').value;
                        return {
                            payment_token_number: payment_token_number,
                            payment_addition_information: payment_addition_information
                        }
                    }
                }).then((result) => {
                    let payment_token_number = result.value.payment_token_number;
                    let payment_addition_information = result.value.payment_addition_information;
                    Swal.fire({
                        html: '{!! __('general.request_wait') !!}',
                        allowOutsideClick: () => !Swal.isLoading()
                    });
                    Swal.showLoading();
                    let data = {
                        'payment_token_number': payment_token_number,
                        'payment_addition_information': payment_addition_information,
                        'subscription_id': $("input[name='subscription_id']:checked").val(),
                        'subscription_type': '{{ \App\Enum\SubscriptionTypeEnum::PACKAGE }}',
                        'subscribed_id': '{{ isset($model)?$model->user_id:0 }}'
                    }
                    $.ajax({
                        url: "{{ route('website.ba.store',[$type,$payment,\App\Enum\StepEnum::PACKAGES,($model)?$model->id:null]) }}",
                        method: 'POST',
                        data: data,
                        success: function (response) {
                            if (response.status === true) {
                                location.assign(response.url);
                            }
                        },
                        error: function (response) {
                        }
                    });
                    console.log(data);
                });
            }
        }
    </script>
@endsection
