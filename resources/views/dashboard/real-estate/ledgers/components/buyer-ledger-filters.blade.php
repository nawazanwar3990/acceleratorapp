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
        {!! Form::open(['url' => route('dashboard.buyer-ledger'), 'method' => 'GET','files' => true]) !!}
        <div class="row mb-2">
            <div class="col-md-4">
                {!!  Html::decode(Form::label('buyer_id' ,__('general.buyer') ,['class'=>'form-label']))   !!}
                {!!  Form::select('buyer_id', $buyers, request()->has('buyer_id')?request()->get('buyer_id'):null,['id'=>'buyer_id',
                    'class'=>'select2 form-control', 'placeholder'=>__('general.ph_buyer'),'style'=>'width:100%'])
                !!}
            </div>
            <div class="col-md-4">
                {!!  Html::decode(Form::label('start_date' ,__('general.start_date') ,['class'=>'form-label']))   !!}
                <div class="input-group">
                    {!!  Form::text('start_date',request()->has('start_date')?request()->get('start_date'):null,['id'=>'date','class'=>'form-control datepicker', 'autocomplete'=>'off']) !!}
                    <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                </div>
            </div>
            <div class="col-md-4">
                {!!  Html::decode(Form::label('end_date' ,__('general.end_date') ,['class'=>'form-label']))   !!}
                <div class="input-group">
                    {!!  Form::text('end_date',request()->has('end_date')?request()->get('end_date'):null,['id'=>'date','class'=>'form-control datepicker', 'autocomplete'=>'off']) !!}
                    <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-primary w-md">{{ __('general.search') }} <i class="fa fa-search"></i></button>
                <a href="{{ route('dashboard.buyer-ledger') }}" class="btn btn-primary w-md">{{ __('general.clear') }} <i class="fa fa-times"></i></a>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>
