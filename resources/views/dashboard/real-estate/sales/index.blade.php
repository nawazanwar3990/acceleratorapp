@extends('layouts.dashboard')
@section('css-before')
    <link href="{{ url('plugins/select2/css/select2.min.css') }}" rel="stylesheet">
    @include('includes.datatable-css')
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            @include('dashboard.real-estate.sales.filters')
            <div class="card shadow-none pt-0">
                @include('components.General.form-list-header',['url'=>'dashboard.sales.create','is_create'=>true])
                <div class="card-body">
                    <table class="table table-bordered table-hover" id="datatable">
                        @include('components.General.table-headings',['headings'=>\App\Enum\TableHeadings\RealEstate\Sales::getTranslationKeys()])
                        <tbody>
                        @include('dashboard.real-estate.sales.list')
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('inner-script-files')
    <script src="{{ url('plugins/select2/js/select2.min.js') }}"></script>
    @include('includes.datatable-js')
@endsection
@section('innerScript')
    @include('includes.datatable-general-init', ['table' => 'datatable'])
    <script>
        $(function () {
            $('.select2').select2();
            $('#flat_id').select2({
                width: '100%',
                templateResult: formatFlatSelect,
            });
        });

        function formatFlatSelect(data) {
            let building = $(data.element).data('building');
            let floor = $(data.element).data('floor');
            let classAttr = $(data.element).attr('class');
            let hasClass = typeof classAttr != 'undefined';
            classAttr = hasClass ? ' ' + classAttr : '';

            return $(
                '<div class="row">' +
                '<div class="col-md-3 col-xs-3' + classAttr + '">' + data.text + '</div>' +
                '<div class="col-md-3 col-xs-3' + classAttr + '">' + building + '</div>' +
                '<div class="col-md-3 col-xs-3' + classAttr + '">' + floor + '</div>' +
                '</div>'
            );
        }
    </script>
@endsection
