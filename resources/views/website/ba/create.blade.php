@extends('layouts.website')
@section('css-before')
@endsection
@section('css-after')
@endsection
@section('content')
    <div class="container p-4">
        <div class="row justify-content-center">
            <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            @if($step==\App\Enum\StepEnum::PRINT)
                                @include('website.ba.components.print')
                            @else
                                @include('website.ba.components.steps')
                                <div class="col-lg-8 col-md-8 border-start">
                                    @if($model AND $model->type==\App\Enum\AcceleratorTypeEnum::COMPANY)
                                        @switch($step)
                                            @case(\App\Enum\StepEnum::STEP2)
                                                <h2 class="text-center fw-bold">
                                                    {{ trans('general.company_profile') }}
                                                </h2>
                                                @break
                                            @case(\App\Enum\StepEnum::STEP3)
                                                <h2 class="text-center fw-bold">
                                                    {{ trans('general.services_of_business_accelerator') }}
                                                </h2>
                                                @break
                                            @case(\App\Enum\StepEnum::STEP4)
                                                <h2 class="text-center fw-bold">
                                                    {{ trans('general.create_user_information') }}
                                                </h2>
                                                @break
                                            @case(\App\Enum\StepEnum::STEP5)
                                                <h2 class="text-center fw-bold">
                                                    {{ trans('general.packages') }}
                                                </h2>
                                                @break
                                        @endswitch
                                    @endif
                                    {!! Form::open(['url' =>route('website.ba.store',[$step,($model)?$model->id:null]), 'method' => 'POST','files' => true,'id' =>'plan_form', 'class' => 'solid-validation']) !!}
                                    @include(sprintf('%s.%s', 'website.ba.components', $step))
                                    <div class="card-footer bg-transparent text-center">
                                        @if($prev_step)
                                            <a href="{{ $prev_step }}"
                                               class="btn btn-primary btn-rounded cs-btn text-white">
                                                <i class="bx bx-arrow-to-left"></i> {{ trans('general.prev') }}
                                            </a>
                                        @endif
                                        @if($step==\App\Enum\StepEnum::STEP5)
                                            <a onclick="apply_ba_subscription();"
                                               class="btn btn-primary btn-rounded cs-btn text-white">
                                                {{ trans('general.next') }} <i class="bx bx-arrow-to-right"></i>
                                            </a>
                                        @else
                                            <button type="submit" class="btn btn-primary btn-rounded cs-btn text-white">
                                                {{ trans('general.next') }} <i class="bx bx-arrow-to-right"></i>
                                            </button>
                                        @endif
                                    </div>
                                    {!! Form::close() !!}
                                </div>
                            @endif
                        </div>
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
                    html: '<table class="table table-sm table-bordered"><tr><th style="font-size:13px;">Name</th><td style="font-size:13px;">' + subscription.attr("data-name") + '</td></tr><tr><th style="font-size:13px;">Price</th><td style="font-size:13px;">' + subscription.attr("data-price") + '</td><tr><tr><th style="font-size:13px;">Expire Data</th><td style="font-size:13px;">' + subscription.attr("data-expiry") + '</td></tr><tr><th style="font-size:13px;">Payment Token Number</th><td style="font-size:13px;">' + payment_token_number + '</td></tr><tr><th style="font-size:13px;">Additional Information</th><td style="font-size:13px;">{{ Form::textarea('payment_addition_information',null,['id'=>'payment_addition_information','class'=>'form-control form-control-sm','rows'=>2]) }}</td></tr></table>',
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
                        url: "{{ route('website.ba.store',[$step,($model)?$model->id:null]) }}",
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

        function create_other_company_services() {
            let html = '<table class="table table-bordered table-hover table-sm">' +
                '<thead class="thead-light">' +
                '<tr>' +
                '<th class="text-center">Service Name</th>' +
                '<th class="text-center">Add/Remove</th>' +
                '</tr>' +
                '</thead>' +
                '<tbody>' +
                '<tr>' +
                '<td>' +
                '<input class="form-control form-control-sm" autocomplete="off" required="" name="service_name" type="text">' +
                '</td>' +
                '<td class="text-center">' +
                '<a href="javascript:void(0);" onclick="cloneRow(this);" class="btn btn-xs btn-info mx-1">' +
                ' <i class="bx bx-plus"></i>' +
                '</a>' +
                '<a href="javascript:void(0);" tabindex="18" onclick="removeClonedRow(this);" class="btn btn-xs btn-danger mx-1">' +
                ' <i class="bx bx-minus"></i>' +
                '</a>' +
                '</td>' +
                '</tr>' +
                '</tbody>' +
                '</table>';
            Swal.fire({
                title: 'Add Custom Services',
                html: html,
                width: 900,
                confirmButtonText: 'Add',
                focusConfirm: false,
                preConfirm: () => {
                    let elements = Swal.getPopup().querySelectorAll("input[name=service_name]");
                    return {
                        elements: elements
                    }
                }
            }).then((result) => {
                let other_service_holder = $(".other_services_holder");
                other_service_holder.removeClass('d-block d-none');
                let elements = result.value.elements;
                if (elements.length > 0) {
                    let html = '<table class="table table-sm table-bordered"><tbody>';
                    for (let i = 0; i < elements.length; i++) {
                        html += '<tr><th class="py-2"><input type="text" class="form-control form-control-sm" name="other_services[]" value=' + elements[i].value + '></th></tr>';
                    }
                    html += '</table>';
                    other_service_holder.addClass('d-block').find('.card-body').empty().html(html);
                } else {
                    other_service_holder.addClass('d-none').find('.card-body').empty();
                }
            });
        }

    </script>
@endsection
