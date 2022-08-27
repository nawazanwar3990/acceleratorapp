<div class="row justify-content-center">
    <div class="mb-3 col-6">
        {!!  Html::decode(Form::label('page_id' ,__('general.page_id'),['class'=>'col-form-label']))   !!}
        {!! Form::select('page_id',\App\Services\CMS\PageService::pluckPages(),request()->query('page_id'), ['class' => 'form-control', 'autofocus', 'id' => 'page_id','placeholder'=>'Select Page','required']) !!}
    </div>
</div>
<table class="table table-bordered">
    @if(is_object($records) AND count($records)>0)
        @foreach($records as $key=>$record)
            <tbody>
            <tr>
                <td style="vertical-align: middle">
                    {!!  Html::decode(Form::label('order[]' ,__('general.order'),['class'=>'col-form-label']))   !!}
                    {!! Form::number('order[]',$record->order, ['class' => 'form-control', 'autofocus', 'id' => 'order' ]) !!}
                </td>
                <td>
                    {!!  Html::decode(Form::label('html[]' ,__('general.html'),['class'=>'col-form-label']))   !!}
                    {!! Form::textarea('html[]',$record->html, ['class' => 'form-control section_tiny', 'autofocus','rows'=>'2']) !!}
                </td>
            </tr>
            <tr>
                <td colspan="2" class="text-center">
                    @if($loop->last)
                        <a href="javascript:void(0);"
                           onclick="clone_section_tiny(this);"
                           class="btn btn-xs btn-info cloneMe">
                            <i class="bx bx-plus"></i>
                        </a>
                    @endif
                    <a href="javascript:void(0);" tabindex="18"
                       onclick="remove_section_tiny(this);"
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
            <td style="vertical-align: middle">
                {!!  Html::decode(Form::label('order[0]' ,__('general.order'),['class'=>'col-form-label']))   !!}
                {!! Form::number('order[0]',1, ['class' => 'form-control', 'autofocus', 'id' => 'order' ]) !!}
            </td>
            <td>
                {!!  Html::decode(Form::label('html[]' ,__('general.html'),['class'=>'col-form-label']))   !!}
                {!! Form::textarea('html[]',null, ['class' => 'form-control section_tiny', 'autofocus','rows'=>'2']) !!}
            </td>
        </tr>
        <tr>
            <td colspan="2" class="text-center">
                <a href="javascript:void(0);"
                   onclick="clone_section_tiny(this);"
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
    @endif
</table>
