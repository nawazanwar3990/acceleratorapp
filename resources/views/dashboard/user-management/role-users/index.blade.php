@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-shadow pt-0">
                @include('dashboard.components.general.form-list-header')
                <div class="card-body" style="padding-top: 0;">
                    {!! Form::open(['route' => ['dashboard.role-users.store',['role'=>request()->query('role')]],'method' => 'POST','files' => true,'id' =>'floors_form', 'class' => 'solid-validation']) !!}
                    <x-created-by-field></x-created-by-field>

                    <table class="table custom-datatable table-bordered table-hover">
                        @include('dashboard.components.general.table-headings',['headings'=>\App\Enum\TableHeadings\UserManagement\RoleUserTableHeadingEnum::getTranslationKeys()])
                        <tbody>
                        @include('dashboard.user-management.role-users.list')
                        </tbody>
                    </table>
                    <x-buttons :save="true" :saveNew="true" :cancel="true" :reset="true"
                               formID="floors_form" cancelRoute="dashboard.permissions.index"></x-buttons>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
