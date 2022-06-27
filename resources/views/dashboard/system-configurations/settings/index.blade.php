@extends('layouts.dashboard')
@section('css-before')

@endsection

@section('content')
    <div class="container">
        {!! Form::open(['url' => route('dashboard.settings.store')]) !!}
        <x-created-by-field></x-created-by-field>
        @include('dashboard.system-configurations.settings.components.settings-fields',['records'=>$records])
        <div class="row">
            <div class="col-md-6"></div>
            <div class="col-md-6">
                <br>
                <x-buttons :save="true" :saveNew="false" :cancel="false" :reset="false"
                           formID="SETTINGS_form" cancelRoute="dashboard.settings.index"></x-buttons>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
@endsection
@section('innerScript')
    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip({html:true});
        });

        function themeView() {
            let themeName = $("#print_template").val();
            $("#" + themeName).modal('show');
        }

        function currencySymbol(elem){
            if(elem === 'left'){
                $("#example_currency_symbol").html(`<p>Example: <b>{{ session()->get('currencySymbol') }} 10,000</b></p>`);
            }else if (elem === 'right'){
                $("#example_currency_symbol").html(`<p>Example: <b>10,000  {{ session()->get('currencySymbol') }}</b></p>`);
            } else {
                $("#example_currency_symbol").html(`<p>Example: <b>10,000</b></p>`);
            }
        }
    </script>
@endsection
