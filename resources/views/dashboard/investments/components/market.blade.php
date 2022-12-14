<div class="row">
    <div class="col-md-12 form-group">
        <label for="industry_of_start_up" class="form-label">What is the industry of your startup?</label>
        {!! Form::text('industry_of_start_up',str_replace('_',' ',$model->industry_of_start_up),['id'=>'industry_of_start_up','class'=>'form-control','required']) !!}
    </div>
    <div class="col-md-12 form-group">
        <label for="founder_domain" class="form-label">Do the founders have domain expertise in the field?</label>
        {!! Form::text('founder_domain',str_replace('_',' ',$model->founder_domain),['id'=>'founder_domain','class'=>'form-control','required']) !!}
    </div>
    <div class="col-md-12 form-group">
        <label for="total_addressable_market" class="form-label">What is your Total Addressable Market? (SAR)</label>
        {!! Form::text('total_addressable_market',str_replace('_',' ',$model->total_addressable_market),['id'=>'total_addressable_market','class'=>'form-control','required']) !!}
    </div>
    <div class="col-md-12 form-group">
        <label for="three_key_competitors" class="form-label">Who are your 3 key competitors? Why would customers choose
            you over them?</label>
        {!! Form::textarea('three_key_competitors',str_replace('_',' ',$model->three_key_competitors),['id'=>'three_key_competitors','class'=>'form-control','rows'=>'3','cols'=>'0','required']) !!}
    </div>
    <div class="col-md-12 form-group">
        <label for="product_service" class="form-label">How do you commercialize your product or service?</label>
        {!! Form::text('product_service',str_replace('_',' ',$model->product_service),['id'=>'product_service','class'=>'form-control','required']) !!}
    </div>
    <div class="col-md-12 form-group"
         style="display:{{ isset($model) && in_array($model->product_service,['b2b-business-to-business','b2g-business-to-government'])?'block':'none' }}">
        @if($model->product_service_value=='already_contract_signed')
            <label for="already_contract_signed" class="form-label">How do you commercialize your product or
                service?</label>
            {!! Form::text('already_contract_signed',str_replace('_',' ',$model->already_contract_signed),['id'=>'already_contract_signed','class'=>'form-control','required']) !!}
        @endif
        @if($model->product_service_value=='yet_to_sign')
            <label for="yet_to_sign" class="form-label">Yet to sign?</label>
            {!! Form::text('yet_to_sign',str_replace('_',' ',$model->yet_to_sign),['id'=>'yet_to_sign','class'=>'form-control','required']) !!}
        @endif
    </div>
    <div class="col-md-12 form-group">
        <label for="suitable_competitive_edge" class="form-label">If you have a
            sustainable competitive edge, do you believe you can sustain & further
            develop this competitive edge for the next 2 years?</label>
        {!! Form::text('suitable_competitive_edge',str_replace('_',' ',$model->suitable_competitive_edge),['id'=>'suitable_competitive_edge','class'=>'form-control','required']) !!}
    </div>
    <div class="col-md-12 form-group"
         style="display:{{ isset($model)&& $model->suitable_competitive_edge=='yes'?'block':'none' }};">
        <label for="competitive_how_so" class="form-label"></label>
        {!! Form::textarea('competitive_how_so',str_replace('_',' ',$model->competitive_how_so),['id'=>'competitive_how_so','class'=>'form-control','rows'=>'3','cols'=>'30']) !!}
    </div>
</div>
