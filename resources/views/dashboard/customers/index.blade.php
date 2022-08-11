@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow-none pt-0">
                @include('dashboard.components.general.form-list-header',['url'=>'website.customers.create','is_create'=>true])
                <div class="card-body">
                    <table class="table custom-datatable table-bordered table-hover">
                        @include('dashboard.components.general.table-headings',['headings'=>\App\Enum\TableHeadings\CustomerTableHeadingEnum::getTranslationKeys()])
                        <tbody>
                        @include('dashboard.customers.list')
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
