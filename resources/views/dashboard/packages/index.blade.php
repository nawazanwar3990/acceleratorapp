@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow-none pt-0">
                @include('dashboard.components.general.form-list-header',['url'=>'dashboard.packages.create','is_create'=>true,'extra'=>['type'=>$type]])
                <div class="card-body">
                    <table class="table custom-datatable table-striped table-bordered nowrap">
                        @include('dashboard.components.general.table-headings',['headings'=>\App\Enum\TableHeadings\PackageTableHeading::getTranslationKeys()])
                        <tbody>
                        @include('dashboard.packages.list')
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
