@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header row align-items-center mx-1 bg-white">
                    <div class="col-6">
                        {!! HTML::decode(link_to_route('dashboard.print.nominee', ' <i class="fa fa-arrow-circle-left"></i> Back', null, ['class' => 'btn btn-success btn-sm'])) !!}
                    </div>
                    <div class="col-6 text-right">
                        {!! HTML::decode(Form::button('<i class="fa fa-print"></i> Print', ['class' => 'btn btn-success btn-sm','onclick'=>'printPersonForm();'])) !!}
                    </div>
                </div>
                <div class="card-body border-top">
                    {!! Form::model($model) !!}
                    <section id="printHolder">
                        @include('dashboard.real-estate.human-resource.nominee.print-components.header')
                        @include('dashboard.real-estate.human-resource.nominee.print-components.owner-buyer-seller')
                        @include('dashboard.real-estate.human-resource.nominee.print-components.nominee')
                        @if(count($verification)>0)
                            @include('dashboard.real-estate.human-resource.nominee.print-components.verified-by')
                        @endif
                        @if(count($witness)>0)
                            @include('dashboard.real-estate.human-resource.nominee.print-components.witness')
                        @endif
                    </section>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
@include('dashboard.real-estate.human-resource.hr-person.components.scripts')

