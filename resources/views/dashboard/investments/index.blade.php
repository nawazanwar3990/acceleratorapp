@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow-none pt-0">
                @include('dashboard.components.general.form-list-header',['url'=>'dashboard.events.create','is_create'=>false])
                <div class="card-body" style="overflow-x: auto;">
                    <table class="table custom-datatable table-bordered table-hover">
                        @include('dashboard.components.general.table-headings',['headings'=>\App\Enum\TableHeadings\InvestmentTableHeadingEnum::getTranslationKeys()])
                        <tbody>
                        @include('dashboard.investments.list')
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
