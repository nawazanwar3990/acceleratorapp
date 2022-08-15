<div class="mb-3 row">
    <div class="col-md-8">
        <div class="row">
            <div class="col-md-4 mb-3 meeting_type_holder">
                {!!  Html::decode(Form::label('meeting_parent_type' ,__('general.meeting_type') ,['class'=>'form-label']))   !!}
                <select name="meeting_parent_type" class="form-control" onchange="applyMeetingType(this);">
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
                {!!  Html::decode(Form::label('meeting_parent_sub_type' ,__('general.meeting_sub_type') ,['class'=>'form-label']))   !!}
                {!!  Form::select('meeting_parent_sub_type',array(),null,['id'=>'meeting_parent_sub_type','class'=>'form-control ','required','placeholder'=>trans('general.select'),'onchange'=>'changeMeetingSubType(this);']) !!}
            </div>
            <div class="col-md-4 mb-3">
                {!!  Html::decode(Form::label('meeting_name' ,__('general.title') ,['class'=>'form-label']))   !!}
                {!!  Form::text('meeting_name',null,['id'=>'meeting_name','class'=>'form-control']) !!}
            </div>
            <div class="col-md-4 mb-3">
                {!!  Html::decode(Form::label('meeting_type' ,__('general.mode') ,['class'=>'form-label']))   !!}
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
