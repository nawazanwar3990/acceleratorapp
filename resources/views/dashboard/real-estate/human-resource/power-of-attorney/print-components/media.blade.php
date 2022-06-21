<div class="card  shadow-none mb-0 border-bottom-0">
    <div class="card-header">
        <h5>Documents</h5>
    </div>
    <div class="card-body py-2">
        <div class="row mt-2">
            <div class="col-12 form-group">
                {!! Form::file('docs[]',['class'=>'mdropify','id'=>'docs','multiple',"accept"=>".pdf"]) !!}
                <div class="document_holder text-center my-3 row justify-content-center">
                    @if(isset($for))
                        @if($documents)
                            <div class="row" style="margin: 0 auto;">
                                @foreach($documents as $document)
                                    <div class="col-md-4 text-center">
                                        <embed src="{{ asset($document->src) }}"
                                               frameborder="0" allowfullscreen>
                                        <a class="btn btn-info btn-xs my-1"
                                           href="{{ asset($document->src) }}"
                                           download>Download <i class="fa fa-download"></i></a>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
