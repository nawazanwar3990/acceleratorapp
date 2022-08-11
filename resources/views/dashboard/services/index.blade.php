@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow-none pt-0">
                @include('dashboard.components.general.form-list-header',['url'=>'dashboard.services.create','is_create'=>true,'extra'=>['type'=>request()->query('type')]])
                <div class="card-body">
                    <table class="table custom-datatable table-striped table-bordered nowrap">
                        @include('dashboard.components.general.table-headings',['headings'=>\App\Enum\TableHeadings\ServiceTableHeading::getTranslationKeys()])
                        <tbody>
                        @include('dashboard.services.list')
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
