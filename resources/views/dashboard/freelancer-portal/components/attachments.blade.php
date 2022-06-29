<div class="row">
    <div class="col-md-6">
        {!!  Html::decode(Form::label('profile_img' ,__('general.profile_img'),['class'=>'col-form-label']))   !!}
        {!!  Form::file('profile_img',['id'=>'profile_img','class'=>'form-control dropify','data-allowed-file-extensions'=>'png jpg']) !!}
    </div>
    <div class="col-md-6">
        {!!  Html::decode(Form::label('attachments' ,__('general.attachments'),['class'=>'col-form-label']))   !!}
        {!!  Form::file('attachments',['id'=>'attachments','class'=>'form-control dropify','data-allowed-file-extensions'=>'pdf txt doc docx']) !!}
    </div>
</div>
