@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow-none pt-0">
                @if(\Illuminate\Support\Facades\Auth::user()->hasRole(\App\Enum\RoleEnum::BUSINESS_ACCELERATOR))
                    <div class="card-header border-0" style="background-color: transparent !important;">
                        <div class="row d-print-none">
                            <div class="col justify-content-end d-flex">
                                <a href="{{ route('dashboard.floors.index') }}"
                                   class="btn btn-primary d-inline-flex align-items-center justify-content-center mx-1">
                                    {{ trans('general.floors') }}&nbsp;<i class="bx bx-arrow-to-right"></i>
                                </a>
                                <a href="{{ route('dashboard.offices.index') }}"
                                   class="btn btn-primary d-inline-flex align-items-center justify-content-center mx-1">
                                    {{ trans('general.offices') }}&nbsp;<i class="bx bx-arrow-to-right"></i>
                                </a>
                                <a href="{{ route('dashboard.buildings.create') }}"
                                   class="btn btn-primary d-inline-flex align-items-center justify-content-center mx-1">
                                    {{ trans('general.create_building') }}
                                    <i class="bx bx-plus-circle"></i>
                                </a>
                                <div class="card-actions">
                                    <a class="d-print-none btn btn-primary btn-minimize btn-action d-inline-flex align-items-center justify-content-center"
                                       data-action="expand" data-bs-toggle="tooltip" title="" data-bs-placement="top"
                                       data-bs-original-title="Toggle Fullscreen" aria-label="Toggle Fullscreen"><i
                                            class="bx bx-expand"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        @include('dashboard.components.general.table-headings',['headings'=>\App\Enum\TableHeadings\WorkingSpace\BuildingTableHeadingEnum::getTranslationKeys()])
                        <tbody>
                        @include('dashboard.working-spaces.buildings.list')
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
