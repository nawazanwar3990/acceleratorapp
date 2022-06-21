{{--<div class="accordion-item">--}}
{{--    <h2 class="accordion-header" id="media_heading">--}}
{{--        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#media"--}}
{{--                aria-expanded="false" aria-controls="collapseOne">--}}
{{--            {{ __('general.media') }}--}}
{{--        </button>--}}
{{--    </h2>--}}

{{--    <div id="media" class="accordion-collapse collapse bg-white" aria-labelledby="media_heading"--}}
{{--         data-bs-parent="#accordionExample">--}}
{{--        <div class="accordion-body">--}}
<h4 class="card-title text-purple">{{ __('general.media') }}</h4>
<hr>
<div class="fields">

    <div class="row mb-3">
        <p class="text-info">{!! __('general.allowed_image_and_doc') !!}</p>
        <div class="col-md-3">
            {!!  Html::decode(Form::label('first_image' ,__('general.first_image') ,['class'=>'form-label']))   !!}
            {!! Form::file('first_image',['class'=>'form-control dropify', 'data-height' => '75', 'data-allowed-file-extensions' => 'jpg jpeg png bmp', 'data-default-file' => isset($for) ? url($firstImage) : '']) !!}
        </div>
        <div class="col-md-3">
            {!!  Html::decode(Form::label('second_image' ,__('general.second_image') ,['class'=>'form-label']))   !!}
            {!! Form::file('second_image',['class'=>'form-control dropify', 'data-height' => '75', 'data-allowed-file-extensions' => 'jpg jpeg png bmp', 'data-default-file' => isset($for) ? url($secondImage) : '']) !!}
        </div>
        <div class="col-md-3">
            {!!  Html::decode(Form::label('third_image' ,__('general.third_image') ,['class'=>'form-label']))   !!}
            {!! Form::file('third_image',['class'=>'form-control dropify', 'data-height' => '75', 'data-allowed-file-extensions' => 'jpg jpeg png bmp', 'data-default-file' => isset($for) ? url($thirdImage) : '']) !!}
        </div>
        <div class="col-md-3">
            {!!  Html::decode(Form::label('fourth_image' ,__('general.fourth_image') ,['class'=>'form-label']))   !!}
            {!! Form::file('fourth_image',['class'=>'form-control dropify', 'data-height' => '75', 'data-allowed-file-extensions' => 'jpg jpeg png bmp', 'data-default-file' => isset($for) ? url($fourthImage) : '']) !!}
        </div>
    </div>

    <div class="row mb-3">

        <div class="col-md-6">
            {!!  Html::decode(Form::label('scanned_document' ,__('general.scanned_document') ,['class'=>'form-label']))   !!}
            {!! Form::file('scanned_document',['class'=>'form-control dropify', 'data-height' => '75', 'data-allowed-file-extensions' => 'doc docx pdf', 'data-default-file' => isset($for) ? url($document) : '']) !!}
        </div>

        <div class="col-md-6">
            {!!  Html::decode(Form::label('scanned_signature' ,__('general.scanned_signature') ,['class'=>'form-label']))   !!}
            {!! Form::file('scanned_signature',['class'=>'form-control dropify', 'data-height' => '75', 'data-allowed-file-extensions' => 'jpg jpeg png bmp', 'data-default-file' => isset($for) ? url($signature) : '']) !!}
        </div>
    </div>

</div>
{{--        </div>--}}
{{--    </div>--}}

{{--</div>--}}





