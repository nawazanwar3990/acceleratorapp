<div class="row">
    <div class="mb-3 col-4">
        {!!  Html::decode(Form::label('name' ,__('general.name'),['class'=>'col-form-label']))   !!}
        {!! Form::text('name', old('name'), ['class' => 'form-control', 'autofocus', 'id' => 'name' ]) !!}
        @error('name')
        <small class="form-control-feedback text-danger"> {{ $message }} </small>
        @enderror
    </div>
    <div class="mb-3 col-4">
        {!!  Html::decode(Form::label('menu_type' ,__('general.menu_type'),['class'=>'col-form-label']))   !!}
        {!! Form::select('menu_type',\App\Services\CMS\MenuService::getTypes(),null, ['class' => 'form-control', 'autofocus', 'id' => 'menu_type','placeholder'=>'Select Menu Type' ]) !!}
    </div>
    <div class="mb-3 col-4">
        {!!  Html::decode(Form::label('page_title' ,__('general.page_title'),['class'=>'col-form-label']))   !!}
        {!! Form::text('page_title', old('page_title'), ['class' => 'form-control', 'autofocus', 'id' => 'page_title' ]) !!}
    </div>

</div>
<div class="row">
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
    <div class="mb-3 col-6">
        {!!  Html::decode(Form::label('header_logo' ,__('general.header_logo'),['class'=>'col-form-label']))   !!}
        {!! Form::text('header_logo', old('header_logo'), ['class' => 'form-control', 'autofocus', 'id' => 'header_logo' ]) !!}
    </div>
    <div class="mb-3 col-6">
        {!!  Html::decode(Form::label('footer_logo' ,__('general.footer_logo'),['class'=>'col-form-label']))   !!}
        {!! Form::text('footer_logo', old('footer_logo'), ['class' => 'form-control', 'autofocus', 'id' => 'footer_logo' ]) !!}
    </div>
    <div class="mb-3 col-12">
        {!! Form::checkbox('active',($for=='edit')?$model->active:0,null,['class'=>'custom_checkbox']); !!}
        {!!  Html::decode(Form::label('active' ,__('general.active')))   !!}
    </div>
</div>
