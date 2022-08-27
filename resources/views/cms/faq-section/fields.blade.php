<div class="row">
    <div class="mb-3 col-4">
        {!!  Html::decode(Form::label('topic_id' ,__('general.topic_id'),['class'=>'col-form-label']))   !!}
        {!! Form::select('topic_id',\App\Services\CMS\FaqTopicService::pluckFaqTopics(),null, ['class' => 'form-control', 'autofocus', 'id' => 'topic_id','placeholder'=>'Select Faq Topic' ]) !!}
    </div>
    <div class="mb-3 col-4">
        {!!  Html::decode(Form::label('question' ,__('general.question'),['class'=>'col-form-label']))   !!}
        {!! Form::text('question', old('question'), ['class' => 'form-control', 'autofocus', 'id' => 'question' ]) !!}
        @error('question')
        <small class="form-control-feedback text-danger"> {{ $message }} </small>
        @enderror
    </div>
</div>
<div class="row">
    <div class="mb-3 col-4">
        {!!  Html::decode(Form::label('answer' ,__('general.answer'),['class'=>'col-form-label']))   !!}
        {!! Form::text('answer', old('order'), ['class' => 'form-control', 'autofocus', 'id' => 'answer' ]) !!}
    </div>
    <div class="mb-3 col-4">
        {!!  Html::decode(Form::label('order' ,__('general.order'),['class'=>'col-form-label']))   !!}
        {!! Form::number('order', old('order'), ['class' => 'form-control', 'autofocus', 'id' => 'order' ]) !!}
    </div>
    <div class="mb-3 col-12">
        {!! Form::checkbox('active',($for=='edit')?$model->active:0,null,['class'=>'custom_checkbox']); !!}
        {!!  Html::decode(Form::label('active' ,__('general.active')))   !!}
    </div>
</div>
