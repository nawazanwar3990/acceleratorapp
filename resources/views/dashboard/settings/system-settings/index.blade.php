@extends('layouts.dashboard')
@section('css-before')
    <link href="{{ url('plugins/select2/css/select2.min.css') }}" rel="stylesheet">
    <style>
        .tooltip-inner {
            max-width: 500px !important;
            /* If max-width does not work, try using width instead */
            width: 500px !important;
            text-align: left !important;
        }
    </style>
@endsection

@section('content')
    <div class="container">
        {!! Form::open(['url' => route('dashboard.system-settings.store')]) !!}
        <x-created-by-field />
        @include('dashboard.settings.system-settings.components.settings-fields',['records'=>$records])
        <div class="row">
            <div class="col-md-6"></div>
            <div class="col-md-6">
                <br>
                <x-buttons :save="true" :saveNew="false" :cancel="false" :reset="false"
                           formID="system_settings_form" cancelRoute="dashboard.system-settings.index"/>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
    @include('dashboard.settings.system-settings.print-view.view-page')
@endsection
@section('innerScript')
    <script src="{{ url('plugins/select2/js/select2.min.js') }}"></script>
    <script>
        $(function () {
            $('.select2').select2();
            $('[data-toggle="tooltip"]').tooltip({html:true});
        });

        function themeView() {
            let themeName = $("#print_template").val();
            $("#" + themeName).modal('show');
        }

        function currencySymbol(elem){
            if(elem == 'left'){
                $("#example_currency_symbol").html(`<p>Example: <b>{{ session()->get('currencySymbol') }} 10,000</b></p>`);
            }else if (elem == 'right'){
                $("#example_currency_symbol").html(`<p>Example: <b>10,000  {{ session()->get('currencySymbol') }}</b></p>`);
            } else {
                $("#example_currency_symbol").html(`<p>Example: <b>10,000</b></p>`);
            }
        }
    </script>
@endsection
