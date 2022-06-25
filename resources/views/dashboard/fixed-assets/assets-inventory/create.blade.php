@extends('layouts.dashboard')
@section('css-before')
    <link href="{{ url('plugins/select2/css/select2.min.css') }}" rel="stylesheet">
    <link href="{{ url('plugins/dropify/dist/css/dropify.min.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-shadow pt-0">
                @include('components.General.form-list-header')
                <div class="card-body" style="padding-top: 0;">
                    {!! Form::open(['url' => route('dashboard.assets-inventory.store'), 'method' => 'POST','files' => true,'id' =>'assets_inventory_form', 'class' => 'solid-validation']) !!}
                    <x-created-by-field/>
                    <x-hidden-building-id/>
                    @include('dashboard.fixed-assets.assets-inventory.fields')
                    <x-buttons :save="true" :saveNew="true" :cancel="true" :reset="true"
                               formID="assets_inventory_form" cancelRoute="dashboard.assets-inventory.index"/>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
@section('innerScript')
    <script src="{{ url('plugins/select2/js/select2.min.js') }}"></script>
    <script src="{{ url('plugins/dropify/dist/js/dropify.min.js') }}"></script>
    <script>
        $(function () {
            $('.select2').select2();
            initDropify();
        });

        function initDropify() {
            $('.dropify').dropify({
                tpl: {
                    message: '<div class="dropify-message"><span class="file-icon" /></div>',
                }
            });
        }

        let doc = 1;
        let img = 1;

        function addDocumentField() {
            doc++;
            let objTo = document.getElementById('documents')
            let divDoc = document.createElement("div");
            divDoc.setAttribute("class", "mb-3 doc-remove-class" + doc);
            divDoc.innerHTML = '<div class="row">' +
                '<div class="col-sm-10">' +
                '<input type="file" class="form-control dropify" name="documents[]" data-height="75" data-allowed-file-extensions="doc docx pdf jpg jpeg png xlsx xls">' +
                '</div>' +
                '<div class="col-sm-2">' +
                '<button class="btn btn-danger" type="button" onclick="removeDocumentField(' + doc + ');"> <i class="fa fa-minus"></i> </button>' +
                '</div>' +
                '</div><div class="clear"></div>';

            objTo.appendChild(divDoc)
            initDropify();
        }

        function removeDocumentField(rid) {
            $('.doc-remove-class' + rid).remove();
        }
    </script>
@endsection
