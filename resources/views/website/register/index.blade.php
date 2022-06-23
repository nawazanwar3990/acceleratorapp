@extends('layouts.website')
@section('css-before')
@endsection
@section('css-after')
@endsection
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            {!! Form::open(['url' => route('website.register'), 'method' => 'POST','files' => true,'id' =>'floors_form', 'class' => 'solid-validation']) !!}
            <x-created-by-field></x-created-by-field>
            @include('website.components.register.fields')
           <div class="text-center">
               {!! Form::button(trans('general.prev'),['class'=>'btn btn-info','disabled']) !!}
               {!! Form::submit(trans('general.next'),['class'=>'btn btn-info']) !!}
           </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
@section('inner-script-files')
@endsection
@section('innerScript')
@endsection
