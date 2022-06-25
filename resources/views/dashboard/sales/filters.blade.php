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
        {!! Form::open(['url' => route('dashboard.sales.index'), 'method' => 'GET','files' => true]) !!}
        <div class="row mb-2">
            <div class="col-md-3">
                {!!  Html::decode(Form::label('transfer_no' ,__('general.transfer_no') ,['class'=>'form-label']))   !!}
                {!!  Form::select('transfer_no', $transferNoList, request()->has('transfer_no')?request()->get('transfer_no'):null,['id'=>'transfer_no',
                    'class'=>'select2 form-control', 'placeholder'=>__('general.ph_transfer_no'),'style'=>'width:100%'])
                !!}
            </div>
            <div class="col-md-3">
                {!!  Html::decode(Form::label('flat_id' ,__('general.flat_shop_name') ,['class'=>'form-label']))   !!}
                <select name="flat_id" class="form-control" id="flat_id">
                    <optgroup class='def-cursor' label="{{ __('general.flat_name') }}" data-building="{{ __('general.building') }}" data-floor="{{ __('general.floor') }}">
                        <option value="" data-building="" data-floor=''>{{ __('general.ph_flat_name') }}</option>
                        @foreach($flatsList as $record)
                            <option data-building="{{ $record->Building->name }}" data-floor="{{ $record->floor->floor_name }}" value="{{ $record->id }}" {{request()->filled('flat_id')? 'selected' : ''}}>
                                {{ $record->flat_number }} - {{ $record->flat_name }}
                            </option>
                        @endforeach
                    </optgroup>
                </select>
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
                <a href="{{ route('dashboard.sales.index') }}" class="btn btn-primary w-md">{{ __('general.clear') }} <i class="fa fa-times"></i></a>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>
