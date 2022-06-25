@extends('layouts.dashboard')

@section('css-after')
    <link rel="stylesheet" href="{{ url('plugins/html5-editor/bootstrap-wysihtml5.css') }}">
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-shadow pt-0">
                @include('components.General.form-list-header')
                <div class="card-body" style="padding-top: 0;">
                    {!! Form::open(['url' => route('dashboard.installment-term.store'), 'method' => 'POST','files' => true,'id' =>'installment_term_form', 'class' => 'solid-validation']) !!}
                        <x-created-by-field />

                        @include('dashboard.installment-term.fields')
                        <x-buttons :save="true" :saveNew="false" :cancel="false" :reset="false"
                                   formID="installment_term_form" cancelRoute="dashboard.installment-term.create"/>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('inner-script-files')
{{--    <script src="{{ url('plugins/html5-editor/wysihtml5-0.3.0.js') }}"></script>--}}
    <script src="{{ url('plugins/tinymce/tinymce.min.js') }}"></script>
@endsection

@section('innerScript')

    <script>
        $(function() {
            if ($("#mymce").length > 0) {
                tinymce.init({
                    selector: "textarea#mymce",
                    theme: "modern",
                    height: 300,
                    plugins: [
                        "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                        "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                        "save table contextmenu directionality emoticons template paste textcolor"
                    ],
                    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",

                });
            }
        });
    </script>
@endsection
