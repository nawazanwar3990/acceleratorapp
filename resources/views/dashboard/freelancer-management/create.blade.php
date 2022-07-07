@extends('layouts.dashboard')
@section('css-before')
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow-none pt-0">
                @include('dashboard.components.general.form-list-header')
                <div class="card-body">
                    {!! Form::open(['url' =>route('dashboard.freelancers.store'), 'method' => 'POST','files' => true,'id' =>'expense_head_form', 'class' => 'solid-validation']) !!}
                    <x-created-by-field></x-created-by-field>
                    <div class="row justify-content-center">
                        <div class="col-3 mb-3">
                            {!!  Html::decode(Form::label('parent_service_id' ,__('general.main_service') ,['class'=>'form-label']))   !!}
                            {!!  Form::select('parent_service_id',\App\Services\ServiceData::getParentFreelancerServicesDropdown(),null,['id'=>'parent_service_id',
                                'class'=>'select2 form-control', 'placeholder'=>__('general.ph_services'),'style'=>'width:100%;', 'required'])
                            !!}
                        </div>
                        <div class="col-3 mb-3">
                            {!!  Html::decode(Form::label('sub_services[]' ,__('general.sub_services') ,['class'=>'form-label']))   !!}
                            {!!  Form::select('sub_services',\App\Services\ServiceData::getFreelancerServicesDropdown(),null,['id'=>'sub_services',
                                'class'=>'select2 form-control','style'=>'width:100%;', 'required','multiple'])
                            !!}
                        </div>
                    </div>
                    @include('dashboard.user-management.hr.personal-info')
                    @include('dashboard.user-management.hr.education')
                    @include('dashboard.user-management.hr.jobs-info')
                    @include('dashboard.user-management.hr.media')
                    <x-buttons :save="true" :saveNew="true" :cancel="true" :reset="true"
                               formID="expense_head_form" cancelRoute="dashboard.freelancers.index"></x-buttons>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
@section('inner-script-files')
@endsection
@section('innerScript')
@endsection
