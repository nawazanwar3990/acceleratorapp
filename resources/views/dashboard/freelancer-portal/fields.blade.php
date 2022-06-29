<div class="mb-3 row">
    <div class="col-md-3">
        {!!  Html::decode(Form::label('type' ,__('general.type').'<i class="text-danger">*</i>' ,['class'=>'col-form-label']))   !!}
        {!!  Form::select('type', \App\Services\ServiceData::getFreelanceServiceForDropdown(),null,['id'=>'type',
            'class'=>'select2 form-control',
            'placeholder'=>__('general.type'),'style'=>'width:100%;'])
        !!}
    </div>
    <div class="col-md-3">
        {!!  Html::decode(Form::label('experience' ,__('general.experience').'<i class="text-danger">*</i>' ,['class'=>'col-form-label']))   !!}
        {!!  Form::text('experience',null,['id'=>'experience','class'=>'form-control ','placeholder'=>__('general.in_years'), 'required']) !!}
    </div>
</div>
<div class="row">
    <h3 class="border-bottom pt-4 pb-2 font-weight-bold">Personal Info</h3>
    @include('dashboard.freelancer-portal.components.personal_info')
</div>
<div class="row">
    <h3 class="border-bottom pt-4 pb-2 font-weight-bold">Job Description</h3>
    @include('dashboard.freelancer-portal.components.job_places')
</div>
<div class="row">
    <h3 class="border-bottom pt-4 pb-2 font-weight-bold">Educational Detail</h3>
    @include('dashboard.freelancer-portal.components.educational_detail')
</div>
<div class="row">
    <h3 class="border-bottom pt-4 pb-2 font-weight-bold">Attachments</h3>
    @include('dashboard.freelancer-portal.components.attachments')
</div>
