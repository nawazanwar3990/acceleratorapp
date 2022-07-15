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
                        @include('dashboard.components.general.table-headings',['headings'=>\App\Enum\TableHeadings\WorkingSpace\OfficeTableHeadingEnum::getTranslationKeys()])
                        <tbody>
                        @forelse($records as $record)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td>{{ $record->name }}</td>
                                <td>{{ $record->number }}</td>
                                <td>{{ $record->type->name ?? '' }}</td>
                                <td>
                                    @if($record->view)
                                        {{ \App\Services\OfficeService::getOfficeViewsForDropdown($record->view)}}
                                    @else
                                    @endif
                                </td>
                                <td>{{ $record->sitting_capacity }}</td>
                                <td>
                                    <ul class="list-group list-group-flush bg-transparent">
                                        <li class="list-group-item py-0 border-0  bg-transparent px-0">
                                            <small>
                                                <strong>{{ __('general.length') }}</strong>: {{ $record->length }}
                                            </small>
                                        </li>
                                        <li class="list-group-item py-0 border-0  bg-transparent px-0">
                                            <small>
                                                <strong>{{ __('general.width') }}</strong>: {{ $record->width }}
                                            </small>
                                        </li>
                                        <li class="list-group-item py-0 border-0  bg-transparent px-0">
                                            <small>
                                                <strong>{{ __('general.height') }}</strong>: {{ $record->height }}
                                            </small>
                                        </li>
                                        <li class="list-group-item py-0 border-0  bg-transparent px-0">
                                            <small>
                                                <strong>{{ __('general.area') }}</strong>: {{ $record->area }}
                                            </small>
                                        </li>
                                    </ul>
                                </td>
                                <td>
                                    @if(count($record->plans)>0)
                                        <ul class="list-group list-group-flush bg-transparent">
                                            @foreach($record->plans as $plan)
                                                <li class="list-group-item py-0 border-0  bg-transparent px-0">
                                                    <i class="bx bx-check text-success"></i>
                                                    <small>
                                                        <strong class="text-infogit ">{{ $plan->name }}</strong>
                                                        ({{ $plan->price }} {{ \App\Services\GeneralService::get_default_currency() }}
                                                        )
                                                    </small>
                                                </li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </td>
                                <td class="text-center">
                                    <div class="my-3 text-center">
                                        <a class="btn btn-info"
                                           onclick="apply_subscription('{{ $record->plans}}');">{{ trans('general.apply_subscription') }}</a>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="100%" class="text-center">
                                    {{ __('general.no_record_found') }}
                                </td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('innerScript')
    <script>

        function apply_subscription(object) {
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
                row += "<td><input type='radio' name='subscription_id' value=" + value.id + "></td>";
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
    </script>
@endsection
