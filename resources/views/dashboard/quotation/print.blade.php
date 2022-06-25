@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header row align-items-center mx-1 bg-white">
                    <div class="col-6">
                        {!! HTML::decode(link_to_route('dashboard.quotations.index', ' <i class="fa fa-arrow-circle-left"></i> Back', null, ['class' => 'btn btn-success btn-sm'])) !!}
                    </div>
                    <div class="col-6 text-right">
                        {!! HTML::decode(Form::button('<i class="fa fa-print"></i> ' . __('general.print'), ['class' => 'btn btn-success btn-sm', 'id' => 'printBtn'])) !!}
                    </div>
                </div>
                <div class="card-body border-top">
                    <section id="printArea" style="padding: 0px">
                        @if(session()->get('printHeader') !== null)
                            @include(session()->get('printHeader') ,['title' => __('general.sales_quotation') ])
                            <br>
                        @endif

                        @include('dashboard.quotation.components.print.general')
                        @include('dashboard.quotation.components.print.property-details')
                        @include('dashboard.quotation.components.print.payment-details')
                        @include('dashboard.quotation.components.print.installment-details')
                        @if(session()->get('printFooter') !== null)
                            <br>
                            @include(session()->get('printFooter'))
                        @endif
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection
