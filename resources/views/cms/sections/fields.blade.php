<div class="row">
    <div class="mb-3 col-4">
        {!!  Html::decode(Form::label('page_id' ,__('general.page_id'),['class'=>'col-form-label']))   !!}
        {!! Form::select('page_id',\App\Services\CMS\PageService::pluckPages(),null, ['class' => 'form-control', 'autofocus', 'id' => 'page_id','placeholder'=>'Select Page' ]) !!}
    </div>
    <div class="mb-3 col-4">
        {!!  Html::decode(Form::label('order' ,__('general.order'),['class'=>'col-form-label']))   !!}
        {!! Form::number('order', old('order'), ['class' => 'form-control', 'autofocus', 'id' => 'order' ]) !!}
        @error('order')
        <small class="form-control-feedback text-danger"> {{ $message }} </small>
        @enderror
    </div>
    <div class="mb-3 col-4">
        {!!  Html::decode(Form::label('html' ,__('general.html'),['class'=>'col-form-label']))   !!}
        {!! Form::text('html', old('html'), ['class' => 'form-control', 'autofocus', 'id' => 'html' ]) !!}
    </div>
</div>
<div class="row">
    <div class="mb-3 col-6">
        {!!  Html::decode(Form::label('extra_css' ,__('general.extra_css'),['class'=>'col-form-label']))   !!}
        {!! Form::textarea('extra_css', old('extra_css'), ['class' => 'form-control', 'autofocus', 'id' => 'extra_css' ]) !!}
    </div>
    <div class="mb-3 col-6">
        {!!  Html::decode(Form::label('extra_js' ,__('general.extra_js'),['class'=>'col-form-label']))   !!}
        {!! Form::textarea('extra_js', old('extra_js'), ['class' => 'form-control', 'autofocus', 'id' => 'extra_js' ]) !!}
    </div>
    <div class="mb-3 col-12">
        {!! Form::checkbox('active',($for=='edit')?$model->active:0,null,['class'=>'custom_checkbox']); !!}
        {!!  Html::decode(Form::label('active' ,__('general.active')))   !!}
    </div>
</div>
