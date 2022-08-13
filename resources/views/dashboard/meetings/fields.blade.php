<div class="mb-3 row">
    <div class="col-md-8">
        <div class="row">
            <div class="col-md-4 mb-3">
                {!!  Html::decode(Form::label('meeting_name' ,__('general.title') ,['class'=>'form-label']))   !!}
                {!!  Form::text('meeting_name',null,['id'=>'meeting_name','class'=>'form-control']) !!}
            </div>
            <div class="col-md-4 mb-3">
                {!!  Html::decode(Form::label('meeting_arranged_for' ,__('general.arranged_for') ,['class'=>'form-label']))   !!}
                {!!  Form::select('meeting_arranged_for',\App\Enum\MeetingArrangedForEnum::getTranslationKeys(),null,['id'=>'meeting_arranged_for','class'=>'form-control ','required','placeholder'=>trans('general.select')]) !!}
            </div>
            <div class="col-md-4 mb-3">
                {!!  Html::decode(Form::label('meeting_type' ,__('general.type') ,['class'=>'form-label']))   !!}
                {!!  Form::select('meeting_type',\App\Enum\MeetingTypeEnum::getTranslationKeys(),null,['id'=>'meeting_type','class'=>'form-control ','required','placeholder'=>trans('general.select'),'onchange'=>'manage_meeting_type(this);']) !!}
            </div>
            <div class="col-md-4 mb-3 d-none" id="meeting_type_description_holder">
                {!!  Html::decode(Form::label('description' ,__('general.description') ,['class'=>'form-label']))   !!}
                {!!  Form::text('description',null,['id'=>'description','class'=>'form-control']) !!}
            </div>
            <div class="col-md-4 mb-3">
                {!!  Html::decode(Form::label('meeting_held_date' ,__('general.held_date') ,['class'=>'form-label']))   !!}
                {!!  Form::text('meeting_held_date',null,['id'=>'meeting_held_date','class'=>'form-control datepicker']) !!}
            </div>
            <div class="col-md-4 mb-3">
                {!!  Html::decode(Form::label('meeting_start_time' ,__('general.start_time') ,['class'=>'form-label']))   !!}
                {!!  Form::text('meeting_start_time',null,['id'=>'meeting_start_time','class'=>'form-control timepicker']) !!}
            </div>
            <div class="col-md-4 mb-3">
                {!!  Html::decode(Form::label('meeting_end_time' ,__('general.end_time') ,['class'=>'form-label']))   !!}
                {!!  Form::text('meeting_end_time',null,['id'=>'meeting_end_time','class'=>'form-control timepicker']) !!}
            </div>
            <div class="col-md-4 mb-3">
                {!!  Html::decode(Form::label('meeting_organized_by' ,__('general.organized_by') ,['class'=>'form-label']))   !!}
                {!!  Form::text('meeting_organized_by',null,['id'=>'meeting_organized_by','class'=>'form-control']) !!}
            </div>
            <div class="col-md-4 mb-3">
                {!!  Html::decode(Form::label('has_meeting_pass' ,__('general.meeting_pass') ,['class'=>'form-label']))   !!}
                {!!  Form::select('has_meeting_pass',\App\Services\GeneralService::yesOrNoForDropdown(),'no',['id'=>'has_meeting_pass','class'=>'form-control','onchange'=>'changeMeetingPass(this);']) !!}
            </div>
        </div>
    </div>
    <div class="col-md-4">
        {!!  Html::decode(Form::label('images' ,__('general.images') ,['class'=>'form-label']))   !!}
        @include('components.images-field',['images'=>$for=='edit'?$model->images:[]])
    </div>
</div>
