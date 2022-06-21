<div class="row mb-3">
    <div class="col">
        {!!  Html::decode(Form::label('person_type' ,__('general.person_type') ,['class'=>'col-form-label']))   !!}
        {!!  Form::select('person_type', [],null,['id'=>'person_type',
                            'class'=>'select2 form-control form-select', 'placeholder'=>__('general.person_type')])
                        !!}
    </div>

    <div class="col">
        {!!  Html::decode(Form::label('status' ,__('general.status') ,['class'=>'col-form-label']))   !!}
        {!!  Form::select('status', [],null,['id'=>'status',
                            'class'=>'select2 form-control form-select', 'placeholder'=>__('general.status')])
                        !!}
    </div>
</div>
<hr>
