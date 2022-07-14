<div class="card">
    <div class="card-header">
        <h6 class="card-title mb-0">{{trans('general.media')}}</h6>
    </div>
    <div class="card-body">
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
</div>

