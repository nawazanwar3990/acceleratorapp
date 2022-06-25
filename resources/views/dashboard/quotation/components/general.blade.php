<div class="row mb-2">
    <div class="col-md-3">
        {!!  Html::decode(Form::label('date' ,__('general.date').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
        <div class="input-group">
            {!!  Form::text('date',\App\Services\GeneralService::formatDate((isset($for) ? $model->date : \Carbon\Carbon::today())),['id'=>'date','class'=>'form-control datepicker', 'autocomplete'=>'off']) !!}
            <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
        </div>
    </div>
    <div class="col-md-3">
        {!!  Html::decode(Form::label('quot_no' ,__('general.date') ,['class'=>'form-label']))   !!}
        {!!  Form::text('quot_no', isset($for) ? $model->quot_no : \App\Services\Accounts\VoucherService::getNextVoucherNo('QUOTATION'),['id'=>'quot_no','class'=>'form-control', 'tabindex'=>'-1', 'readonly']) !!}
    </div>
    <div class="col-md-3">
        {!!  Html::decode(Form::label('customer_name' ,__('general.customer_name').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
        {!!  Form::text('customer_name', null,['id'=>'customer_name','class'=>'form-control', 'required']) !!}
    </div>
    <div class="col-md-3">
        {!!  Html::decode(Form::label('customer_contact' ,__('general.customer_contact').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
        {!!  Form::text('customer_contact', null,['id'=>'customer_contact','class'=>'form-control mobile-mask', 'required']) !!}
    </div>
</div>

<h4 class="card-title text-purple">{{ __('general.property_details') }}</h4>
<hr>
<div class="row mb-2">
    <div class="col-md-3">
        {!!  Html::decode(Form::label('floor_id' ,__('general.floor').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
        {!!  Form::select('floor_id', \App\Services\FloorService::getFloorsForDropdown(),null,['id'=>'floor_id', 'onchange'=>'getFlatsOfFloor(this);',
            'class'=>'select2 form-control', 'placeholder'=>__('general.ph_floor_name'),'required','style'=>'width:100%'])
        !!}
        @error('floor_id')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="col-md-3">
        {!!  Html::decode(Form::label('flat_id' ,__('general.flat_shop').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
        {!!  Form::select('flat_id', [],null,['id'=>'flat_id', 'onchange'=>'getFlatDetails(this);',
            'class'=>'select2 form-control', 'placeholder'=>__('general.ph_flat_name'),'required','style'=>'width:100%'])
        !!}
        @error('flat_id')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>
<div class="row mb-2 flat-details-row" style="display: none;">
    <div class="col-md-3">
        {!!  Html::decode(Form::label('height' ,__('general.height_ft') ,['class'=>'form-label']))   !!}
        {!!  Form::text('height',null,['id'=>'height','class'=>'form-control ','placeholder'=>__('general.height'), 'disabled', 'tabindex'=>'-1']) !!}
    </div>
    <div class="col-md-3">
        {!!  Html::decode(Form::label('width' ,__('general.width_ft') ,['class'=>'form-label']))   !!}
        {!!  Form::text('width',null,['id'=>'width','class'=>'form-control ','placeholder'=>__('general.width'), 'disabled', 'tabindex'=>'-1']) !!}
    </div>
    <div class="col-md-3">
        {!!  Html::decode(Form::label('length' ,__('general.length_ft') ,['class'=>'form-label']))   !!}
        {!!  Form::text('length',null,['id'=>'length','class'=>'form-control ','placeholder'=>__('general.length'), 'disabled', 'tabindex'=>'-1']) !!}
    </div>
    <div class="col-md-3">
        {!!  Html::decode(Form::label('area' ,__('general.area_sft') ,['class'=>'form-label']))   !!}
        {!!  Form::text('area',null,['id'=>'area','class'=>'form-control ','placeholder'=>__('general.area'), 'disabled', 'tabindex'=>'-1']) !!}
    </div>
</div>
<div class="row mb-4 flat-details-row" style="display: none;">
    <div class="col-md-3">
        {!!  Html::decode(Form::label('amount' ,__('general.amount') ,['class'=>'form-label']))   !!}
        {!!  Form::text('amount',null,['id'=>'amount','class'=>'form-control ','placeholder'=>__('general.amount'), 'disabled', 'tabindex'=>'-1']) !!}
    </div>
    <div class="col-md-3">
        {!!  Html::decode(Form::label('general_services' ,__('general.security_services') ,['class'=>'form-label']))   !!}
        {!!  Form::select('general_services[]', \App\Services\BuildingService::getBuildingServices() ,null,['id'=>'general_services', 'multiple',
            'class'=>'select2 form-control','style'=>'width:100%', 'disabled', 'tabindex'=>'-1'])
        !!}
    </div>
    <div class="col-md-3">
        {!!  Html::decode(Form::label('security_services' ,__('general.security_services') ,['class'=>'form-label']))   !!}
        {!!  Form::select('security_services[]', \App\Services\BuildingService::getBuildingServices('security'),null,['id'=>'security_services', 'multiple',
            'class'=>'select2 form-control','style'=>'width:100%', 'disabled', 'tabindex'=>'-1'])
        !!}
    </div>
    <div class="col-md-3">
        {!!  Html::decode(Form::label('creation_date' ,__('general.creation_date') ,['class'=>'form-label']))   !!}
        <div class="input-group">
            {!!  Form::text('creation_date', null,['id'=>'creation_date','class'=>'form-control', 'readonly', 'tabindex'=>'-1']) !!}
            <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
        </div>
    </div>
</div>
