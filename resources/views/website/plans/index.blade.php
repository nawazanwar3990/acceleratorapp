@extends('layouts.website')
@section('css-before')
@endsection
@section('css-after')
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                {!! Form::open(['url' => route('website.plans.store'), 'method' => 'POST','files' => true,'id' =>'floors_form', 'class' => 'solid-validation']) !!}
                <x-created-by-field></x-created-by-field>
                <div class="row mb-3">
                    <div class="col-12">
                        <h3 class="card-title">
                            <span
                                class="text-info">{{ trans('general.hi') }}</span> {{ \App\Services\GeneralService::get_register_user_name()  }} {{__('general.choose_your_plans_message')}}
                        </h3>
                        <hr class="mb-1">
                    </div>
                    <div class="col-12">
                        <div class="row border-bottom mb-2">
                            <div class="col-md-2 py-2 align-self-center">{{ trans('general.name') }}</div>
                            <div class="col-md-2 py-2 align-self-center">{{ trans('general.type') }}</div>
                            <div class="col-md-2 py-2 align-self-center">{{ trans('general.price') }}</div>
                            <div class="col-md-2 py-2 align-self-center">{{ trans('general.limit') }}</div>
                            <div class="col-md-2 py-2 align-self-center">{{ trans('general.expiry_date') }}</div>
                            <div class="col-md-2 py-2 text-center align-self-center">{{ trans('general.action') }}</div>
                        </div>
                        @foreach(\App\Enum\PlanEnum::getTranslationKeys() as $key=>$value)
                            <div class="row border-bottom my-2">
                                <div class="col-md-2 py-2 align-self-center">
                                    {!! Form::text('name[]',$value,['class'=>'form-control form-control-sm','id'=>'name[]']) !!}
                                </div>
                                <div class="col-md-2  py-2 align-self-center">
                                    {!! Form::select('type[]',\App\Enum\PlanTypeEnum::getTranslationKeys(),\App\Enum\PlanTypeEnum::MONTHLY,['class'=>'form-control form-control-sm','id'=>'type','placeholder'=>trans('general.select')]) !!}
                                </div>
                                <div class="col-md-2  py-2 align-self-center">
                                    {!! Form::number('price[]',null,['class'=>'form-control form-control-sm','id'=>'price']) !!}
                                </div>
                                <div class="col-md-2  py-2 align-self-center">
                                    {!! Form::number('limit[]',null,['class'=>'form-control form-control-sm','id'=>'limit']) !!}
                                </div>
                                <div class="col-md-2  py-2 align-self-center">
                                    {!! Form::text('expiry_date[]',null,['class'=>'form-control datepicker form-control-sm','id'=>'expiry_date']) !!}
                                </div>
                                <div class="col-md-2  py-2 text-center align-self-center">
                                    @if ($loop->last)
                                        {!! Form::button('<i class="bx bx-plus"></i>',['class'=>'btn btn-success btn-xs mx-1']) !!}
                                    @endif
                                    {!! Form::button('<i class="bx bx-trash"></i>',['class'=>'btn btn-danger btn-xs']) !!}
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="text-center">
                    {!! Form::button(trans('general.prev'),['class'=>'btn btn-info']) !!}
                    {!! Form::submit(trans('general.register'),['class'=>'btn btn-info']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
@section('inner-script-files')
@endsection
@section('innerScript')
@endsection
