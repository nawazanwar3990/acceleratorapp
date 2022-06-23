<div class="accordion-item">
    <h2 class="accordion-header" id="media_heading">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#media"
                aria-expanded="false" aria-controls="collapseOne">
            {{ __('general.media') }}
        </button>
    </h2>

    <div id="media" class="accordion-collapse collapse bg-white" aria-labelledby="media_heading"
         data-bs-parent="#accordionExample">
        <div class="accordion-body">
            <div class="fields">

                <div class="row mb-3">

                    <div class="col-md-12">
                        <h5 class="card-title">{{ __('general.documents') }}</h5>
                        <small class="text-primary">Allowed Formats: PDF, DOC, DOCX</small></br>
                        <div class="row">
                            <div class="col-sm-10">
                                {!! Form::file('documents[]',['class'=>'form-control dropify', 'data-height' => '75', 'data-allowed-file-extensions' => 'doc docx pdf']) !!}
                            </div>
                            <div class="col-sm-2">
                                <button type="button" class="btn btn-primary" onclick="addDocumentField();"><i class="fas fa-plus"></i></button>
                            </div>
                        </div>

                        <div id="documents" class="pt-3">
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

</div>
