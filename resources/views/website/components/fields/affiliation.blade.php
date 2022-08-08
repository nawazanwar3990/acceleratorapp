<div class="col-12 mb-3 px-4 py-2">
    <table class="table table-bordered  table-sm">
        <thead>
        <tr>
            <th class="fs-13">{{__('general.affiliated_by')}}</th>
            <th class="fs-13">{{__('general.affiliation_detail')}}</th>
            <th class="fs-13">{{__('general.affiliation_certificate')}}</th>
            <th class="fs-13">{{__('general.action')}}</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>
                {!!  Form::text('affiliation[affiliated_by]',null,['id'=>'affiliation[affiliated_by]','class'=>'form-control form-control-sm','autocomplete'=>'off']) !!}
            </td>
            <td>
                {!!  Form::text('affiliation[affiliation_detail]',null,['id'=>'affiliation[affiliation_detail]','class'=>'form-control form-control-sm','autocomplete'=>'off']) !!}
            </td>
            <td>
                {!! Form::file('affiliation[affiliation_certificate]',['id'=>'affiliation[affiliation_certificate]','class'=>'form-control form-control-sm','placeholder'=>'Attach Document']) !!}
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
    </table>
</div>
