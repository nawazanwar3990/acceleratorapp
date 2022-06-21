@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header row align-items-center mx-1 bg-white">
                    <div class="col-6">
                        {!! HTML::decode(link_to_route('dashboard.print.flat.owner', ' <i class="fa fa-arrow-circle-left"></i> Back', null, ['class' => 'btn btn-success btn-sm'])) !!}
                    </div>
                    <div class="col-6 text-right">
                        {!! HTML::decode(Form::button('<i class="fa fa-print"></i> ' . __('general.print'), ['class' => 'btn btn-success btn-sm','onclick'=>'printPersonForm()'])) !!}
                    </div>
                </div>
                <div class="card-body border-top">
                    {{--                    {!! Form::model($model) !!}--}}
                    <section id="printHolder">
                        {{--                        @include('dashboard.real-estate.print.print-header',['printTitle'=>'Flat Owners'])--}}

                        {{--flat info--}}

                        @include('dashboard.real-estate.print.flat-owner.components.flat-info')

                        @include('dashboard.real-estate.human-resource.hr-person.print-components.header',['printTitle'=>'Flat Owner Details'])
                        @include('dashboard.real-estate.human-resource.hr-person.print-components.personal-detail')
                        @include('dashboard.real-estate.human-resource.hr-person.print-components.secondary-person-detail')
                        @include('dashboard.real-estate.human-resource.hr-person.print-components.address.permanent-address')
                        @include('dashboard.real-estate.human-resource.hr-person.print-components.address.temporary-address')
                        @include('dashboard.real-estate.human-resource.hr-person.print-components.employment')
                        @include('dashboard.real-estate.human-resource.hr-person.print-components.tax-info')
                        @include('dashboard.real-estate.human-resource.hr-person.print-components.govt-service')
                        @include('dashboard.real-estate.human-resource.hr-person.print-components.private-job')
                        @include('dashboard.real-estate.human-resource.hr-person.print-components.own-business')
                        {{--                        @include('dashboard.real-estate.human-resource.hr-person.print-components.finger-print')--}}
                        {{--                        @include('dashboard.real-estate.human-resource.hr-person.print-components.declaration')--}}

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
