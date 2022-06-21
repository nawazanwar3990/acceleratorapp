@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow-none pt-0">
                @include('components.General.form-list-header',['url'=>'dashboard.sales-enquiry.create','is_create'=>true])
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            @include('components.General.table-headings',['headings'=>\App\Enum\TableHeadings\RealEstate\SalesEnquiry::getTranslationKeys()])
                            <tbody>
                            @include('dashboard.real-estate.front-desk.sales-enquiry.list')
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
