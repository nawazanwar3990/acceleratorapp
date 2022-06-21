@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header row align-items-center mx-1 bg-white">
                    <div class="col-6">
                        {!! HTML::decode(link_to_route('dashboard.human-resource.index', ' <i class="fa fa-arrow-circle-left"></i> Back', null, ['class' => 'btn btn-success btn-sm'])) !!}
                    </div>
                    <div class="col-6 text-right">
                        {!! HTML::decode(Form::button('<i class="fa fa-print"></i> ' . __('general.print'), ['class' => 'btn btn-success btn-sm','onclick'=>'printPersonForm()'])) !!}
                    </div>
                </div>
                <div class="card-body border-top">
                    {{--                    {!! Form::model($model) !!}--}}
                    <section id="printHolder">
                        {{--                        @include('dashboard.real-estate.print.print-header',['printTitle'=>'Installment Plan'])--}}
                        @if(session()->get('printHeader') !== null)
                            @include(session()->get('printHeader') ,['title' => __('general.print_title_transfer_form') ])
                            <br>
                        @endif
                        <div class="container">

                            <div class="row">
                                <div class="col-4 border-bottom">
                                    <p>
                                        <b>{{ __('general.installment_name') }}: </b>
                                        {{ $records->name }}
                                    </p>
                                </div>

                                <div class="col-4 border-bottom">
                                    <p>
                                        <b>{{ __('general.installment_years') }}: </b>
                                        {{ $records->years }}
                                    </p>
                                </div>

                                <div class="col-4 border-bottom">
                                    <p>
                                        <b>{{ __('general.installment_duration') }}: </b>
                                        {{ $records->installment_duration }}
                                    </p>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-4 border-bottom">
                                    <p>
                                        <b>{{ __('general.total_installments') }}: </b>
                                        {{ $records->total_installments }}
                                    </p>
                                </div>

                                <div class="col-4 border-bottom">
                                    <p>
                                        <b>{{ __('general.reminder_days') }}: </b>
                                        {{ $records->reminder_days }}
                                    </p>
                                </div>

                                <div class="col-4 border-bottom">
                                    <p>
                                        <b>{{ __('general.penalties') }}: </b>
                                        {{ $records->penalties }}
                                    </p>
                                </div>
                            </div>


                            <div class="row mt-3">
                                @include('dashboard.real-estate.print.installment-plan.component.first-penalty')
                                @include('dashboard.real-estate.print.installment-plan.component.second-penalty')
                                @include('dashboard.real-estate.print.installment-plan.component.third-penalty')
                            </div>

                            <div class="installment-statment">
                                @php
                                       echo  \App\Services\RealEstate\InstallmentService::getInstallmentTerm()->installment_text;
                                    @endphp
                            </div>
                        </div>
                        @if(session()->get('printFooter') !== null)
                            <br>
                            @include(session()->get('printFooter'))
                        @endif
                    </section>
                    {{--                    {!! Form::close() !!}--}}
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
