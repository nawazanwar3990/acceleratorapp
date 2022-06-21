<div class="form-group row">

    <div class="col-md-4 my-2">
        {!!  Html::decode(Form::label('to_title' ,__('general.to_title').'<i class="text-danger">*</i>' ,['class'=>'col-form-label']))   !!}
        {!!  Form::text('to_title',null,['id'=>'to_title','class'=>'form-control ','placeholder'=>__('general.to_title'), 'required']) !!}
        @error('to_title')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-md-4 my-2">
        {!!  Html::decode(Form::label('from_title' ,__('general.from_title').'<i class="text-danger">*</i>' ,['class'=>'col-form-label']))   !!}
        {!!  Form::text('from_title',null,['id'=>'from_title','class'=>'form-control ','placeholder'=>__('general.from_title'), 'required']) !!}
        @error('from_title')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-md-4 my-2">
        {!!  Html::decode(Form::label('reference_no' ,__('general.reference_number') ,['class'=>'col-form-label']))   !!}
        {!!  Form::number('reference_no',null,['id'=>'reference_no','class'=>'form-control ','placeholder'=>__('general.reference_number')]) !!}
    </div>

    <div class="col-md-4 my-2">
        {!!  Html::decode(Form::label('address' ,__('general.address') ,['class'=>'col-form-label']))   !!}
        {!!  Form::text('address',null,['id'=>'address','class'=>'form-control ','placeholder'=>__('general.address')]) !!}
    </div>

    <div class="col-md-4 my-2">
        {!!  Html::decode(Form::label('date' ,__('general.date') ,['class'=>'col-form-label']))   !!}
        {!!  Form::text('date',null,['id'=>'date','class'=>'form-control datepicker','placeholder'=>__('general.date')]) !!}
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
