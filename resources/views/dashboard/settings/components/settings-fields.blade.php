<div class="row mt-5">
    <div class="col-md-6">
        <h3>{{ __('general.currency_format') }}</h3>
        <p>
            {{ __('general.currency_format_note') }}
        </p>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        {!!  Html::decode(Form::label('currency_format' ,__('general.select_currency_format') ,['class'=>'form-label']))   !!}
                        {!!  Form::select('currency_format', \App\Services\GeneralService::currencySymbols(),$records->currency_format,['id'=>'currency_format','class'=>'select2 form-control', 'placeholder'=>__('general.select_currency_format'),'style'=>'width="100%"']) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

