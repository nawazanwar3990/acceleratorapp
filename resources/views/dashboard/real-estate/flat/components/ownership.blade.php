<div class="my-3">
    <h4 class="card-title text-purple">{{ __('general.ownership') }}</h4>
    <hr>
    @include('dashboard.real-estate.common.hr-picker-with-percentage', ['fieldName' => 'owners', 'shareFieldName' => 'ownerShare'])

    <div class="row mt-2">
        <div class="col-md-6"></div>
        <div class="col-md-3">
            {!!  Html::decode(Form::label('purchase_rate_square_feet' ,__('general.purchase_rate_sft'),['class'=>'form-label']))   !!}
            {!!  Form::number('purchase_rate_square_feet',null,['min' => 1, 'step'=> 'any', 'id'=>'purchase_rate_square_feet','class'=>'form-control','placeholder'=> '0.00', 'onkeyup' => 'calculateArea();', 'onchange' => 'calculateArea();']) !!}
            @error('purchase_price')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-md-3">
            {!!  Html::decode(Form::label('purchase_price' ,__('general.purchase_price'),['class'=>'form-label']))   !!}
            {!!  Form::text('purchase_price',null,['id'=>'purchase_price','class'=>'form-control','placeholder'=> '0.00', 'readonly', 'autocomplete'=>'off']) !!}
            @error('purchase_price')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
</div>

