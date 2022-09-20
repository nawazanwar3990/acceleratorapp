@extends('layouts.dashboard')
@section('content')
    <div class="row mb-4">
        <div class="col-12 text-right my-2">
            <a class="btn btn-info" onclick="goBack();"><i class="bx bx-arrow-to-left"></i> Back</a>
            <a class="btn btn-info" id="download_btn" onclick="downloadPdf();">Download <i
                    class="bx bx-download"></i></a>
        </div>
    </div>
    <div class="row bg-white p-3" id="download-holder">
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
        {{--  <div class="col-12">
              <div class="card" style="border-top:0 !important;">
                  <div class="card-header">
                      <h4 class="fw-bold mb-0">{{__('general.package_info')}}</h4>
                  </div>
                  <div class="card-body px-0 py-0">
                      <ul class="list-group list-group-flush">
                          <li class="list-group-item">
                              <span>{{__('general.package_name')}}</span>
                              <span
                                  class="pull-right text-body">{{ str_replace('_',' ',$subscription->package->name) }}</span>
                          </li>
                          <li class="list-group-item">
                              <span>{{__('general.price')}}</span>
                              <span
                                  class="pull-right">{{ $subscription->price }} {{ \App\Services\GeneralService::get_default_currency() }}</span>
                          </li>
                          <li class="list-group-item">
                              <span>{{__('general.payment_token_number')}}</span>
                              <span class="pull-right">{{ $subscription->payment_token_number }}</span>
                          </li>
                          <li class="list-group-item">
                              <span>{{__('general.created_date')}}</span>
                              <span class="pull-right">{{ $subscription->created_at }}</span>
                          </li>
                      </ul>
                  </div>
              </div>
              @if($receipt)
                  <div class="card" style="border-top:0 !important;">
                      <div class="card-header">
                          <h4 class="card-title mb-0 fw-bold">{{ trans('general.payment_info') }}</h4>
                      </div>
                      <div class="card-body px-0 py-0">
                          <ul class="list-group list-group-flush">
                              <li class="list-group-item">
                                  <span>{{__('general.payment_type')}}</span>
                                  <span
                                      class="pull-right">{{ \App\Enum\PaymentTypeEnum::getTranslationKeyBy($receipt->payment_type) }}</span>
                              </li>
                              <li class="list-group-item">
                                  <span>{{__('general.payment_for')}}</span>
                                  <span
                                      class="pull-right">{{ \App\Enum\PaymentForEnum::getTranslationKeyBy($receipt->payment_for) }}</span>
                              </li>
                              <li class="list-group-item">
                                  <span>{{__('general.transaction_id')}}</span>
                                  <span class="pull-right">{{ $receipt->transaction_id }}</span>
                              </li>
                              <li class="list-group-item">
                                  <span>{{__('general.payment')}}</span>
                                  <span
                                      class="pull-right">{{ $receipt->price }} {{ \App\Services\GeneralService::get_default_currency() }}</span>
                              </li>
                          </ul>
                      </div>
                  </div>
              @endif
          </div>--}}
    </div>
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
