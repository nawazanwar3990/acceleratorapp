<div class="mb-3 row">
   <div class="col-md-8">
      <div class="row">
          <div class="col-md-4">
              {!!  Html::decode(Form::label('name' ,__('general.name') ,['class'=>'form-label']))   !!}
              {!!  Form::text('name',null,['id'=>'name','class'=>'form-control ','required']) !!}
              @error('name')
              <span class="text-danger">{{ $message }}</span>
              @enderror
          </div>
          <div class="col-md-4">
              {!!  Html::decode(Form::label('start_date' ,__('general.start_date') ,['class'=>'form-label']))   !!}
              {!!  Form::date('start_date',isset($for)?$model->start_date:null,['id'=>'start_date','class'=>'form-control']) !!}
          </div>
          <div class="col-md-4">
              {!!  Html::decode(Form::label('end_date' ,__('general.end_date') ,['class'=>'form-label']))   !!}
              {!!  Form::date('end_date',isset($for)?$model->end_date:null,['id'=>'end_date','class'=>'form-control']) !!}
          </div>
          <div class="col-md-4">
              {!!  Html::decode(Form::label('start_time' ,__('general.start_time') ,['class'=>'form-label']))   !!}
              {!!  Form::time('start_time',isset($for)?$model->start_time:null,['id'=>'start_time','class'=>'form-control']) !!}
          </div>
          <div class="col-md-4">
              {!!  Html::decode(Form::label('end_time' ,__('general.end_time') ,['class'=>'form-label']))   !!}
              {!!  Form::time('end_time',isset($for)?$model->end_time:null,['id'=>'end_time','class'=>'form-control']) !!}
          </div>
          <div class="col-md-4">
              {!!  Html::decode(Form::label('event_type' ,__('general.event_type') ,['class'=>'form-label']))   !!}
              {!!  Form::select('event_type',\App\Services\EventService::eventType(),null,['id'=>'event_type','class'=>'form-select', 'placeholder'=>'Select Option']) !!}
          </div>
      </div>
   </div>
    <div class="col-md-4">
        <div class="col-md-12">
            {!!  Html::decode(Form::label('image' ,__('general.images') ,['class'=>'form-label']))   !!}
            {!!  Form::file('image',['id'=>'image','class'=>'form-control dropify']) !!}
        </div>
    </div>
</div>
<div class="mb-3 row">
    <div class="col-12">
        {!!  Html::decode(Form::label('desc' ,__('general.description') ,['class'=>'form-label']))   !!}
        {!!  Form::textarea('desc',null,['id'=>'desc','class'=>'form-control', 'rows'=>'2']) !!}
    </div>
</div>
