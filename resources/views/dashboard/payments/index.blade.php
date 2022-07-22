@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow-none pt-0">
                @include('dashboard.components.general.form-list-header',['url'=>'','is_create'=>false])
                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        @include('dashboard.components.general.table-headings',['headings'=>App\Enum\TableHeadings\PaymentManagement\PaymentTableHeadingEnum::getTranslationKeys()])
                        <tbody>
                        @include('dashboard.payments.list')
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
