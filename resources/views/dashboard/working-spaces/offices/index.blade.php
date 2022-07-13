@extends('layouts.dashboard')
@section('css-before')
    @include('includes.datatable-css')
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow-none pt-0">
                @if(\Illuminate\Support\Facades\Auth::user()->hasRole(\App\Enum\RoleEnum::BUSINESS_ACCELERATOR))
                    @include('dashboard.components.general.form-list-header',['url'=>'dashboard.offices.create','is_create'=>true])
                @endif
                <div class="card-body">
                    <table class="table table-bordered table-hover" id="datatable">
                        @include('dashboard.components.general.table-headings',['headings'=>\App\Enum\TableHeadings\WorkingSpace\FlatTableHeadingEnum::getTranslationKeys()])
                        <tbody>
                        @include('dashboard.working-spaces.offices.list')
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
