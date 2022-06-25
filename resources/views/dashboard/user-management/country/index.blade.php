@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow-none pt-0">
                @include('components.General.form-list-header',['url'=>'dashboard.country.create','is_create'=>true])
                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        @include('components.General.table-headings',['headings'=>\App\Enum\TableHeadings\UserManagement\Country::getTranslationKeys()])
                        <tbody>
                        @include('dashboard.user-management.country.list')
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
