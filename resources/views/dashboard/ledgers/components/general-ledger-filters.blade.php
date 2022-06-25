<div class="card">
    <div class="card-header border-0" style="background-color: transparent !important;">
        <div class="row">
            <div class="col-md-10">
                <h4 class="card-title"><i class="fas fa-filter text-purple"></i> {{ __('general.filters') }}</h4>
            </div>
            <div class="col-md-2">
                <div class="card-actions">
                    <a class="btn btn-primary btn-action d-inline-flex align-items-center justify-content-center" data-action="collapse"><i class="ti-minus"></i></a>

                </div>
            </div>
        </div>
    </div>

    <div class="card-body collapse show">
        {!! Form::open(['url' => route('dashboard.general-ledger'), 'method' => 'GET','files' => true]) !!}
        <div class="row mb-2">
            <div class="col-md-3">
                {!!  Html::decode(Form::label('general_head' ,__('general.general_head').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
                {!!  Form::select('general_head', $generalHeads, request()->has('general_head')?request()->get('general_head'):null,['id'=>'general_head',
                    'class'=>'select2 form-control', 'placeholder'=>__('general.ph_general_head'),'style'=>'width:100%', 'onchange'=>'getTransactionHeads();'])
                !!}
            </div>
            <div class="col-md-3">
                {!!  Html::decode(Form::label('transaction_head' ,__('general.transaction_head').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
                {!!  Form::select('transaction_head', [], request()->has('transaction_head')?request()->get('transaction_head'):null,['id'=>'transaction_head',
                    'class'=>'select2 form-control', 'placeholder'=>__('general.ph_transaction_head'),'style'=>'width:100%'])
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
        <div class="row">
            <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-primary w-md">{{ __('general.search') }} <i class="fa fa-search"></i></button>
                <a href="{{ route('dashboard.general-ledger') }}" class="btn btn-primary w-md">{{ __('general.clear') }} <i class="fa fa-times"></i></a>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>
