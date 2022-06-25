<div class="mb-3 row">

    <div class="col-md-4 my-2">
        {!!  Html::decode(Form::label('purpose_id' ,__('general.select_purpose').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
        {!!  Form::select('purpose_id', \App\Services\FrontDeskService::purposeDropdown(),null,['id'=>'purpose_id',
            'style' => 'width:100%;', 'class'=>'select2 form-control', 'placeholder'=>__('general.select_purpose'),'required'])
        !!}
    </div>

    <div class="col-md-4 my-2">
        {!!  Html::decode(Form::label('name' ,__('general.name').'<i class="text-danger">*</i>' ,['class'=>'col-form-label']))   !!}
        {!!  Form::text('name',null,['id'=>'name','class'=>'form-control ','placeholder'=>__('general.name'), 'required']) !!}
        @error('name')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-md-4 my-2">
        {!!  Html::decode(Form::label('phone' ,__('general.phone') ,['class'=>'col-form-label']))   !!}
        {!!  Form::number('phone',null,['id'=>'phone','class'=>'form-control ','placeholder'=>__('general.phone')]) !!}
    </div>

    <div class="col-md-4 my-2">
        {!!  Html::decode(Form::label('cnic' ,__('general.cnic') ,['class'=>'col-form-label']))   !!}
        {!!  Form::text('cnic',null,['id'=>'cnic','class'=>'form-control cnic-mask','placeholder'=>__('general.cnic')]) !!}
    </div>

    <div class="col-md-4 my-2">
        {!!  Html::decode(Form::label('no_person' ,__('general.no_of_person') ,['class'=>'col-form-label']))   !!}
        {!!  Form::number('no_person',null,['id'=>'no_person','class'=>'form-control ','placeholder'=>__('general.no_of_person')]) !!}
        @error('no_person')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-md-4 my-2">
        {!!  Html::decode(Form::label('date' ,__('general.date') ,['class'=>'col-form-label']))   !!}
        {!!  Form::text('date',null,['id'=>'date','class'=>'form-control datepicker','placeholder'=>__('general.date')]) !!}
    </div>

    <div class="col-md-4 my-2">
        {!!  Html::decode(Form::label('time_in' ,__('general.time_in') ,['class'=>'col-form-label']))   !!}
        {!!  Form::text('time_in',null,['id'=>'time_in','class'=>'form-control clockpicker','placeholder'=>__('general.time_in')]) !!}
    </div>

    <div class="col-md-4 my-2">
        {!!  Html::decode(Form::label('time_out' ,__('general.time_out') ,['class'=>'col-form-label']))   !!}
        {!!  Form::text('time_out',null,['id'=>'time_out','class'=>'form-control clockpicker','placeholder'=>__('general.time_out')]) !!}
    </div>

</div>

<div class="row my-3">
    <div class="col-md-6 my-2">
        {!!  Html::decode(Form::label('note' ,__('general.note') ,['class'=>'form-label']))   !!}
        {!!  Form::textarea('note',null,['id'=>'note','class'=>'form-control','placeholder'=>__('general.note'),'rows'=>'3']) !!}
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
