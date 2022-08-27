<div class="row">
    <div class="mb-3 col-12">
        {!!  Html::decode(Form::label('menu_type' ,__('general.menu_type'),['class'=>'col-form-label']))   !!}
        {!! Form::select('menu_type',\App\Services\CMS\MenuService::getTypes(),null,['class' => 'form-control']) !!}
    </div>
    <div class="mb-3 col-6">
        {!!  Html::decode(Form::label('header_logo' ,__('general.header_logo'),['class'=>'col-form-label']))   !!}
        {!! Form::file('header_logo', ['class' => 'form-control dropify','id' => 'header_logo','data-default-file'=>asset($model->header_logo)]) !!}
    </div>
    <div class="mb-3 col-6">
        {!!  Html::decode(Form::label('footer_logo' ,__('general.footer_logo'),['class'=>'col-form-label']))   !!}
        {!! Form::file('footer_logo', ['class' => 'form-control dropify','id' => 'footer_logo','data-default-file'=>asset($model->footer_logo)]) !!}
    </div>
</div>
