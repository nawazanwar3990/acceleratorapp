@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-shadow pt-0">
                @include('components.General.form-list-header')
                <div class="card-body" style="padding-top: 0;">
                    {!! Form::open(['route' => ['dashboard.role-permissions.store',['role'=>request()->query('role')]],'method' => 'POST','files' => true,'id' =>'floors_form', 'class' => 'solid-validation']) !!}
                    <x-created-by-field></x-created-by-field>
                    <x-hidden-building-id></x-hidden-building-id>
                    <table class="table table-bordered table-hover">
                        @include('components.General.table-headings',['headings'=>\App\Enum\TableHeadings\UserManagement\Permission::getTranslationKeys()])
                        <tbody>
                        @include('dashboard.user-management.role-permissions.list')
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
