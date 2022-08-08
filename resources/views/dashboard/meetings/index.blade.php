@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow-none pt-0">
                @include('dashboard.components.general.form-list-header',['url'=>'dashboard.meeting-rooms.create','is_create'=>true])
                <div class="card-body">
                    <table class="table custom-datatable table-bordered table-hover">
                        @include('dashboard.components.general.table-headings',['headings'=>\App\Enum\TableHeadings\MeetingTableHeadingEnum::getTranslationKeys()])
                        <tbody>
                        @include('dashboard.meetings.list')
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
