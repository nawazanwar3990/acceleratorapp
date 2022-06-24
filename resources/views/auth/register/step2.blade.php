@extends('layouts.website')
@section('css-before')
@endsection
@section('css-after')
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                {!! Form::open(['url' => route('register'), 'method' => 'POST','files' => true,'id' =>'floors_form', 'class' => 'solid-validation']) !!}
                <x-created-by-field></x-created-by-field>
                {!! Form::hidden('role_id',$role_id) !!}
                <div class="row mb-3">
                    <div class="col-12">
                        <h3 class="card-title">{{ trans('general.basic_info') }}</h3>
                    </div>
                    <hr>
                    <div class="col-md-6 mb-3">
                        {!!  Html::decode(Form::label('first_name' ,__('general.first_name').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
                        {!!  Form::text('first_name',null,['id'=>'first_name','class'=>'form-control ','placeholder'=>__('general.first_name'),'required']) !!}
                        @error('first_name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        {!!  Html::decode(Form::label('last_name' ,__('general.last_name').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
                        {!!  Form::text('last_name',null,['id'=>'last_name','class'=>'form-control ','placeholder'=>__('general.last_name'),'required']) !!}
                        @error('last_name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        {!!  Html::decode(Form::label('email' ,__('general.email') ,['class'=>'form-label']))   !!}
                        {!!  Form::text('email',null,['id'=>'email','class'=>'form-control ','placeholder'=>__('general.email')]) !!}
                        @error('email')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        {!!  Html::decode(Form::label('cell_1' ,__('general.cell_priority_1').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
                        {!!  Form::text('cell_1',null,['id'=>'cell_1','class'=>'form-control mobile-mask','placeholder'=>__('general.cell_priority_1'), 'required']) !!}
                        @error('cell_1')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        {!!  Html::decode(Form::label('password' ,__('general.password').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
                        {!!  Form::password('password',['id'=>'password','class'=>'form-control','placeholder'=>__('general.password'), 'required']) !!}
                        @error('password')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        {!!  Html::decode(Form::label('confirm_password' ,__('general.confirm_password').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
                        {!!  Form::password('password_confirmation',['id'=>'confirm_password','class'=>'form-control mobile-mask','placeholder'=>__('general.confirm_password'), 'required']) !!}
                    </div>
                </div>
                <div class="text-center">
                    {!! Form::button(trans('general.prev'),['class'=>'btn btn-info','disabled']) !!}
                    {!! Form::submit(trans('general.next'),['class'=>'btn btn-info']) !!}
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
