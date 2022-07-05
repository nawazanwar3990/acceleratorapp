@extends('layouts.website')
@section('css-before')
@endsection
@section('css-after')
@endsection
@section('content')
    <div class="row " style="position: relative;">
        @include('website.components.home.banner')
        @include('website.components.home.what-you-are')
        <div class="col-md-12">
            <div class="fix-width">
                <div class="row location pb-5">
                    <div class="col-lg-3 col-md-4">
                        @include('website.working-spaces.left-panel',['for'=>trans('general.bookings')])
                    </div>
                    <div class="col-lg-9 col-md-8 py-4 border-start">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="mb-0">{{ $pageTitle }} for {{ $model->name }}</h4>
                            </div>
                            <div class="card-body">
                                {!! Form::model($model, ['url' =>route('website.booking.store'), 'method' => 'POST','files' => true, 'class' => 'form-horizontal']) !!}
                                @method('PUT')
                                @include('website.booking.fields.flats')
                                {!! Form::close() !!}
                            </div>
                            <div class="card-footer text-end">
                                <div class="row">
                                    <div class="col-lg-6">
                                    </div>
                                    <div class="col-lg-6">
                                        <ul class="list-group-flush list-group  justify-content-end">
                                            <li class="list-group-item d-flex no-block align-items-center">
                                                <a class="d-flex no-block align-items-center">
                                                    <i class="mdi mdi-gmail fs-4 me-2 d-flex align-items-center"></i> Sub Total
                                                </a>
                                                <span
                                                    class="badge bg-success ms-auto">{{ $model->price }} {{ \App\Services\GeneralService::get_default_currency() }}</span>
                                            </li>
                                            <li class="list-group-item d-flex no-block align-items-center">
                                                <a class="d-flex no-block align-items-center">
                                                    <i class="mdi mdi-gmail fs-4 me-2 d-flex align-items-center"></i> Grand
                                                    Total
                                                </a>
                                                <span
                                                    class="badge bg-success ms-auto">{{ $model->price }} {{ \App\Services\GeneralService::get_default_currency() }}</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('inner-script-files')
@endsection
@section('innerScript')
@endsection
