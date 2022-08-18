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
    <section class="invoice_holder mb-4" @guest style="
    max-width: 87%;
    margin: auto;
    padding-top: 24px;
" @endguest>
        <div class="container">
            <div class="row text-right">
                <div class="col-12 text-end">
                    <button class="btn btn-success"
                            onclick="printMe('print_holder','{{ auth()->guest()?route('website.index'):route('dashboard.index') }}')">
                        <i class="fa fa-print"></i> Print Invoice
                    </button>
                    <a class="btn btn-primary text-white"
                       href="{{ route('website.ba.create',[$type,$payment,\App\Enum\StepEnum::USER_INFO,$model->id,'action'=>'edit']) }}">
                        <i class="fa fa-edit"></i> Edit Profile
                    </a>
                    @guest
                        <a class="btn btn-danger" href="{{ route('login') }}">
                            <i class="fa fa-check"></i>Login
                        </a>
                    @endguest
                </div>
            </div>
            <div class="row position-relative p-5 mt-3" id="print_holder">
                <div class="col-12">
                    <div class="panel panel-default invoice">
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
                                @if($type=='company')
                                    <div class="col-12 text-md-start">
                                        <h3>{{ $model->company_name }}</h3>
                                        <p>{{__('general.company_no_of_emp')}} : {{ $model->company_no_of_emp }}</p>
                                        <p>{{__('general.company_date_of_initiation')}}
                                            : {{ $model->company_date_of_initiation }}</p>
                                        <p>{{__('general.company_address')}} : {{ $model->company_address }}</p>
                                        <p>{{__('general.company_contact_no')}} : {{ $model->company_contact_no }}</p>
                                        <p>{{__('general.company_email')}} : {{ $model->company_email }}</p>
                                    </div>
                                @endif
                                <div class="col-12">
                                    @if($type=='company')
                                        <div class="text-md-end"> @endif
                                            <h3>To,</h3>
                                            <p>{{ $model->user->email }}</p>
                                            <p>{{__('general.first_name')}} : {{ $model->user->first_name }}</p>
                                            <p>{{__('general.last_name')}} : {{ $model->user->last_name }}</p>
                                            <p>{{__('general.invoice_date')}}
                                                : {{ \Carbon\Carbon::now()->format('M d Y')}}</p>
                                        </div>
                                        @if($type=='company') </div> @endif
                            </div>
                            <div class="row">
                                <div class="col-8 border-top">
                                    <table class="table custom-datatable  table-hover table-responsive table-striped">
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
                                            <th>{{ trans('general.addition_info') }}</th>
                                            <td>{{ $subscription->payment_addition_information??null }}</td>
                                        </tr>
                                        <tr>
                                            <th>{{ trans('general.subscription_status') }}</th>
                                            <td>{{ \App\Enum\SubscriptionStatusEnum::getTranslationKeyBy($subscription->status) }}</td>
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
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    @if($model->other_services AND count($model->other_services)>0)
                                        <table class="table custom-datatable table-hover table-striped mt-md-5">
                                            <thead>
                                            <tr class="text-center">
                                                <th class="table-head">{{ trans('general.other_services') }}</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($model->other_services as $service)
                                                @if($service)
                                                    <tr>
                                                        <td>{{ $service->service_name}}</td>
                                                    </tr>
                                                @endif
                                            @endforeach
                                            </tbody>
                                        </table>
                                    @endif
                                </div>
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
    </script>
@endsection
