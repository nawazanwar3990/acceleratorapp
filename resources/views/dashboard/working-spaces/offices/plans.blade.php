@extends('layouts.dashboard')
@section('css-before')
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-shadow pt-0">
                @include('dashboard.components.general.form-list-header')
                <div class="card-body" style="padding-top: 0;">
                    {!! Form::model($office, ['url' =>route('dashboard.offices.update', $office->id), 'method' => 'POST','files' => true, 'class' => 'solid-validation']) !!}
                    @method('PUT')
                    <x-created-by-field></x-created-by-field>
                    <div class="row">
                        @foreach(\App\Services\PlanService::listPlans() as $plan)
                            <div class="col-md-4 mb-3">
                                <div class="form-check form-switch">
                                    {!! Form::checkbox('plans[]',$plan->id,null,['class'=>'form-check-input align-self-center']) !!}
                                    <label class="form-check-label">
                                        <strong class="text-capitalize"> {{ $plan->name }}</strong>
                                        ({{ $plan->price }} {{ \App\Services\GeneralService::get_default_currency() }})
                                        <br>
                                        <small class="text-info">{{__('general.basic_service')}}</small>
                                        <br>
                                        @if(count($plan->basic_services))
                                            @foreach($plan->basic_services as $service)
                                                <small> <i class="bx bx-check text-success"></i>{{ $service->name }}</small>
                                            @endforeach
                                        @endif
                                        <br>
                                        <small class="text-info">{{__('general.additional_service')}}</small>
                                        <br>
                                        @if(count($plan->additional_services))
                                            @foreach($plan->additional_services as $service)
                                                <small> <i class="bx bx-check text-success"></i>{{ $service->name }}</small>
                                            @endforeach
                                        @endif
                                    </label>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <x-buttons :save="true" :saveNew="true" :cancel="true" :reset="true"
                               formID="flat_form" cancelRoute="dashboard.offices.index"></x-buttons>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
@include('dashboard.working-spaces.components.scripts')
