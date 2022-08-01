<div class="mb-3 row">
   <div class="col-md-8">
      <div class="row">
          <div class="col-md-4 mb-3">
              {!!  Html::decode(Form::label('meeting_arranged_for' ,__('general.arranged_for') ,['class'=>'form-label']))   !!}
              {!!  Form::select('meeting_arranged_for',\App\Enum\MeetingArrangedForEnum::getTranslationKeys(),null,['id'=>'meeting_arranged_for','class'=>'form-control ','required']) !!}
          </div>
          <div class="col-md-4 mb-3">
              {!!  Html::decode(Form::label('meeting_type' ,__('general.type') ,['class'=>'form-label']))   !!}
              {!!  Form::select('meeting_type',\App\Enum\MeetingTypeEnum::getTranslationKeys(),null,['id'=>'meeting_type','class'=>'form-control ','required']) !!}
          </div>
          <div class="col-md-4 mb-3">
              {!!  Html::decode(Form::label('meeting_name' ,__('general.title') ,['class'=>'form-label']))   !!}
              {!!  Form::text('meeting_name',null,['id'=>'meeting_name','class'=>'form-control']) !!}
          </div>
          <div class="col-md-4 mb-3">
              {!!  Html::decode(Form::label('meeting_held_date' ,__('general.held_date') ,['class'=>'form-label']))   !!}
              {!!  Form::text('meeting_held_date',null,['id'=>'meeting_held_date','class'=>'form-control datepicker']) !!}
          </div>
          <div class="col-md-4 mb-3">
              {!!  Html::decode(Form::label('meeting_start_time' ,__('general.start_time') ,['class'=>'form-label']))   !!}
              {!!  Form::text('meeting_start_time',null,['id'=>'meeting_start_time','class'=>'form-control timepicker']) !!}
          </div>
      </div>
   </div>
    <div class="col-md-4">
        <div class="col-md-12 mb-3">
            {!!  Html::decode(Form::label('event_image' ,__('general.images') ,['class'=>'form-label']))   !!}
            {!!  Form::file('event_image',['id'=>'image','class'=>'form-control dropify']) !!}
        </div>
    </div>
</div>
