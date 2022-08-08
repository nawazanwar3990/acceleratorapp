<table class="table table-bordered table-sm">
        <tbody>
        <tr>
            <td>
                {!! Form::label('documents[document_type][]',__('general.document_type'),['class'=>'form-label fs-13']) !!}
                {!!  Form::text('documents[document_type][]',null,['id'=>'documents[document_type][]','class'=>'form-control','autocomplete'=>'off']) !!}
            </td>
            <td>
                {!! Form::label('documents[document_attachment][]',__('general.document_attachment'),['class'=>'form-label fs-13']) !!}
                {!!  Form::file('documents[document_attachment][]',['id'=>'documents[document_attachment][]','class'=>'form-control','placeholder'=>__('general.attach_document')]) !!}
            </td>
        </tr>
        <tr>
            <td>
                {!! Form::label('documents[document_description][]',__('general.document_description'),['class'=>'form-label fs-13']) !!}
                {!!  Form::textarea('documents[document_description][]',null,['id'=>'documents[document_description][]','class'=>'form-control',]) !!}
            </td>
        </tr>
        <tr>
            <td colspan="2" class="text-center">
                <a href="javascript:void(0);"
                   onclick="clone_table_body(this);"
                   class="btn btn-xs btn-info">
                    <i class="bx bx-plus"></i>
                </a>
                <a href="javascript:void(0);" tabindex="18"
                   onclick="remove_table_body(this);"
                   class="btn btn-xs btn-danger">
                    <i class="bx bx-minus"></i>
                </a>
            </td>
        </tr>
        </tbody>
</table>
