<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h6 class="card-title mb-0">{{trans('general.sp_logo')}}</h6>
            </div>
            <div class="card-body">
                {!! Form::file('documents[]',['class'=>'form-control dropify', 'data-height' => '75', 'data-allowed-file-extensions' => 'doc docx pdf']) !!}
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h6 class="card-title mb-0">{{trans('general.sp_registered-certificate')}}</h6>
            </div>
            <div class="card-body">
                {!! Form::file('documents[]',['class'=>'form-control dropify', 'data-height' => '75', 'data-allowed-file-extensions' => 'doc docx pdf']) !!}
            </div>
        </div>
    </div>

</div>

<div class="card">
    <div class="card-header">
        <h6 class="card-title mb-0">{{trans('general.sp_approved_document')}}</h6>
    </div>
    <div class="card-body">
        <div class="row justify-content-center">
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
</div>

