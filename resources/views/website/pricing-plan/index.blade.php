@extends('layouts.website')
@section('css-before')
@endsection
@section('css-after')
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            {!! Form::open(['url' => route('website.pricing-plans.store'), 'method' => 'POST','files' => true,'id' =>'floors_form', 'class' => 'solid-validation']) !!}
            <x-created-by-field></x-created-by-field>
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>{{ trans('general.name') }}</th>
                                <th>{{ trans('general.type') }}</th>
                                <th>{{ trans('general.price') }}</th>
                                <th>{{ trans('general.limit') }}</th>
                                <th>{{ trans('general.expiry_date') }}</th>
                                <th>{{ trans('general.action') }}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach(\App\Enum\PlanEnum::getTranslationKeys() as $key=>$value)
                                <tr>
                                    <td>1</td>
                                    <td>
                                        {!! Form::text('name[]',$value,['class'=>'form-control','id'=>'name[]']) !!}
                                    </td>
                                    <td>
                                        {!! Form::select('type[]',\App\Enum\PlanTypeEnum::getTranslationKeys(),\App\Enum\PlanTypeEnum::MONTHLY,['class'=>'form-control','id'=>'type','placeholder'=>trans('general.select')]) !!}
                                    </td>
                                    <td>
                                        {!! Form::number('price[]',null,['class'=>'form-control','id'=>'price']) !!}
                                    </td>
                                    <td>
                                        {!! Form::number('limit[]',null,['class'=>'form-control','id'=>'limit']) !!}
                                    </td>
                                    <td>{!! Form::text('expiry_date[]',null,['class'=>'form-control datepicker','id'=>'expiry_date']) !!}
                                    </td>
                                    <td class="text-center">
                                        @if ($loop->last)
                                            {!! Form::button(trans('general.add'),['class'=>'btn btn-success btn-xs mx-1']) !!}
                                        @endif
                                        {!! Form::button(trans('general.remove'),['class'=>'btn btn-danger btn-xs']) !!}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer text-center">
                    {!! Form::button(trans('general.prev'),['class'=>'btn btn-info']) !!}
                    {!! Form::submit(trans('general.next'),['class'=>'btn btn-info']) !!}
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
@section('inner-script-files')
@endsection
@section('innerScript')
@endsection
