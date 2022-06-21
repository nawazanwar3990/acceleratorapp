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
        {!! Form::open(['url' => route('dashboard.filter.flat.owner.data'), 'method' => 'GET','files' => true]) !!}
        <div class="row mb-2">

            <div class="col-md-3">
                {!!  Html::decode(Form::label('status' ,__('general.flat_owners') ,['class'=>'form-label']))   !!}
                {!!  Form::select('status', \App\Services\RealEstate\FlatService::getFlatOwnerStatus(), request()->has('status')?request()->get('status'):null,['id'=>'status',
                    'class'=>'select2 form-control', null,'style'=>'width:100%'])
                !!}
            </div>

            <div class="col-md-3">
                {!!  Html::decode(Form::label('flat_id' ,__('general.flats') ,['class'=>'form-label']))   !!}
                {!!  Form::select('flat_id', \App\Services\RealEstate\FlatService::FlatForDropdown(), request()->has('flat_id')?request()->get('flat_id'):null,['id'=>'flat_id',
                    'class'=>'select2 form-control', 'placeholder'=>__('general.flats'),'style'=>'width:100%'])
                !!}
            </div>

            <div class="col-md-3">
                {!!  Html::decode(Form::label('start_date' ,__('general.start_date') ,['class'=>'form-label']))   !!}
                <div class="input-group">
                    {!!  Form::text('start_date',request()->has('start_date')?request()->get('start_date'):null,['id'=>'date','class'=>'form-control datepicker', 'autocomplete'=>'off']) !!}
                    <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                </div>
            </div>
            <div class="col-md-3">
                {!!  Html::decode(Form::label('end_date' ,__('general.end_date') ,['class'=>'form-label']))   !!}
                <div class="input-group">
                    {!!  Form::text('end_date',request()->has('end_date')?request()->get('end_date'):null,['id'=>'date','class'=>'form-control datepicker', 'autocomplete'=>'off']) !!}
                    <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                </div>
            </div>

        </div>

        <div class="row my-3">
            <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-primary w-md">{{ __('general.search') }} <i class="fa fa-search"></i></button>
                <a href="{{ route('dashboard.print.flat.owner') }}" class="btn btn-primary w-md">{{ __('general.clear') }} <i class="fa fa-times"></i></a>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>
