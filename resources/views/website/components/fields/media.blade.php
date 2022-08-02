@if(isset($model) AND in_array($model->type,[\App\Enum\FreelancerTypeEnum::INDIVIDUAL,\App\Enum\AcceleratorTypeEnum::INDIVIDUAL]))
    <div class="row">
        <div class="col-lg-6 col-md-6 col-xl-6 col-xxl-6">
            <div class="card mb-0">
                <div class="card-header">
                    <h6 class="card-title mb-0">{{trans('general.id_card_front')}}</h6>
                </div>
                <div class="card-body py-3 px-1">
                    {!! Form::file('id_card_front',['class'=>'dropify', 'data-height' => '75', 'data-allowed-file-extensions' => 'jpg jpeg png bmp','data-default-file'=>count($model->front_id_card)?asset($model->front_id_card[0]->filename):'']) !!}
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-xl-6 col-xxl-6">
            <div class="card mb-0">
                <div class="card-header">
                    <h6 class="card-title mb-0">{{trans('general.id_card_back')}}</h6>
                </div>
                <div class="card-body py-3 px-1">
                    {!! Form::file('id_card_back',['class'=>'dropify', 'data-height' => '75', 'data-allowed-file-extensions' => 'jpg jpeg png bmp','data-default-file'=>count($model->back_id_card)?asset($model->back_id_card[0]->filename):'']) !!}
                </div>
            </div>
        </div>
    </div>
@else
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-6 col-xl-6 col-xxl-6">
            <div class="card mb-0">
                <div class="card-header">
                    <h6 class="card-title mb-0">{{trans('general.logo')}}</h6>
                </div>
                <div class="card-body py-3 px-1">
                    {!! Form::file('logo',['class'=>'dropify', 'data-height' => '75', 'data-allowed-file-extensions' => 'jpg jpeg png bmp','data-default-file'=>count($model->logo)?asset($model->logo[0]->filename):'']) !!}
                </div>
            </div>
        </div>
    </div>
@endif
<div class="row">
    <div class="col-lg-6 col-md-6 col-xl-6 col-xxl-6">
        <div class="card mb-0">
            <div class="card-header">
                <h6 class="card-title mb-0">{{trans('general.documents')}}</h6>
            </div>
            @if(count($model->documents)>0)
                @foreach($model->documents as $document)
                    <div class="card-body py-3 px-1 position-relative dropify_parent_holder">
                        <a onclick="clone_dropify(this);" class="position-absolute dropify-add-clone-btn">
                            <i class="bx bx-plus"></i>
                        </a>
                        <a onclick="remove_clone_dropify(this);" class="position-absolute dropify-remove-clone-btn">
                            <i class="bx bx-trash"></i>
                        </a>
                        {!! Form::file('documents[]',['class'=>'dropify', 'data-height' => '75', 'data-allowed-file-extensions' => 'jpg jpeg png bmp','data-default-file'=>asset($document->filename)]) !!}
                    </div>
                @endforeach
            @else
                <div class="card-body py-3 px-1 position-relative dropify_parent_holder">
                    <a onclick="clone_dropify(this);" class="position-absolute dropify-add-clone-btn">
                        <i class="bx bx-plus"></i>
                    </a>
                    <a onclick="remove_clone_dropify(this);" class="position-absolute dropify-remove-clone-btn">
                        <i class="bx bx-trash"></i>
                    </a>
                    {!! Form::file('documents[]',['class'=>'dropify', 'data-height' => '75', 'data-allowed-file-extensions' => 'jpg jpeg png bmp']) !!}
                </div>
            @endif
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-xl-6 col-xxl-6">
        <div class="card mb-0">
            <div class="card-header">
                <h6 class="card-title mb-0">{{trans('general.certificates')}}</h6>
            </div>
            @if(count($model->certificates)>0)
                @foreach($model->certificates as $certificate)
                    <div class="card-body py-3 px-1  position-relative dropify_parent_holder">
                        <a onclick="clone_dropify(this);" class="position-absolute dropify-add-clone-btn">
                            <i class="bx bx-plus"></i>
                        </a>
                        <a onclick="remove_clone_dropify(this);" class="position-absolute dropify-remove-clone-btn">
                            <i class="bx bx-trash"></i>
                        </a>
                        {!! Form::file('certificates[]',['class'=>'dropify', 'data-height' => '75', 'data-allowed-file-extensions' => 'jpg jpeg png bmp','data-default-file'=>asset($certificate->filename)]) !!}
                    </div>
                @endforeach
            @else
                <div class="card-body py-3 px-1  position-relative dropify_parent_holder">
                    <a onclick="clone_dropify(this);" class="position-absolute dropify-add-clone-btn">
                        <i class="bx bx-plus"></i>
                    </a>
                    <a onclick="remove_clone_dropify(this);" class="position-absolute dropify-remove-clone-btn">
                        <i class="bx bx-trash"></i>
                    </a>
                    {!! Form::file('certificates[]',['class'=>'dropify', 'data-height' => '75', 'data-allowed-file-extensions' => 'jpg jpeg png bmp']) !!}
                </div>
            @endif
        </div>
    </div>
</div>
