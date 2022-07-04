@extends('layouts.website')
@section('css-before')
@endsection
@section('css-after')
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                {!! Form::open(['url' => route('website.payments.store'), 'method' => 'POST','files' => true,'id' =>'floors_form', 'class' => 'solid-validation']) !!}
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
                        <div class="row border-bottom my-2">
                            <div class="col-2 py-2 align-self-center">
                                {!! Form::text('name[]',null,['class'=>'form-control ','id'=>'name[]','placeholder'=>trans('general.name')]) !!}
                            </div>
                            <div class="col-2  py-2 align-self-center">
                                {!!  Form::text('months[]',null,['id'=>'months[]', 'class'=>'form-control vertical-spin', 'onchange' => 'calculateInstallments();','placeholder'=>trans('general.months')])  !!}
                            </div>
                            <div class="col-4  py-2 align-self-center">
                                {!!  Form::select('installment_duration', \App\Services\GeneralService::getInstallmentDurationForDropdown(),null,['id'=>'installment_duration',
      'style' => 'width:100%;', 'class'=>'select2 form-control', 'placeholder'=>__('general.ph_installment_duration'), 'required',
      'onchange'=>'calculateInstallments();'])
  !!}
                            </div>
                            <div class="col-4  py-2 align-self-center">
                                {!!  Form::text('total_installments',null,['id'=>'total_installments','class'=>'form-control ','placeholder'=>'0', 'readonly', 'tabindex'=>'-1','placeholder'=>trans('general.total_installments')]) !!}
                            </div>

                            <div class="col-4  py-2 align-self-center">
                                {!!  Form::number('reminder_days',10,['step'=>'1','min'=>'1','id'=>'reminder_days','class'=>'form-control ','placeholder'=>trans('general.reminder_days')]) !!}
                            </div>

                            <div class="col-4  py-2 align-self-center">
                                {!!  Form::select('down_payment_type', \App\Services\GeneralService::getDiscountTypesForDropdown() ,null,['id'=>'down_payment_type','class'=>'form-control select2', 'required','placeholder'=>trans('general.down_payment_type')]) !!}
                            </div>

                            <div class="col-4  py-2 align-self-center">
                                {!!  Form::number('down_payment_value',null,['step'=>'1','min'=>'1','id'=>'down_payment_value','class'=>'form-control ','placeholder'=>trans('general.down_payment_value')]) !!}
                            </div>
                            <div class="col-12  py-2 text-center align-self-center">
                                {!! Form::button('<i class="bx bx-plus"></i>',['class'=>'btn btn-success mx-1']) !!}
                                {!! Form::button('<i class="bx bx-trash"></i>',['class'=>'btn btn-danger']) !!}
                            </div>
                        </div>
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
    @include('dashboard.plan-management.plans.components.scripts')
@endsection
