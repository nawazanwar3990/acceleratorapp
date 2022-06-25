<div class="row mb-2">
    <div class="col-md-4">
        {!!  Html::decode(Form::label('name' ,__('general.name') ,['class'=>'form-label']))   !!}
        {!!  Form::text('name',null,['id'=>'name','class'=>'form-control ','placeholder'=>__('general.name')]) !!}
    </div>
    <div class="col-md-4">
        {!!  Html::decode(Form::label('cell' ,__('general.cell') ,['class'=>'form-label']))   !!}
        {!!  Form::text('cell',null,['id'=>'cell','class'=>'form-control ','placeholder'=>__('general.cell')]) !!}
    </div>
    <div class="col-md-4">
        {!!  Html::decode(Form::label('landline' ,__('general.landline') ,['class'=>'form-label']))   !!}
        {!!  Form::text('landline',null,['id'=>'landline','class'=>'form-control ','placeholder'=>__('general.landline')]) !!}
    </div>
</div>
<div class="row mb-2">
    <div class="col-md-4">
        {!!  Html::decode(Form::label('email' ,__('general.email') ,['class'=>'form-label']))   !!}
        {!!  Form::text('email',null,['id'=>'email','class'=>'form-control ','placeholder'=>__('general.email')]) !!}
    </div>
    <div class="col-md-4">
        {!!  Html::decode(Form::label('facebook' ,__('general.facebook') ,['class'=>'form-label']))   !!}
        {!!  Form::text('facebook',null,['id'=>'facebook','class'=>'form-control ','placeholder'=>__('general.facebook')]) !!}
    </div>
    <div class="col-md-4">
        {!!  Html::decode(Form::label('instagram' ,__('general.instagram') ,['class'=>'form-label']))   !!}
        {!!  Form::text('instagram',null,['id'=>'instagram','class'=>'form-control ','placeholder'=>__('general.instagram')]) !!}
    </div>
</div>
<div class="row mb-2">
    <div class="col-md-4">
        {!!  Html::decode(Form::label('website' ,__('general.website') ,['class'=>'form-label']))   !!}
        {!!  Form::text('website',null,['id'=>'website','class'=>'form-control ','placeholder'=>__('general.website')]) !!}
    </div>
    <div class="col-md-4">
        {!!  Html::decode(Form::label('logo' ,__('general.logo') ,['class'=>'form-label']))   !!}
        {!! Form::file('logo',['class'=>'form-control dropify', 'data-height' => '65', 'data-allowed-file-extensions' => 'jpg jpeg bmp png', 'data-default-file' => url($model->logo)]) !!}
    </div>
</div>
