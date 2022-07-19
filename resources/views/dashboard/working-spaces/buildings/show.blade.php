@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">{{ __('general.floors') }}</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>{{__('general.name')}}</th>
                                    <th>{{__('general.offices')}}</th>
                                </tr>
                                </thead>
                                @if(count($building->floors)>0)
                                    @foreach($building->floors as $floor)
                                        <tbody>
                                        <tr>
                                            <td>
                                                {{ $floor->name }}
                                            </td>
                                            <td>
                                                @if(count($floor->offices)>0)
                                                    <div class="offices_holder">
                                                        <table class="table table-bordered mt-2">
                                                            <thead>
                                                            <tr>
                                                                <th class="fs-13">{{__('general.name')}}</th>
                                                                <th class="fs-13">{{__('general.sitting_capacity')}}</th>
                                                                <th class="fs-13">{{__('general.action')}}</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            @foreach($floor->offices as $office)
                                                                <tr>
                                                                    <td>
                                                                        {{ $office->name }}
                                                                    </td>
                                                                    <td>
                                                                        {{ $office->sitting_capacity }}
                                                                    </td>
                                                                    <td>
                                                                        <a class="btn btn-xs btn-info"
                                                                           href="{{ route('dashboard.office-plans.index',[$office->id]) }}">
                                                                            {{ __('general.plans') }}
                                                                            ({{ count($office->plans) }})
                                                                        </a>
                                                                        @if(\App\Services\OfficeService::already_subscribed($office->id))
                                                                            <a href="{{ route('dashboard.subscriptions.index',['id'=>\App\Services\OfficeService::get_subscribed_id($office->id),'type'=>\App\Enum\SubscriptionTypeEnum::PLAN]) }}"
                                                                               class="btn btn-xs btn-info">
                                                                                {{ trans('general.view_subscription') }}
                                                                            </a>
                                                                        @else
                                                                            <a class="btn btn-xs btn-info"
                                                                               onclick="apply_subscription('{{ $office->plans}}','{{$office->id}}','{{ $office->sitting_capacity }}');">
                                                                                {{ trans('general.subscription') }}
                                                                            </a>
                                                                        @endif
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                @endif
                                            </td>
                                        </tr>
                                        </tbody>
                                    @endforeach
                                @endif
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Essential Information</h5>
                            <div class="table-responsive">
                                <table class="table no-border">
                                    <tbody class="text-dark">
                                    <tr>
                                        <td>{{__('general.name')}}</td>
                                        <td>{{$building->name}}</td>
                                    </tr>
                                    <tr>
                                        <td>{!! __('general.length_ft') !!}</td>
                                        <td>{{$building->length}}</td>
                                    </tr>
                                    <tr>
                                        <td>{!!__('general.width_ft') !!}</td>
                                        <td>{{$building->width}}</td>
                                    </tr>
                                    <tr>
                                        <td>{!! __('general.saleable_area_sft') !!}</td>
                                        <td>{{$building->area}}</td>
                                    </tr>
                                    <tr>
                                        <td>{{__('general.building_type')}}</td>
                                        <td> @if($building->building_type)
                                                {{ \App\Services\BuildingService::buildingTypesForDropdown($building->building_type)  }}
                                            @else
                                            @endif</td>
                                    </tr>
                                    <tr>
                                        <td>{{__('general.entry_gates')}}</td>
                                        <td> @if($building->entry_gates)
                                                {{ \App\Services\BuildingService::buildingEntryGatesForDropdown($building->entry_gates)  }}
                                            @else
                                            @endif</td>
                                    </tr>
                                    <tr>
                                        <td>{{__('general.no_of_floors')}}</td>
                                        <td>{{$building->no_of_floors}}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('innerScript')
    <script>
        function apply_subscription(object, model_id, sitting_capacity) {
            object = JSON.parse(object);
            let html = "<table class='table table-bordered'><thead><tr><th>{{__('general.name')}}</th><th>{{__('general.price')}}</th><th>{{__('general.basic_service')}}</th><th>{{__('general.additional_service')}}</th><th>{{__('general.action')}}</th></tr></thead><tbody>";
            object.forEach((value, index) => {
                let row = "<tr>";
                row += "<td>" + value.name + "</td>";
                row += "<td>" + value.price + " {{ \App\Services\GeneralService::get_default_currency() }}</td>";
                let basic_services = value.basic_services;
                if (basic_services.length > 0) {
                    let basic_html = '<ul class="list-group list-group-flush bg-transparent">'
                    basic_services.forEach((basic_value, basic_index) => {
                        basic_html += '<li class="list-group-item py-0 border-0  bg-transparent px-0"> <i class="bx bx-check text-success"></i> <small><strong class="text-infogit">' + basic_value.name + '</small></li>';
                    });
                    basic_html += "</ul>";
                    row += "<td>" + basic_html + "</td>";
                }
                let additional_services = value.additional_services;
                if (additional_services.length > 0) {
                    let additional_html = '<ul class="list-group list-group-flush bg-transparent">'
                    additional_services.forEach((additional_value, additional_index) => {
                        additional_html += '<li class="list-group-item py-0 border-0  bg-transparent px-0"> <i class="bx bx-check text-success"></i> <small><strong class="text-infogit">' + additional_value.name + '</small></li>';
                    });
                    additional_html += "</ul>";
                    row += "<td>" + additional_html + "</td>";
                }
                let checked = '';
                if (index === 0) {
                    checked = 'checked';
                }
                row += "<td><input type='radio' name='subscription_id'" +
                    " class='subscription_id' " +
                    " value=" + value.id + " " + checked + "" +
                    " data-price=" + value.price +
                    " data-name=" + value.name +
                    "></td>";
                row += "</tr>";
                html += row;
            });
            html += "</tbody></table>";
            Swal.fire({
                title: 'Select Plan',
                html: html,
                width: 900,
                confirmButtonText: 'Next',
                focusConfirm: false,
                preConfirm: () => {
                    const subscription_id = Swal.getPopup().querySelector("input[name=subscription_id]:checked").value;
                    const price = Swal.getPopup().querySelector("input[name=subscription_id]:checked").getAttribute('data-price');
                    const name = Swal.getPopup().querySelector("input[name=subscription_id]:checked").getAttribute('data-name');
                    return {
                        subscription_id: subscription_id,
                        price: price,
                        name: name
                    }
                }
            }).then((result) => {
                let subscription_id = result.value.subscription_id;
                let price = parseFloat(result.value.price) * parseFloat(sitting_capacity);
                let name = result.value.name;
                let html = "<table class='table table-bordered my-2'><thead><tr><th class='fs-13' style='padding:5px; !important'>{{ __('general.plan') }}</th><th class='fs-13' style='padding:5px; !important'>{{ __('general.price') }}</th></tr></thead>";
                html += "<tbody><tr><td class='fs-13' style='padding:5px; !important' >" + name + "</td><td class='fs-13' style='padding:5px; !important'>" + price + " {{ \App\Services\GeneralService::get_default_currency() }}</td></tr></tbody></table>";
                Swal.fire({
                    title: 'Apply Subscription',
                    html: html + `{!!  Html::decode(Form::label('payment_type' ,__('general.payment_type').'<i class="text-danger">*</i>' ,['class'=>'form-label'])) !!}{{ Form::select('payment_type',\App\Enum\PaymentTypeEnum::getTranslationKeys(),\App\Enum\PaymentTypeEnum::OFFLINE,['class'=>'form-control','id'=>'payment_type','placeholder'=>'Select Payment Type']) }}{!!  Html::decode(Form::label('customer_id' ,__('general.customer').'<i class="text-danger">*</i>' ,['class'=>'form-label'])) !!}{{ Form::select('customer_id',\App\Services\PersonService::pluck_customers(),null,['class'=>'form-control','id'=>'customer_id','placeholder'=>'Select Customer']) }}`,
                    confirmButtonText: 'Next',
                    focusConfirm: false,
                    preConfirm: () => {
                        const payment_type = Swal.getPopup().querySelector('#payment_type').value
                        const customer_id = Swal.getPopup().querySelector('#customer_id').value
                        if (!payment_type) {
                            Swal.showValidationMessage(`First Choose Payment Type`)
                        }
                        if (!customer_id) {
                            Swal.showValidationMessage(`First Choose Customer`)
                        }
                        return {
                            payment_type: payment_type,
                            subscription_id: subscription_id,
                            subscribed_id: customer_id,
                            price: price,
                        }
                    }
                }).then((result) => {
                    let payment_type = result.value.payment_type;
                    let subscription_id = result.value.subscription_id;
                    let subscribed_id = result.value.subscribed_id;
                    let price = result.value.price;
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
                                return {
                                    transaction_id: transaction_id,
                                    payment_type: payment_type,
                                    subscription_id: subscription_id,
                                    subscribed_id: subscribed_id,
                                    price: price,
                                }
                            }
                        }).then((result) => {
                            let payment_type = result.value.payment_type;
                            let subscription_id = result.value.subscription_id;
                            let price = result.value.price;
                            let transaction_id = result.value.transaction_id;
                            Swal.fire({
                                html: '{!! __('general.request_wait') !!}',
                                allowOutsideClick: () => !Swal.isLoading()
                            });
                            Swal.showLoading();
                            let data = {
                                'payment_type': payment_type,
                                'transaction_id': transaction_id,
                                'subscription_id': subscription_id,
                                'subscription_type': '{{ \App\Enum\SubscriptionTypeEnum::PLAN }}',
                                'model_id': model_id,
                                'price': price,
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
                        });
                    } else {
                        Swal.fire(
                            'Pending!',
                            'This will be don later!',
                            'pending'
                        )
                    }
                });
            });
        }
    </script>
@endsection
