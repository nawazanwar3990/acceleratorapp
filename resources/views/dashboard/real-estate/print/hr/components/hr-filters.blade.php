<div class="card">
    <div class="card-header border-0" style="background-color: transparent !important;">
        <div class="row">
            <div class="col-md-10">
                <h4 class="card-title"><i class="fas fa-filter text-purple"></i> {{ __('general.filters') }}</h4>
            </div>
            <div class="col-md-2">
                <div class="card-actions">
                    <a class="btn btn-primary btn-action d-inline-flex align-items-center justify-content-center" data-action="collapse"><i class="ti-plus"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="card-body collapse">
        {!! Form::open(['url' => route('dashboard.filter.hr'), 'method' => 'GET','files' => true]) !!}
        <div class="row mb-2">

            <div class="col-md-3">
                {!!  Html::decode(Form::label('hr_id' ,__('general.hr_name') ,['class'=>'form-label']))   !!}
                {!!  Form::select('hr_id', \App\Services\PersonService::HrForDropdown(), request()->has('hr_id')?request()->get('hr_id'):null,['id'=>'hr_id',
                    'class'=>'select2 form-control', 'placeholder'=>'Select Hr Name','style'=>'width:100%'])
                !!}
            </div>

            <div class="col-md-3">
                {!!  Html::decode(Form::label('cnic' ,__('general.cnic'),['class'=>'form-label']))   !!}
                {!!  Form::text('cnic',null,['id'=>'cnic','class'=>'form-control cnic-mask','placeholder'=>__('general.cnic')]) !!}
            </div>

            <div class="col-md-3">
                {!!  Html::decode(Form::label('contact_id' ,__('general.contact') ,['class'=>'form-label']))   !!}
                {!!  Form::text('contact_id',null,['id'=>'contact_id','class'=>'form-control','placeholder'=>__('general.contact')]) !!}
            </div>

            <div class="col-md-3">
                {!!  Html::decode(Form::label('nationality_id' ,__('general.nationality') ,['class'=>'form-label']))   !!}
                {!!  Form::select('nationality_id', \App\Services\PersonService::nationalitiesForDropdown(), request()->has('nationality_id')?request()->get('nationality_id'):null,['id'=>'nationality_id',
                    'class'=>'select2 form-control', 'placeholder'=>__('general.nationality'),'style'=>'width:100%'])
                !!}
            </div>

        </div>

        <div class="row my-3">
            <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-primary w-md">{{ __('general.search') }} <i class="fa fa-search"></i></button>
                <a href="{{ route('dashboard.print.hr') }}" class="btn btn-primary w-md">{{ __('general.clear') }} <i class="fa fa-times"></i></a>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>
