@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow-none pt-0">
                @include('dashboard.components.general.form-list-header',['url'=>'dashboard.admins.create','is_create'=>true])
                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        @include('dashboard.components.general.table-headings',['headings'=>\App\Enum\TableHeadings\UserManagement\AdminTableHeadingEnum::getTranslationKeys()])
                        <tbody>
                        @include('dashboard.admin-management.list')
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
