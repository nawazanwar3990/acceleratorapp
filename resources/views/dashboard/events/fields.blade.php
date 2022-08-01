<div class="mb-3 row">
    <div class="col-md-8">
        <div class="row">
            <div class="col-md-4 mb-3 event_type_holder">
                {!!  Html::decode(Form::label('event_type' ,__('general.event_type') ,['class'=>'form-label']))   !!}
                <select name="event_type" class="form-control" onchange="applyEventType(this);">
                    <option value="" selected>{{ trans('general.select') }}</option>
                    @foreach (\App\Services\EventService::getEventTypes() as $eventType)
                        <option  value="{{ $eventType->slug }}"
                                 data-sub-types="{{ json_encode($eventType->children) }}">
                            {{ $eventType->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-4 mb-3 event_child_type_holder">
                {!!  Html::decode(Form::label('event_sub_type' ,__('general.event_sub_type') ,['class'=>'form-label']))   !!}
                {!!  Form::select('event_sub_type',array(),null,['id'=>'event_sub_type','class'=>'form-control ','required','placeholder'=>trans('general.select'),'onchange'=>'changeEventSubType(this);']) !!}
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
                {!!  Form::select('event_organized_by',\App\Enum\EventOrganizedByEnum::getTranslationKeys(),null,['id'=>'event_organized_by','class'=>'form-control ','required','onchange'=>'addOtherOrganizedBy(this);','placeholder'=>trans('general.select')]) !!}
            </div>
            <div class="col-md-4 mb-3">
                {!!  Html::decode(Form::label('event_organized_for' ,__('general.event_organized_for') ,['class'=>'form-label']))   !!}
                {!!  Form::select('event_organized_for',\App\Enum\EventOrganizedForEnum::getTranslationKeys(),null,['id'=>'event_organized_for','class'=>'form-control ','required','onchange'=>'addOtherOrganizedFor(this);','placeholder'=>trans('general.select')]) !!}
            </div>
            <div class="col-md-4 mb-3">
                {!!  Html::decode(Form::label('is_applied_ticker' ,__('general.is_applied_ticker') ,['class'=>'form-label']))   !!}
                {!!  Form::select('is_applied_ticker',['yes','no'],null,['id'=>'is_applied_ticker','class'=>'form-control ','required']) !!}
            </div>
        </div>
    </div>
    <div class="col-md-4">
        {!!  Html::decode(Form::label('images' ,__('general.images') ,['class'=>'form-label']))   !!}
        <div class="py-3 px-1 position-relative dropify_parent_holder">
            <a onclick="clone_dropify(this);" class="position-absolute dropify-add-clone-btn">
                <i class="bx bx-plus"></i>
            </a>
            <a onclick="remove_clone_dropify(this);" class="position-absolute dropify-remove-clone-btn">
                <i class="bx bx-trash"></i>
            </a>
            {!! Form::file('images[]',['class'=>'dropify', 'data-height' => '75', 'data-allowed-file-extensions' => 'jpg jpeg png bmp']) !!}
        </div>
    </div>
</div>
<div class="mb-3 row">
    <div class="col-md-12 mb-3">
        {!!  Html::decode(Form::label('event_social_media_url' ,__('general.event_social_media_url') ,['class'=>'form-label']))   !!}
        {!!  Form::text('event_social_media_url',null,['id'=>'event_social_media_url','class'=>'form-control']) !!}
    </div>
</div>
