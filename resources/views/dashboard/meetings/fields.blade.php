<div class="mb-3 row">
    <div class="col-md-8">
        <div class="row">
            <div class="col-md-4 mb-3 meeting_type_holder">
                {!!  Html::decode(Form::label('meeting_type' ,__('general.meeting_type') ,['class'=>'form-label']))   !!}
                <select name="meeting_type" id="meeting_parent_type" class="form-control"
                        onchange="applyMeetingType(this);">
                    <option value="" selected>{{ trans('general.select') }}</option>
                    @foreach (\App\Services\MeetingService::getMeetingTypes() as $meetingType)
                        <option value="{{ $meetingType->slug }}"
                                data-sub-types="{{ json_encode($meetingType->children) }}">
                            {{ $meetingType->name }}
                        </option>
                    @endforeach
                    <option value="other">{{ trans('general.other') }}</option>
                </select>
            </div>
            <div class="col-md-4 mb-3 meeting_child_type_holder">
                {!!  Html::decode(Form::label('meeting_sub_type' ,__('general.meeting_sub_type') ,['class'=>'form-label']))   !!}
                {!!  Form::select('meeting_sub_type',array(),null,['id'=>'meeting_parent_sub_type','class'=>'form-control ','required','placeholder'=>trans('general.select'),'onchange'=>'changeMeetingSubType(this);']) !!}
            </div>
            <div class="col-md-4 mb-3">
                {!!  Html::decode(Form::label('meeting_name' ,__('general.title') ,['class'=>'form-label']))   !!}
                {!!  Form::text('meeting_name',null,['id'=>'meeting_name','class'=>'form-control']) !!}
            </div>
            <div class="col-md-4 mb-3">
                {!!  Html::decode(Form::label('meeting_mode' ,__('general.mode') ,['class'=>'form-label']))   !!}
                {!!  Form::select('meeting_mode',\App\Enum\MeetingTypeEnum::getTranslationKeys(),null,['id'=>'meeting_type','class'=>'form-control ','required','placeholder'=>trans('general.select'),'onchange'=>'manage_meeting_type(this);']) !!}
            </div>
            <div class="col-md-4 mb-3 d-none" id="meeting_type_description_holder">
                {!!  Html::decode(Form::label('meeting_description' ,__('general.description') ,['class'=>'form-label']))   !!}
                {!!  Form::text('meeting_description',null,['id'=>'description','class'=>'form-control']) !!}
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
<div class="row">
    <div class="col-12">
        <div class="card" style="border: none !important;">
            <div class="card-header">
                <h6 class="mb-0">{{ trans('general.meeting_arranger_for') }}</h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3 col-lg-3 col-xl-3">
                        {!!  Html::decode(Form::label('meeting_organized_for' ,__('general.client_id') ,['class'=>'form-label']))   !!}
                        {!!  Form::number('meeting_organized_for',null,['id'=>'meeting_organized_for','class'=>'form-control']) !!}
                    </div>
                    <div class="col-md-3 col-lg-3 col-xl-3">
                        {!!  Html::decode(Form::label('client_name' ,__('general.name') ,['class'=>'form-label']))   !!}
                        {!!  Form::text('client_name',null,['id'=>'client_name','class'=>'form-control']) !!}
                    </div>
                    <div class="col-md-3 col-lg-3 col-xl-3">
                        {!!  Html::decode(Form::label('client_contact' ,__('general.contact') ,['class'=>'form-label']))   !!}
                        {!!  Form::text('client_contact',null,['id'=>'client_contact','class'=>'form-control']) !!}
                    </div>
                    <div class="col-md-3 col-lg-3 col-xl-3">
                        {!!  Html::decode(Form::label('client_email' ,__('general.email') ,['class'=>'form-label']))   !!}
                        {!!  Form::email('client_email',null,['id'=>'client_email','class'=>'form-control']) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card" style="border: none !important;">
            <div class="card-header">
                <h6 class="mb-0">{{ trans('general.meeting_location') }}</h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 col-lg-4 col-xl-4">
                        {!!  Html::decode(Form::label('meeting_organized_location' ,__('general.room_number') ,['class'=>'form-label']))   !!}
                        {!!  Form::number('meeting_organized_location',null,['id'=>'meeting_organized_location','class'=>'form-control']) !!}
                    </div>
                    <div class="col-md-4 col-lg-4 col-xl-4">
                        {!!  Html::decode(Form::label('room_type' ,__('general.room_type') ,['class'=>'form-label']))   !!}
                        {!!  Form::select('room_type',\App\Services\OfficeService::office_types_dropdown(),2,['id'=>'room_type','class'=>'form-control']) !!}
                    </div>
                    <div class="col-md-4 col-lg-4 col-xl-4">
                        {!!  Html::decode(Form::label('room_sitting_capacity' ,__('general.sitting_capacity') ,['class'=>'form-label']))   !!}
                        {!!  Form::text('room_sitting_capacity',null,['id'=>'room_sitting_capacity','class'=>'form-control']) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
