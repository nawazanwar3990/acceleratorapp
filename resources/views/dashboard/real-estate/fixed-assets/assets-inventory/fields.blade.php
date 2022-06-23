<div class="mb-3 row">
    <div class="col-md-4">
        {!!  Html::decode(Form::label('asset_code' ,__('general.asset_code').'<i class="text-danger">*</i>' ,['class'=>'col-form-label']))   !!}

        {!!  Form::text('asset_code',null,['id'=>'asset_code','class'=>'form-control ','placeholder'=>__('general.asset_code'), 'required']) !!}
        @error('name')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-md-4">
        {!!  Html::decode(Form::label('asset_name' ,__('general.asset_name').'<i class="text-danger">*</i>' ,['class'=>'col-form-label']))   !!}

        {!!  Form::text('asset_name',null,['id'=>'asset_name','class'=>'form-control ','placeholder'=>__('general.asset_name'), 'required']) !!}
        @error('name')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-md-4">
        {!!  Html::decode(Form::label('quantity' ,__('general.quantity') ,['class'=>'col-form-label']))   !!}
        {!!  Form::number('quantity',null,['id'=>'quantity','class'=>'form-control ','placeholder'=>__('general.quantity')]) !!}
        @error('quantity')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-md-4">
        {!!  Html::decode(Form::label('series_model' ,__('general.select_series_model') ,['class'=>'col-form-label']))   !!}
        {!!  Form::text('series_model',null,['id'=>'series_model','class'=>'form-control ','placeholder'=>__('general.series_model')]) !!}
    </div>

    <div class="col-md-4 my-2">
        {!!  Html::decode(Form::label('assets_unit_id' ,__('general.select_unit'),['class'=>'form-label']))   !!}
        {!!  Form::select('assets_unit_id', \App\Services\RealEstate\FixedAssetsService::AssetsUnitDropDown(),null,['id'=>'unit_id',
            'style' => 'width:100%;', 'class'=>'select2 form-control', 'placeholder'=>__('general.select_unit')])
        !!}
    </div>

    <div class="col-md-4 my-2">
        {!!  Html::decode(Form::label('assets_group' ,__('general.select_assets_group'),['class'=>'form-label']))   !!}
        {!!  Form::select('assets_group', [],null,['id'=>'assets_group',
            'style' => 'width:100%;', 'class'=>'select2 form-control', 'placeholder'=>__('general.select_assets_group')])
        !!}
    </div>

    <div class="col-md-4 my-2">
        {!!  Html::decode(Form::label('hr_id' ,__('general.select_managed_by'),['class'=>'form-label']))   !!}
        {!!  Form::select('hr_id', \App\Services\RealEstate\HrService::HrForDropdown(),null,['id'=>'hr_id',
            'style' => 'width:100%;', 'class'=>'select2 form-control', 'placeholder'=>__('general.select_managed_by')])
        !!}
    </div>

    <div class="col-md-4 my-2">
        {!!  Html::decode(Form::label('assets_location_id' ,__('general.select_assets_location'),['class'=>'form-label']))   !!}
        {!!  Form::select('assets_location_id', \App\Services\RealEstate\FixedAssetsService::AssetsLocationDropDown(),null,['id'=>'assets_location_id',
            'style' => 'width:100%;', 'class'=>'select2 form-control', 'placeholder'=>__('general.select_assets_location')])
        !!}
    </div>

    <div class="col-md-4">
        {!!  Html::decode(Form::label('date_of_purchase' ,__('general.date_of_purchase') ,['class'=>'col-form-label']))   !!}
        {!!  Form::text('date_of_purchase',null,['id'=>'date_of_purchase','class'=>'form-control datepicker','placeholder'=>__('general.date_of_purchase')]) !!}
    </div>

    <div class="col-md-4">
        {!!  Html::decode(Form::label('warranty_period' ,__('general.warranty_period') ,['class'=>'col-form-label']))   !!}
        {!!  Form::number('warranty_period',null,['id'=>'warranty_period','class'=>'form-control','placeholder'=>__('general.warranty_period')]) !!}
    </div>

    <div class="col-md-4">
        {!!  Html::decode(Form::label('unit_price' ,__('general.unit_price') ,['class'=>'col-form-label']))   !!}
        {!!  Form::number('unit_price',null,['id'=>'unit_price','class'=>'form-control','placeholder'=>__('general.unit_price')]) !!}
    </div>

    <div class="col-md-4">
        {!!  Html::decode(Form::label('depreciation' ,__('general.depreciation') ,['class'=>'col-form-label']))   !!}
        {!!  Form::number('depreciation',null,['id'=>'depreciation','class'=>'form-control','placeholder'=>__('general.depreciation')]) !!}
    </div>

    <div class="col-md-6">
        {!!  Html::decode(Form::label('description' ,__('general.description') ,['class'=>'col-form-label']))   !!}
        {!!  Form::textarea('description',null,['id'=>'description','class'=>'form-control','placeholder'=>__('general.description'),'rows'=>3]) !!}
    </div>

{{--    <div class="col-md-6 my-2">--}}
{{--        {!!  Html::decode(Form::label('attachment' ,__('general.attachment') ,['class'=>'form-label']))   !!}--}}
{{--        {!!  Form::file('attachment',['id'=>'note','class'=>'form-control dropify','placeholder'=>__('general.attachment'),'data-height'=>60]) !!}--}}
{{--    </div>--}}

</div>

<h4 class="card-title text-purple">{{ __('general.media') }}</h4>
<hr>
<div class="fields">

    <div class="row mb-3">

        <div class="col-md-12">
            <h5 class="card-title">{{ __('general.documents') }}</h5>
            <small class="text-primary">Allowed Formats: PDF, DOC, DOCX,JPG,JPEG,PNG,XLSX,XLS,</small></br>
            <div class="row">
                <div class="col-sm-10">
                    {!! Form::file('documents[]',['class'=>'form-control dropify', 'data-height' => '75', 'data-allowed-file-extensions' => 'doc docx pdf jpg jpeg png xlsx xls']) !!}
                </div>
                <div class="col-sm-2">
                    <button type="button" class="btn btn-primary" onclick="addDocumentField();"><i
                            class="fas fa-plus"></i></button>
                </div>
            </div>

            <div id="documents" class="pt-3">
            </div>
        </div>

    </div>

</div>
