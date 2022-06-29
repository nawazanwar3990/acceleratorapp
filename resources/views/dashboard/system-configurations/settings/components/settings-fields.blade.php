{{--currency format--}}
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
<div class="row mt-5">
    <div class="col-md-6">
        <h3>{{ __('general.payment_type') }}</h3>
        <p>
            {{ __('general.payment_type_note') }}
        </p>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        {!!  Html::decode(Form::label('payment_type' ,__('general.payment_type') ,['class'=>'form-label']))   !!}
                        {!!  Form::select('payment_type[]', \App\Enum\PaymentTypeEnum::getTranslationKeys(),$records->payment_type,['id'=>'payment_type','class'=>'select2 form-control', 'placeholder'=>__('general.select_payment_type'),'style'=>'width="100%"','multiple']) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{--currency symbol position--}}
<div class="row mt-5">
    <div class="col-md-6">
        <h3>{{ __('general.currency_symbol_position') }}</h3>
        <p>
            {{ __('general.currency_symbol_position_note') }}
        </p>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12 mb-2">
                        {!!  Html::decode(Form::label('currency_symbol_position' ,__('general.select_currency_symbol_position') ,['class'=>'form-label']))   !!}
                        {!!  Form::select('currency_symbol_position', \App\Services\GeneralService::currencyPositionArray(),$records->currency_symbol_position,['id'=>'currency_symbol_position','class'=>'select2 form-control', 'placeholder'=>__('general.select_currency_symbol_position'),'style'=>'width="100%"','onchange'=>'currencySymbol(this.value)']) !!}
                    </div>
                    <p id="example_currency_symbol"></p>
                </div>
            </div>
        </div>
    </div>
</div>
{{--time zone--}}
<div class="row mt-5">
    <div class="col-md-6">
        <h3>{{ __('general.time_zone') }}</h3>
        <p>
            {{ __('general.time_zone_note') }}
        </p>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="row">

                    <div class="col-md-12">
                        {!!  Html::decode(Form::label('time_zone' ,__('general.select_time_zone') ,['class'=>'form-label']))   !!}
                        {!!  Form::select('time_zone', \App\Services\GeneralService::timeZoneArray(),$records->time_zone,['id'=>'time_zone','class'=>'select2 form-control', 'placeholder'=>__('general.select_time_zone'),'style'=>'width="100%"']) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{--Language--}}
<div class="row mt-5">
    <div class="col-md-6">
        <h3>{{ __('general.language') }}</h3>
        <p>
            {{ __('general.language_note') }}
        </p>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="row">

                    <div class="col-md-12">
                        {!!  Html::decode(Form::label('language' ,__('general.select_language') ,['class'=>'form-label']))   !!}
                        {!!  Form::select('language', \App\Services\GeneralService::languageArray(),$records->language ?? null,['id'=>'language','class'=>'select2 form-control', 'placeholder'=>__('general.select_language'),'style'=>'width="100%"']) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{--Date--}}
<div class="row mt-5">
    <div class="col-md-6">
        <h3>{{ __('general.date_format') }}</h3>
        <p>
            {{ __('general.date_format_note') }}

        </p>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="row">

                    <div class="col-md-12">
                        {!!  Html::decode(Form::label('select_date_format' ,__('general.select_date_format') ,['class'=>'form-label']))   !!}


                        <div class="input-group mb-2 mr-sm-2">
                            {!!  Form::text('date_format',$records->date_format ?? null,['id'=>'date_format','class'=>'form-control', 'autocomplete'=>'off','placeholder'=>__('general.select_date_format')]) !!}
                            <div class="input-group-prepend">
                                <div class="input-group-text rounded-0" data-html="true" data-toggle="tooltip"
                                     data-placement="top" title="<ul>
                                        <li>{{ __('general.date_format_d') }}</li>
                                        <li>{{ __('general.date_format_j') }}</li>
                                        <li>{{ __('general.date_format_F') }}</li>
                                        <li>{{ __('general.date_format_m') }}</li>
                                        <li>{{ __('general.date_format_M') }}</li>
                                        <li>{{ __('general.date_format_n') }}</li>
                                        <li>{{ __('general.date_format_Y') }}</li>
                                        <li>{{ __('general.date_format_y') }}</li>
                                    </ul>"
                                     style="padding: 0.686rem 0.76rem; background-color: #472051;color: #ffffff;border: none;">
                                    <i class="fa fa-info-circle"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{--print view--}}
<div class="row mt-5">
    <div class="col-md-6">
        <h3>{{ __('general.print_preview') }}</h3>
        <p>
            {{ __('general.print_preview_note') }}
        </p>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">

                <div class="row">
                    <div class="col-md-12">
                        {!!  Html::decode(Form::label('print_template' ,__('general.print_template') ,['class'=>'form-label']))   !!}
                        <div class="input-group mb-2">
                            {!!  Form::select('print_template', \App\Services\GeneralService::printThemeDropDown(),$records->print_template ?? null,['id'=>'print_template','class'=>'select2 form-control', 'placeholder'=>__('general.print_template'),'style'=>'width="100%"']) !!}
                            <span class="input-group-text p-0 bg-transparent border-0 rounded-0"
                                  id="basic-addon1">
                                        <button type="button" class="btn btn-primary py-2" onclick="themeView()"><i
                                                class="fa fa-eye"></i></button>
                                    </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
