@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow-none pt-0">
                @if(\Illuminate\Support\Facades\Auth::user()->hasRole(\App\Enum\RoleEnum::SUPER_ADMIN))
                    @include('dashboard.components.general.form-list-header',['url'=>'dashboard.packages.create','is_create'=>true])
                @endif
                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        @include('dashboard.components.general.table-headings',['headings'=>\App\Enum\TableHeadings\SubscriptionManagement\PackageTableHeading::getTranslationKeys()])
                        <tbody>
                        @include('dashboard.packages.list')
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
