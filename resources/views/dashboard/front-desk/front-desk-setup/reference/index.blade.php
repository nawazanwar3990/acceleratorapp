@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow-none pt-0">
                @include('components.General.form-list-header',['url'=>'dashboard.reference.create','is_create'=>true])
                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        @include('components.General.table-headings',['headings'=>\App\Enum\TableHeadings\RealEstate\Source::getTranslationKeys()])
                        <tbody>
                        @include('dashboard.front-desk.front-desk-setup.reference.list')
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
