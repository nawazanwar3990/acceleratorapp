<h4 class="card-title text-purple mt-4">{{ __('general.media') }}</h4>
<hr>
<div class="row">
    <div class="col-md-6">
        <h6 class="card-title text-purple">{{ __('general.documents') }}</h6>
        <div class="row mb-2">
            <div class="col">
                {!! Html::decode(Form::label('document_1' ,__('general.first_document') ,['class'=>'form-label']))   !!}
                {!! Form::file('document[]',['class'=>'form-control dropify', 'data-height' => '75', 'data-allowed-file-extensions' => 'doc docx pdf','multiple','data-default-file' => isset($for) ? url($model->document_1) : '']) !!}
            </div>
        </div>
        {{-- <div class="row">
            <div class="col">
                {!! Html::decode(Form::label('document_2' ,__('general.second_document') ,['class'=>'form-label']))   !!}
                {!! Form::file('document_2',['class'=>'form-control dropify', 'data-height' => '75', 'data-allowed-file-extensions' => 'doc docx pdf', 'data-default-file' => isset($for) ? url($model->document_1) : '']) !!}
            </div>
        </div> --}}
    </div>
    <div class="col-md-6">
        <h6 class="card-title text-purple">{{ __('general.images') }}</h6>
        <div class="row mb-2">
            <div class="col">
                {!! Html::decode(Form::label('image_1' ,__('general.first_image') ,['class'=>'form-label']))   !!}
                {!! Form::file('image_1',['class'=>'form-control dropify', 'data-height' => '75', 'data-allowed-file-extensions' => 'jpg jpeg png bmp', 'data-default-file' => isset($for) ? url($model->image_1) : '']) !!}
            </div>
        </div>
        <div class="row">
            <div class="col">
                {!! Html::decode(Form::label('image_2' ,__('general.second_image') ,['class'=>'form-label']))   !!}
                {!! Form::file('image_2',['class'=>'form-control dropify', 'data-height' => '75', 'data-allowed-file-extensions' => 'jpg jpeg png bmp', 'data-default-file' => isset($for) ? url($model->image_2) : '']) !!}
            </div>
        </div>
    </div>
</div>
