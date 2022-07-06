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
                            {!! Form::model($model, ['url' =>route('website.booking.store'), 'method' => 'POST','files' => true, 'class' => 'form-horizontal']) !!}
                            <div class="card-body">
                                @include('website.booking.fields.plan')
                                @include('website.booking.fields.building')
                            </div>
                            @include('website.booking.fields.total')
                            {!! Form::close() !!}
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
