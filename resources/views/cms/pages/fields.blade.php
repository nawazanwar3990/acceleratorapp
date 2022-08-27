<div class="row">
    <div class="mb-3 col-6">
        {!!  Html::decode(Form::label('menu_id' ,__('general.menu_id'),['class'=>'col-form-label']))   !!}
        {!! Form::select('menu_id',\App\Services\CMS\MenuService::pluckMenus(),null, ['class' => 'form-control', 'autofocus', 'id' => 'menu_id','placeholder'=>'Select Menu' ]) !!}
    </div>
    <div class="mb-3 col-6">
        {!!  Html::decode(Form::label('page_title' ,__('general.page_title'),['class'=>'col-form-label']))   !!}
        {!! Form::text('page_title', old('name'), ['class' => 'form-control', 'autofocus', 'id' => 'page_title' ]) !!}
        @error('page_title')
        <small class="form-control-feedback text-danger"> {{ $message }} </small>
        @enderror
    </div>
    <div class="mb-3 col-6">
        {!!  Html::decode(Form::label('page_description' ,__('general.page_description'),['class'=>'col-form-label']))   !!}
        {!! Form::textarea('page_description', old('page_description'), ['class' => 'form-control', 'autofocus', 'id' => 'page_description' ]) !!}
    </div>
    <div class="mb-3 col-6">
        {!!  Html::decode(Form::label('page_keyword' ,__('general.page_keyword'),['class'=>'col-form-label']))   !!}
        {!! Form::textarea('page_keyword', old('page_keyword'), ['class' => 'form-control', 'autofocus', 'id' => 'page_keyword' ]) !!}
    </div>
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
