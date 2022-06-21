@extends('layouts.dashboard')
@section('css-before')
    <link href="{{ url('plugins/select2/css/select2.min.css') }}" rel="stylesheet">
    <link href="{{ url('plugins/dropify/dist/css/dropify.min.css') }}" rel="stylesheet">
    <link href="{{ url('plugins/clockpicker/dist/jquery-clockpicker.min.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow-none pt-0">
                @include('components.General.form-list-header')
                <div class="card-body">
                    {!! Form::model($model, ['url' =>route('dashboard.visitor-book.update', $model->id), 'method' => 'POST','files' => true,'id' =>'visitor_book_form', 'class' => 'solid-validation']) !!}
                    @method('PUT')
                    <x-updated-by-field />
                    <x-hidden-building-id />
                    @include('dashboard.real-estate.front-desk.visitor-book.fields', ['for' => 'edit'])
                    <x-buttons :update="true" :cancel="true" cancelRoute="dashboard.visitor-book.index"/>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
@section('inner-script-files')
    <script src="{{ url('plugins/select2/js/select2.min.js') }}"></script>
    <script src="{{ url('plugins/dropify/dist/js/dropify.min.js') }}"></script>
    <script src="{{ url('plugins/inputmask/dist/min/jquery.inputmask.bundle.min.js') }}"></script>
    <script src="{{ url('plugins/clockpicker/dist/jquery-clockpicker.min.js') }}"></script>
@endsection

@section('innerScript')
    <script>
        $(function () {
            $('.select2').select2();
            $(".cnic-mask").inputmask("99999-9999999-9");
            initDropify();

            $('.clockpicker').clockpicker({
                placement: 'bottom',
                align: 'left',
                autoclose: true,
                'default': 'now'
            });
        });

        function initDropify() {
            $('.dropify').dropify({
                tpl: {
                    message: '<div class="dropify-message"><span class="file-icon" /></div>',
                }
            });
        }
    </script>
@endsection
