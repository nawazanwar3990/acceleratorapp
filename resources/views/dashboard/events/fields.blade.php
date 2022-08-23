<div class="mb-3 row">
    <div class="col-md-8">
        <div class="row">
            <div class="col-md-4 mb-3 event_type_holder">
                {!!  Html::decode(Form::label('event_type' ,__('general.event_type') ,['class'=>'form-label']))   !!}
                <select name="event_type" class="form-control" onchange="applyEventType(this);">
                    <option value="" selected>{{ trans('general.select') }}</option>
                    @foreach (\App\Services\EventService::getEventTypes() as $eventType)
                        <option value="{{ $eventType->slug }}"
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
                {!!  Form::text('no_of_days',null,['id'=>'no_of_days','class'=>'form-control','onkeyup'=>'calculate_event_end_date(this);']) !!}
            </div>
            <div class="col-md-4 mb-3">
                {!!  Html::decode(Form::label('event_end_date' ,__('general.event_end_date') ,['class'=>'form-label']))   !!}
                {!!  Form::text('event_end_date',null,['id'=>'event_end_date','class'=>'form-control','readonly']) !!}
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
                {!!  Form::select('event_organized_for',\App\Enum\EventOrganizeForEnum::getTranslationKeys(),null,['id'=>'event_organized_for','class'=>'form-control ','required','onchange'=>'changeEventOrganizedFor(this);','placeholder'=>trans('general.select')]) !!}
            </div>
            <div class="col-md-4 mb-3 d-none" id="event_user_type_holder">
                {!!  Html::decode(Form::label('event_user_type' ,__('general.event_user_type') ,['class'=>'form-label']))   !!}
                {!!  Form::select('event_user_type',\App\Enum\AccessTypeEnum::getTranslationKeys(),null,['id'=>'event_user_type','class'=>'form-control ','required','onchange'=>'changeEventUserType(this);','placeholder'=>trans('general.select')]) !!}
            </div>
            <div class="col-md-4 mb-3 d-none" id="event_user_id_holder">
                {!!  Html::decode(Form::label('event_user_id' ,__('general.event_user_id') ,['class'=>'form-label']))   !!}
                <div class="input-group">
                    {!!  Form::text('event_user_id',null,['id'=>'event_user_id','class'=>'form-control']) !!}
                    <button type="button" class="btn btn-primary" onclick="getUserByType(this);">
                        <i class="bx bx-search"></i>
                    </button>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                {!!  Html::decode(Form::label('is_applied_ticker' ,__('general.is_applied_ticker') ,['class'=>'form-label']))   !!}
                {!!  Form::select('is_applied_ticker',['no'=>'No','yes'=>'Yes'],null,['id'=>'is_applied_ticker','class'=>'form-control ','required','onChange'=>'isAppliedTicket(this);']) !!}
            </div>

            <div class="col-md-4 mb-3 text-center pt-4 mt-2 d-none" id="is_applied_holder">
                @foreach(\App\Enum\TicketTypeEnum::getTranslationKeys() as $ticket_key=>$ticket_value)
                    <div class="form-check form-switch form-check-inline">
                        {!! Form::radio('ticket_type',$ticket_key,false,['id'=>$ticket_key,'class'=>'form-check-input','onchange'=>'changeTicketType(this)']) !!}
                        {!! Form::label($ticket_key,$ticket_value,['class'=>'form-check-label']) !!}
                    </div>
                @endforeach
            </div>
            <div class="col-md-4 mb-3 d-none" id="per_person_cost_holder">
                {!!  Html::decode(Form::label('per_person_cost' ,__('general.per_person_cost') ,['class'=>'form-label']))   !!}
                {!!  Form::number('per_person_cost',null,['id'=>'per_person_cost','class'=>'form-control']) !!}
            </div>
            <div class="col-md-4  mb-3">
                {!!  Html::decode(Form::label('event_social_media_url' ,__('general.event_social_media_url') ,['class'=>'form-label']))   !!}
                {!!  Form::text('event_social_media_url',null,['id'=>'event_social_media_url','class'=>'form-control']) !!}
            </div>
        </div>
    </div>
    <div class="col-md-4">
        {!!  Html::decode(Form::label('images' ,__('general.images') ,['class'=>'form-label']))   !!}
        @include('components.images-field',['images'=>$for=='edit'?$model->images:[]])
    </div>
</div>
