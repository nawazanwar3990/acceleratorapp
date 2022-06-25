@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow-none pt-0">
                @include('dashboard.components.general.form-list-header',['url'=>'dashboard.service.create','is_create'=>true])
                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        @include('dashboard.components.general.table-headings',['headings'=>\App\Enum\TableHeadings\ServiceManagement\Service::getTranslationKeys()])
                        <tbody>
                        @include('dashboard.service-management.service.list')
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
