<div class="mb-3 row">

    <div class="col-md-4 my-2">
        {!!  Html::decode(Form::label('complain_type_id' ,__('general.select_complain_type').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
        {!!  Form::select('complain_type_id', \App\Services\RealEstate\FrontDeskService::complainTypeDropdown(),null,['id'=>'complain_type_id',
            'style' => 'width:100%;', 'class'=>'select2 form-control', 'placeholder'=>__('general.select_complain_type'),'required'])
        !!}
    </div>

    <div class="col-md-4 my-2">
        {!!  Html::decode(Form::label('source_id' ,__('general.select_source').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
        {!!  Form::select('source_id', \App\Services\RealEstate\FrontDeskService::sourceDropdown(),null,['id'=>'source_id',
            'style' => 'width:100%;', 'class'=>'select2 form-control', 'placeholder'=>__('general.select_source'),'required'])
        !!}
    </div>

    <div class="col-md-4 my-2">
        {!!  Html::decode(Form::label('' ,__('general.complain_by').'<i class="text-danger">*</i>' ,['class'=>'col-form-label']))   !!}
        {!!  Form::text('complain_by',null,['id'=>'complain_by','class'=>'form-control ','placeholder'=>__('general.complain_by'), 'required']) !!}
        @error('complain_by')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-md-4 my-2">
        {!!  Html::decode(Form::label('phone' ,__('general.phone') ,['class'=>'col-form-label']))   !!}
        {!!  Form::number('phone',null,['id'=>'phone','class'=>'form-control ','placeholder'=>__('general.phone')]) !!}
    </div>

    <div class="col-md-4 my-2">
        {!!  Html::decode(Form::label('action_taken' ,__('general.action_taken') ,['class'=>'col-form-label']))   !!}
        {!!  Form::text('action_taken',null,['id'=>'action_taken','class'=>'form-control','placeholder'=>__('general.action_taken')]) !!}
    </div>

    <div class="col-md-4 my-2">
        {!!  Html::decode(Form::label('assigned' ,__('general.assigned') ,['class'=>'col-form-label']))   !!}
        {!!  Form::text('assigned',null,['id'=>'assigned','class'=>'form-control ','placeholder'=>__('general.assigned')]) !!}
    </div>

    <div class="col-md-4 my-2">
        {!!  Html::decode(Form::label('date' ,__('general.date') ,['class'=>'col-form-label']))   !!}
        {!!  Form::text('date',null,['id'=>'date','class'=>'form-control datepicker','placeholder'=>__('general.date')]) !!}
    </div>

</div>

<div class="row my-3">
    <div class="col-md-4 my-2">
        {!!  Html::decode(Form::label('note' ,__('general.note') ,['class'=>'form-label']))   !!}
        {!!  Form::textarea('note',null,['id'=>'note','class'=>'form-control','placeholder'=>__('general.note'),'rows'=>'3']) !!}
    </div>

    <div class="col-md-4 my-2">
        {!!  Html::decode(Form::label('description' ,__('general.description') ,['class'=>'form-label']))   !!}
        {!!  Form::textarea('description',null,['id'=>'description','class'=>'form-control','placeholder'=>__('general.description'),'rows'=>'3']) !!}
    </div>

{{--    <div class="col-md-4 my-2">--}}
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
