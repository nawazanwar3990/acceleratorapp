@extends('layouts.dashboard')
@section('css-before')
    @include('includes.datatable-css')
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow-none pt-0">
                @include('dashboard.components.general.form-list-header',['url'=>'dashboard.flats.create','is_create'=>true])
                <div class="card-body">
                    <table class="table table-bordered table-hover" id="datatable">
                        @include('dashboard.components.general.table-headings',['headings'=>\App\Enum\TableHeadings\FlatManagement\Flats::getTranslationKeys()])
                        <tbody>
                        @include('dashboard.working-space.flats.list')
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
@endsection
