<div class="col-12 mb-3  py-2">
    <div class="card">
        <div class="card-header">
            <h6 class="card-title mb-0">
                {{trans('general.any_approve_documents')}}
            </h6>
        </div>
        <div class="card-body">
            <table class="table table-bordered  table-sm">

                <thead>
                <tr>
                    <th class="fs-13">{{__('general.document_type')}}</th>
                    <th class="fs-13">{{__('general.document_description')}}</th>
                    <th class="fs-13">{{__('general.document_attachment')}}</th>
                    <th class="fs-13">{{__('general.action')}}</th>
                </tr>
                </thead>
                @if($model->documents AND count($model->documents)>0)
                    @foreach($model->documents as $document)
                        <tbody>
                        <tr>
                            <td>
                                {!!  Form::text('documents[document_type][]',$document['document_type'],['id'=>'documents[document_type][]','class'=>'form-control form-control-sm','autocomplete'=>'off']) !!}
                            </td>
                            <td>
                                {!!  Form::text('documents[document_description][]',$document['document_description'],['id'=>'documents[document_description][]','class'=>'form-control form-control-sm','autocomplete'=>'off']) !!}
                            </td>
                            <td>
                                {!! Form::file('documents[document_attachment][]',['id'=>'documents[document_attachment][]','class'=>'form-control form-control-sm']) !!}
                                <a href="{{ asset($document['filename']) }}"
                                   class="fs-13 text-info text-center view_image" download>{{ trans('general.view_file') }}</a>
                            </td>
                            <td style="width: 100px;vertical-align: middle;" class="text-center">
                                <a href="javascript:void(0);"
                                   onclick="clone_row(this);"
                                   class="btn btn-xs btn-info">
                                    <i class="bx bx-plus"></i>
                                </a>
                                <a href="javascript:void(0);" tabindex="18"
                                   onclick="remove_clone_row(this);"
                                   class="btn btn-xs btn-danger">
                                    <i class="bx bx-minus"></i>
                                </a>
                            </td>
                        </tr>
                        </tbody>
                    @endforeach
                @else
                    <tbody>
                    <tr>
                        <td>
                            {!!  Form::text('documents[document_type][]',null,['id'=>'documents[document_type][]','class'=>'form-control form-control-sm','autocomplete'=>'off']) !!}
                        </td>
                        <td>
                            {!!  Form::text('documents[document_description][]',null,['id'=>'documents[document_description][]','class'=>'form-control form-control-sm','autocomplete'=>'off']) !!}
                        </td>
                        <td>
                            {!! Form::file('documents[document_attachment][]',['id'=>'documents[document_attachment][]','class'=>'form-control form-control-sm']) !!}
                        </td>
                        <td style="width: 100px;vertical-align: middle;" class="text-center">
                            <a href="javascript:void(0);"
                               onclick="clone_row(this);"
                               class="btn btn-xs btn-info">
                                <i class="bx bx-plus"></i>
                            </a>
                            <a href="javascript:void(0);" tabindex="18"
                               onclick="remove_clone_row(this);"
                               class="btn btn-xs btn-danger">
                                <i class="bx bx-minus"></i>
                            </a>
                        </td>
                    </tr>
                    </tbody>
                @endif
            </table>
        </div>
    </div>
</div>
