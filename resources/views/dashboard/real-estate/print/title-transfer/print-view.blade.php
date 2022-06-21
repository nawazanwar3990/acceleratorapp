@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header row align-items-center mx-1 bg-white">
                    <div class="col-6">
                        {!! HTML::decode(link_to_route('dashboard.print.title.transfer.detail', ' <i class="fa fa-arrow-circle-left"></i> Back', null, ['class' => 'btn btn-success btn-sm'])) !!}
                    </div>
                    <div class="col-6 text-right">
                        {!! HTML::decode(Form::button('<i class="fa fa-print"></i> ' . __('general.print'), ['class' => 'btn btn-success btn-sm','onclick'=>'printPersonForm();'])) !!}
                    </div>
                </div>
                <div class="card-body border-top">
                    <section id="printHolder" style="padding: 0px">
                        @if(session()->get('printHeader') !== null)
                            @include(session()->get('printHeader') ,['title' => __('general.print_title_transfer_form') ])
                            <br>
                        @endif
                        {{--style="border: 1px solid rgba(108,106,106,0.63); padding: 8px"--}}
                        <div class="print-view-page">
                            @include('dashboard.real-estate.print.title-transfer.component.top-header')
                            @include('dashboard.real-estate.print.title-transfer.component.property-detail')
                            @include('dashboard.real-estate.print.title-transfer.component.seller-detail')
                            @include('dashboard.real-estate.print.title-transfer.component.purchase-detail')
                            @include('dashboard.real-estate.print.title-transfer.component.payment-method')
{{--                            @include('dashboard.real-estate.print.title-transfer.component.transfer-fee-detail')--}}
                            @includeWhen(($records->company_brokery == false), 'dashboard.real-estate.print.title-transfer.component.broker-detail')
                            @includeWhen($records->installments()->exists(), 'dashboard.real-estate.print.title-transfer.component.installments-table')
                            <div class="row my-3">
                                <div class="col-2">
                                    {{ __('general.authorised_by') }}
                                </div>

                                <div class="col-2" style="border-bottom: 1px solid #000000;"></div>

                                <div class="col-4"></div>

                                <div class="col-2">
                                    {{ __('general.approved_by') }}
                                </div>
                                <div class="col-2" style="border-bottom: 1px solid #000000;"></div>
                            </div>

                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('innerScript')
    <script>
        function printPersonForm() {
            $(".print_holder").removeClass('d-block d-none').addClass('d-block');
            $(".current_chevron").addClass('d-none');

            $(':input').removeAttr('placeholder');
            $('textarea').removeAttr('placeholder');
            $('input[type=number]').removeAttr('placeholder');

            let printContents = document.getElementById("printHolder").innerHTML;
            let originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
        }
    </script>
@endsection
