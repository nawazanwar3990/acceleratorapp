<style>
    .print_holder, .print_holder th, td {
        font-size: 13px;
    }

    .print_holder .table > :not(caption) > * > * {
        padding: 5px !important;
    }
</style>
<div class="card card-body print_holder">
    <h3><b>INVOICE</b> <span class="pull-right">#{{ $model->id }}</span></h3>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <div class="pull-left">
                <h3 class="fw-bold">{{ ucwords($model->company_name) }}</h3>
                <div class="pl-2">
                    <p class="mb-1"><strong>{{__('general.company_no_of_emp')}}
                            : </strong>{{ $model->company_no_of_emp }}</p>
                    <p class="mb-1"><strong>{{__('general.company_date_of_initiation')}}
                            : </strong>{{ $model->company_date_of_initiation }}</p>
                    <p class="mb-1"><strong>{{__('general.company_address')}} : </strong>{{ $model->company_address }}
                    </p>
                    <p class="mb-1"><strong>{{__('general.company_contact_no')}}
                            : </strong>{{ $model->company_contact_no }}</p>
                    <p class="mb-1"><strong>{{__('general.company_email')}} : </strong>{{ $model->company_email }}</p>
                </div>
            </div>
            <div class="pull-right text-end">
                <address>
                    <h3 class="fw-bold">To,</h3>
                    <h4 class="font-bold">{{ $model->user->email }},</h4>
                    <p class="mb-1"><strong>{{__('general.first_name')}} : </strong>{{ $model->user->first_name }}</p>
                    <p class="mb-1"><strong>{{__('general.last_name')}} : </strong>{{ $model->user->last_name }}</p>
                    <p class="mb-1"><strong>{{__('general.invoice_date')}}
                            : </strong>{{ \Carbon\Carbon::now()->format('M d Y')}}</p>
                </address>
            </div>
        </div>
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title pb-0 mb-0">{{ trans('general.your_services') }}</h4>
                </div>
                <div class="card-body p-1">
                    <div class="table-responsive" style="clear: both;">
                        <table class="table table-hover">
                            <tbody>
                            @foreach($model->services as $service)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td>{{ $service->name }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            @if($model->other_services AND count($model->other_services)>0)
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title pb-0 mb-0">{{ trans('general.other_services') }}</h4>
                    </div>
                    <div class="card-body p-1">
                        <div class="table-responsive" style="clear: both;">
                            <table class="table table-hover">
                                <tbody>
                                @foreach($model->other_services as $service)
                                    @if($service)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td>{{ $service}}</td>
                                        </tr>
                                    @endif
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            @endif
        </div>
        <div class="col-md-7">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title pb-0 mb-0">{{ trans('general.package_info') }}</h4>
                </div>
                <div class="card-body p-1">
                    <div class="table-responsive" style="clear: both;">
                        <table class="table table-hover">
                            <tbody>
                            <tr>
                                <th class="bg-light">{{ trans('general.package_name') }}</th>
                                <td>{{ $subscription->package->name??null }}</td>
                            </tr>
                            <tr>
                                <th class="bg-light">{{ trans('general.price') }}</th>
                                <td>{{ $subscription->price??null }} {{ \App\Services\GeneralService::get_default_currency() }}</td>
                            </tr>
                            <tr>
                                <th class="bg-light">{{ trans('general.expire_date') }}</th>
                                <td>After 1 Month of Subscription</td>
                            </tr>
                            <tr>
                                <th class="bg-light">{{ trans('general.payment_token_number') }}</th>
                                <td>{{ $subscription->payment_token_number??null }}</td>
                            </tr>
                            <tr>
                                <th class="bg-light">{{ trans('general.addition_info') }}</th>
                                <td>{{ $subscription->payment_addition_information??null }}</td>
                            </tr>
                            <tr>
                                <th class="bg-light">{{ trans('general.subscription_status') }}</th>
                                <td>{{ \App\Enum\SubscriptionStatusEnum::getTranslationKeyBy($subscription->status) }}</td>
                            </tr>
                            <tr>
                                <th class="bg-light">{{ trans('general.services') }}</th>
                                <td>
                                    <UL class="list-group list-group-flush bg-transparent">
                                        @foreach($subscription->package->services as $service)
                                            <li class="list-group-item py-0 border-0  bg-transparent px-0">
                                                <i class="bx bx-check text-success"></i> <small><strong
                                                        class="text-infogit ">{{ ($service->pivot->limit)=='∞'?'Unlimited':$service->pivot->limit }}</strong> {{ str_replace('_',' ',$service->name) }}
                                                </small>
                                            </li>
                                        @endforeach
                                    </UL>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="clearfix"></div>
            <hr>
            <div class="text-end">
                <a class="btn btn-danger text-white" href="{{ route('login') }}">
                    <i class="bx bx-log-in"></i> {{__('general.login')}}
                </a>
                <button id="print" class="btn btn-info btn-outline" type="button">
                    <span><i class="bx bx-printer"></i> Apply Printing</span>
                </button>
            </div>
        </div>
    </div>
</div>
