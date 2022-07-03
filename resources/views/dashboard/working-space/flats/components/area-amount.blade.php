<div class="">

    <h4 class="card-title text-purple">{{ __('general.area_sales_price') }}</h4>
    <hr>
    <div class="row mb-2">
        <div class="col mb-3">
            {!!  Html::decode(Form::label('height' ,__('general.height').'<i class="text-danger">*</i>',['class'=>'form-label']))   !!}
            {!!  Form::number('height',null,['min' => 1, 'step' => 'any', 'id'=>'height','class'=>'form-control ','placeholder'=>__('general.height'), 'required']) !!}
            @error('height')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col mb-3">
            {!!  Html::decode(Form::label('length' ,__('general.length').'<i class="text-danger">*</i>',['class'=>'form-label']))   !!}
            {!!  Form::number('length',null,['min' => 1, 'step' => 'any', 'id'=>'length','class'=>'form-control ','placeholder'=>__('general.length'), 'required',  'onchange' => 'calculateArea();']) !!}
            @error('length')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col mb-3">
            {!!  Html::decode(Form::label('width' ,__('general.width').'<i class="text-danger">*</i>',['class'=>'form-label']))   !!}
            {!!  Form::number('width',null,['min' => 1, 'step' => 'any', 'id'=>'width','class'=>'form-control ','placeholder'=>__('general.width'), 'required', 'onchange' => 'calculateArea();']) !!}
            @error('width')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col mb-3">
            {!!  Html::decode(Form::label('area' ,__('general.area'),['class'=>'form-label']))   !!}
            {!!  Form::text('area',null,['id'=>'area','class'=>'form-control ','placeholder'=>'0','readonly', 'tabindex'=>'-1', 'required']) !!}
            @error('area')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-md-2 mb-3">
            <div class="custom-control custom-radio">
                {!!  Form::radio('rate_type','sft', isset($model) ? ($model->rate_type == 'sft' ? true: false) : true,['id'=>'rate_type_sft','class'=>'form-check-input rate-type']) !!}
                {!!  Html::decode(Form::label('rate_type_sft' ,__('general.rate_square_feet'),['class'=>'form-check-label']))   !!}
            </div>
        </div>
        <div class="col-md-2 mb-3">
            <div class="custom-control custom-radio">
                {!!  Form::radio('rate_type','lumpsum', isset($model) ? ($model->rate_type == 'lumpsum' ? true: false) : false,['id'=>'rate_type_lumpsum','class'=>'form-check-input rate-type']) !!}
                {!!  Html::decode(Form::label('rate_type_lumpsum' ,__('general.lumpsum'),['class'=>'form-check-label']))   !!}
            </div>
        </div>
    </div>
    <div class="row mb-2">
        <div class="col mb-3">
            {!!  Html::decode(Form::label('rate_square_feet' ,__('general.sale_rate_square_feet'),['class'=>'form-label']))   !!}
            {!!  Form::number('rate_square_feet',null,['id'=>'rate_square_feat','class'=>'form-control ','placeholder'=>'0.00', 'onkeyup' => 'calculateArea();', 'onchange' => 'calculateArea();', 'required']) !!}
            @error('rate_square_feat')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col mb-3">
            {!!  Html::decode(Form::label('total_amount' ,__('general.sales_price'),['class'=>'form-label']))   !!}
            {!!  Form::text('total_amount',null,['id'=>'total_amount','class'=>'form-control ','placeholder'=>'0.00', 'readonly', 'autocomplete'=>'off']) !!}
            @error('total_amount')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
</div>

