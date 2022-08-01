<div class="mb-3 row">
   <div class="col-md-8">
      <div class="row">
          <div class="col-md-4 mb-3">
              {!!  Html::decode(Form::label('event_type' ,__('general.event_type') ,['class'=>'form-label']))   !!}
              {!!  Form::select('name',\App\Services\EventService::pluck_event_types(),null,['id'=>'event_type','class'=>'form-control ','required']) !!}
          </div>
          <div class="col-md-4 mb-3">
              {!!  Html::decode(Form::label('event_sub_type' ,__('general.event_sub_type') ,['class'=>'form-label']))   !!}
              {!!  Form::select('event_sub_type',array(),null,['id'=>'event_sub_type','class'=>'form-control ','required']) !!}
          </div>
          <div class="col-md-4 mb-3">
              {!!  Html::decode(Form::label('event_name' ,__('general.event_name') ,['class'=>'form-label']))   !!}
              {!!  Form::text('event_name',null,['id'=>'event_name','class'=>'form-control']) !!}
          </div>
          <div class="col-md-4 mb-3">
              {!!  Html::decode(Form::label('event_start_date' ,__('general.event_start_date') ,['class'=>'form-label']))   !!}
              {!!  Form::text('event_start_date',null,['id'=>'event_start_date','class'=>'form-control datepicker']) !!}
          </div>
          <div class="col-md-4 mb-3">
              {!!  Html::decode(Form::label('no_of_days' ,__('general.no_of_days') ,['class'=>'form-label']))   !!}
              {!!  Form::text('no_of_days',null,['id'=>'no_of_days','class'=>'form-control']) !!}
          </div>
          <div class="col-md-4 mb-3">
              {!!  Html::decode(Form::label('event_end_date' ,__('general.event_end_date') ,['class'=>'form-label']))   !!}
              {!!  Form::text('event_end_date',null,['id'=>'event_end_date','class'=>'form-control datepicker']) !!}
          </div>
          <div class="col-md-4 mb-3">
              {!!  Html::decode(Form::label('event_start_time' ,__('general.event_start_time') ,['class'=>'form-label']))   !!}
              {!!  Form::text('event_start_time',null,['id'=>'event_start_time','class'=>'form-control timepicker']) !!}
          </div>
          <div class="col-md-4 mb-3">
              {!!  Html::decode(Form::label('event_end_time' ,__('general.event_end_time') ,['class'=>'form-label']))   !!}
              {!!  Form::text('event_end_time',null,['id'=>'event_end_time','class'=>'form-control timepicker']) !!}
          </div>
          <div class="col-md-4 mb-3">
              {!!  Html::decode(Form::label('event_organized_by' ,__('general.event_organized_by') ,['class'=>'form-label']))   !!}
              {!!  Form::select('event_organized_by',\App\Enum\EventOrganizedByEnum::getTranslationKeys(),null,['id'=>'event_organized_by','class'=>'form-control ','required']) !!}
          </div>
          <div class="col-md-4 mb-3">
              {!!  Html::decode(Form::label('event_organized_for' ,__('general.event_organized_for') ,['class'=>'form-label']))   !!}
              {!!  Form::select('event_organized_for',\App\Enum\EventOrganizedForEnum::getTranslationKeys(),null,['id'=>'event_organized_for','class'=>'form-control ','required']) !!}
          </div>
          <div class="col-md-4 mb-3">
              {!!  Html::decode(Form::label('is_applied_ticker' ,__('general.is_applied_ticker') ,['class'=>'form-label']))   !!}
              {!!  Form::select('is_applied_ticker',['yes','no'],null,['id'=>'is_applied_ticker','class'=>'form-control ','required']) !!}
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
<div class="mb-3 row">
    <div class="col-md-12 mb-3">
        {!!  Html::decode(Form::label('event_social_media_url' ,__('general.event_social_media_url') ,['class'=>'form-label']))   !!}
        {!!  Form::text('event_social_media_url',null,['id'=>'event_social_media_url','class'=>'form-control']) !!}
    </div>
</div>
