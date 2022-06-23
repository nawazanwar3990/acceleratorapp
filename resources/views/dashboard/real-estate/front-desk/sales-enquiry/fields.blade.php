<div class="mb-3 row">
    <div class="col-md-4 my-2">
        {!!  Html::decode(Form::label('name' ,__('general.name').'<i class="text-danger">*</i>' ,['class'=>'col-form-label']))   !!}
        {!!  Form::text('name',null,['id'=>'name','class'=>'form-control ','placeholder'=>__('general.name'), 'required']) !!}
        @error('name')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-md-4 my-2">
        {!!  Html::decode(Form::label('phone' ,__('general.phone') ,['class'=>'col-form-label']))   !!}
        {!!  Form::text('phone',null,['id'=>'phone','class'=>'form-control ','placeholder'=>__('general.phone')]) !!}
    </div>

    <div class="col-md-4 my-2">
        {!!  Html::decode(Form::label('email' ,__('general.email') ,['class'=>'col-form-label']))   !!}
        {!!  Form::text('email',null,['id'=>'email','class'=>'form-control ','placeholder'=>__('general.email')]) !!}
    </div>

    <div class="col-md-4 my-2">
        {!!  Html::decode(Form::label('address' ,__('general.address') ,['class'=>'col-form-label']))   !!}
        {!!  Form::text('address',null,['id'=>'address','class'=>'form-control ','placeholder'=>__('general.address')]) !!}
    </div>

    <div class="col-md-4 my-2">
        {!!  Html::decode(Form::label('date' ,__('general.date') ,['class'=>'col-form-label']))   !!}
        {!!  Form::text('date',null,['id'=>'date','class'=>'form-control datepicker','placeholder'=>__('general.date')]) !!}
    </div>

    <div class="col-md-4 my-2">
        {!!  Html::decode(Form::label('next_followup_date' ,__('general.next_follow_up_date') ,['class'=>'col-form-label']))   !!}
        {!!  Form::text('next_followup_date',null,['id'=>'next_followup_date','class'=>'form-control datepicker','placeholder'=>__('general.next_follow_up_date')]) !!}
    </div>

    <div class="col-md-4 my-2">
        {!!  Html::decode(Form::label('assigned' ,__('general.select_assigned') ,['class'=>'form-label']))   !!}
        {!!  Form::select('assigned', \App\Services\RealEstate\HrService::HrForDropdown(),null,['id'=>'assigned',
            'style' => 'width:100%;', 'class'=>'select2 form-control', 'placeholder'=>__('general.select_assigned')])
        !!}
    </div>

    <div class="col-md-4 my-2">
        {!!  Html::decode(Form::label('reference_id' ,__('general.select_reference') ,['class'=>'form-label']))   !!}
        {!!  Form::select('reference_id', \App\Services\RealEstate\FrontDeskService::referenceDropdown(),null,['id'=>'reference_id',
            'style' => 'width:100%;', 'class'=>'select2 form-control', 'placeholder'=>__('general.select_reference')])
        !!}
    </div>

    <div class="col-md-4 my-2">
        {!!  Html::decode(Form::label('source_id' ,__('general.select_source') ,['class'=>'form-label']))   !!}
        {!!  Form::select('source_id', \App\Services\RealEstate\FrontDeskService::sourceDropdown(),null,['id'=>'source_id',
            'style' => 'width:100%;', 'class'=>'select2 form-control', 'placeholder'=>__('general.select_source')])
        !!}
    </div>

    <div class="col-md-6 my-2">
        {!!  Html::decode(Form::label('description' ,__('general.description') ,['class'=>'form-label']))   !!}
        {!!  Form::textarea('description',null,['id'=>'description','class'=>'form-control','placeholder'=>__('general.description'),'rows'=>'3']) !!}
    </div>

    <div class="col-md-6 my-2">
        {!!  Html::decode(Form::label('note' ,__('general.note') ,['class'=>'form-label']))   !!}
        {!!  Form::textarea('note',null,['id'=>'note','class'=>'form-control','placeholder'=>__('general.note'),'rows'=>'3']) !!}
    </div>
</div>
