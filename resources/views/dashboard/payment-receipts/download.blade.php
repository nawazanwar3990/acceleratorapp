@extends('layouts.dashboard')
@section('content')
    <section class="bg-white p-4">
        <div class="row mb-4">
            <div class="col-12 text-right my-2">
                <a class="btn btn-info" onclick="goBack();"><i class="bx bx-arrow-to-left"></i> Back</a>
                <a class="btn btn-info" id="download_btn" onclick="downloadPdf();">Download <i
                        class="bx bx-download"></i></a>
            </div>
        </div>
        <div class="row" id="download-holder">
            <div class="col-12">
                <div class="panel panel-default invoice shadow-none">
                    <div class="panel-body">
                        <div class="invoice-ribbon">
                            <div class="ribbon-inner">PAID</div>
                        </div>
                        <div class="row">
                            <div class="col-12 top-right">
                                <h3 class=""><u style="color: #212020; letter-spacing: 3px">INVOICE</u></h3>
                                <span style="letter-spacing: 4px">No -{{ $model->id }}</span>
                            </div>
                            <div class="col-12 text-end">
                                <img src="{{ asset('images/business/ot-logo.png') }}" alt="{{ $model->name }}"
                                     class="logo-img">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            @if($model->type=='company')
                                <div class="col-12 text-md-start">
                                    <h3>{{ $model->company_name }}</h3>
                                    <p>{{__('general.company_no_of_emp')}} : {{ $model->company_no_of_emp }}</p>
                                    <p>{{__('general.company_date_of_initiation')}}
                                        : {{ $model->company_date_of_initiation }}</p>
                                    <p>{{__('general.company_address')}} : {{ $model->company_address }}</p>
                                    <p>{{__('general.company_contact_no')}}
                                        : {{ $model->company_contact_no }}</p>
                                    <p>{{__('general.company_email')}} : {{ $model->company_email }}</p>
                                </div>
                            @endif
                            <div class="col-12">
                                @if($model->type=='company')
                                    <div class="text-md-end"> @endif
                                        <h3>To,</h3>
                                        <p>{{ $model->user->email }}</p>
                                        <p>{{__('general.first_name')}} : {{ $model->user->first_name }}</p>
                                        <p>{{__('general.last_name')}} : {{ $model->user->last_name }}</p>
                                        <p>{{__('general.invoice_date')}}
                                            : {{ \Carbon\Carbon::now()->format('M d Y')}}</p>
                                    </div>
                                    @if($model->type=='company') </div> @endif
                        </div>
                        <div class="row">
                            <div class="col-8 border-top">
                                <table
                                    class="table custom-datatable  table-hover table-responsive table-striped">
                                    <thead>
                                    <tr>
                                        <th colspan="2" class="table-head text-center">Package Info</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th>{{ trans('general.package_name') }}</th>
                                        <td>{{ $subscription->package->name??null }}</td>
                                    </tr>
                                    <tr>
                                        <th>{{ trans('general.price') }}</th>
                                        <td>{{ $subscription->price??null }} {{ \App\Services\GeneralService::get_default_currency() }}</td>
                                    </tr>
                                    <tr>
                                        <th>{{ trans('general.expire_date') }}</th>
                                        <td>
                                            <strong>{{ $subscription->package->duration_limit }}</strong>
                                            @if($subscription->package->duration_type->slug===\App\Enum\DurationEnum::Daily)
                                                Days
                                            @elseif($subscription->package->duration_type->slug===\App\Enum\DurationEnum::MONTHLY)
                                                Months
                                            @elseif($subscription->package->duration_type->slug===\App\Enum\DurationEnum::WEEKLY)
                                                Weeks
                                            @elseif($subscription->package->duration_type->slug===\App\Enum\DurationEnum::YEARLY)
                                                Years
                                            @endif
                                            After Subscription
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>{{ trans('general.payment_token_number') }}</th>
                                        <td>{{ $subscription->payment_token_number??null }}</td>
                                    </tr>
                                    <tr>
                                        <th>{{ trans('general.transaction_id') }}</th>
                                        <td>{{ $receipt->transaction_id??null }}</td>
                                    </tr>
                                    <tr>
                                        <th>{{ trans('general.payment_type') }}</th>
                                        <td>{{ \App\Enum\PaymentTypeEnum::getTranslationKeyBy($receipt->payment_type) }}</td>
                                    </tr>
                                    <tr>
                                        <th>{{ trans('general.payment_for') }}</th>
                                        <td>{{ \App\Enum\PaymentForEnum::getTranslationKeyBy($receipt->payment_for) }}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-4 border-top">
                                <table class="table custom-datatable  table-hover table-striped ">
                                    <thead>
                                    <tr class="text-center">
                                        <th class="table-head">{{ trans('general.your_services') }}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($subscription->package->services as $service)
                                        <tr class="text-start">
                                            <td>{{ $service->name }}</td>
                                            <td class="fs-13">
                                                @if($service->slug=='incubator')
                                                    {{ ($service->pivot->building_limit)=='∞'?'Unlimited':$service->pivot->building_limit }} {{ trans('general.buildings') }}
                                                    <br>
                                                    {{ ($service->pivot->floor_limit)=='∞'?'Unlimited':$service->pivot->floor_limit }} {{ trans('general.floors') }}
                                                    <br>
                                                    {{ ($service->pivot->office_limit)=='∞'?'Unlimited':$service->pivot->office_limit }}{{ trans('general.offices') }}
                                                @else
                                                    {{ ($service->pivot->limit)=='∞'?'Unlimited':$service->pivot->limit }}
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('innerScript')
    <script>
        function goBack() {
            window.history.back();
        }

        function downloadPdf() {
            const element = document.getElementById('download-holder');
            html2pdf(element);
        }
    </script>
@endsection
