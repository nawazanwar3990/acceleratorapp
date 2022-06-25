@extends('layouts.dashboard')
@section('css-before')
    @include('includes.datatable-css')
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow-none pt-0">
                @include('components.General.form-list-header',['url'=>'dashboard.flats-shops.create','is_create'=>true])
                <div class="card-body">
                    <table class="table table-bordered table-hover" id="datatable">
                        @include('components.General.table-headings',['headings'=>\App\Enum\TableHeadings\RealEstate\Flats::getTranslationKeys()])
                        <tbody>
                        @include('dashboard.flat.list')
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
