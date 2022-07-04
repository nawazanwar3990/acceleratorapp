<div class="">
    <h4 class="card-title text-purple">{{ __('general.attachments') }}</h4>
    <hr>
    <div class="row">
        <div class="col-md-6">
            <h5 class="card-title">{{ __('general.documents') }}</h5>
            <small class="text-primary">Allowed Formats: PDF, DOC, DOCX</small></br>
            <div class="row">
                <div class="col-sm-10">
                    {!! Form::file('documents[]',['class'=>'form-control dropify', 'data-height' => '75', 'data-allowed-file-extensions' => 'doc docx pdf']) !!}
                </div>
                <div class="col-sm-2">
                    <button type="button" class="btn btn-primary" onclick="addDocumentField();"><i
                            class="bx  bx-plus-circle"></i></button>
                </div>
            </div>

            <div id="documents" class="pt-3">
            </div>
        </div>
        <div class="col-md-6">
            <h5 class="card-title">{{ __('general.images') }}</h5>
            <small class="text-primary">Allowed Formats: JPG, JPEG, PNG, BMP</small>
            <div class="row">
                <div class="col-sm-10">
                    {!! Form::file('images[]',['class'=>'form-control dropify', 'data-height' => '75', 'data-allowed-file-extensions' => 'jpg jpeg png bmp']) !!}
                </div>
                <div class="col-sm-2">
                    <button type="button" class="btn btn-primary" onclick="addImageField();"><i class="bx  bx-plus-circle"></i>
                    </button>
                </div>
            </div>
            <div id="images" class="pt-3">
            </div>
        </div>
    </div>
</div>

