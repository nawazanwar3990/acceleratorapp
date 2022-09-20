@extends('layouts.dashboard')
@section('content')
    <div class="row mb-4">
        <div class="col-12 text-right my-2">
            <a class="btn btn-info" onclick="goBack();"><i class="bx bx-arrow-to-left"></i> Back</a>
            <a class="btn btn-info" id="download_btn" onclick="downloadPdf();">Download <i
                    class="bx bx-download"></i></a>
        </div>
    </div>
    <div class="row" id="download-holder">
        <div class="col-12">
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
        </div>
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
