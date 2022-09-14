<div class="col-12 mb-3 px-4">
    <table class="table table-bordered  table-sm">
        <thead>
        <tr>
            <th class="fs-13">{{__('general.affiliated_by')}}</th>
            <th class="fs-13">{{__('general.affiliation_detail')}}</th>
            <th class="fs-13">{{__('general.affiliation_certificate')}}</th>
            <th class="fs-13">{{__('general.action')}}</th>
        </tr>
        </thead>
        @if($model->affiliations AND count($model->affiliations)>0)
            @foreach($model->affiliations as $affiliation)
                <tbody>
                <tr>
                    <td>
                        {!!  Form::text('affiliations[affiliated_by][]',$affiliation['affiliated_by'],['id'=>'affiliations[affiliated_by][]','class'=>'form-control form-control-sm','autocomplete'=>'off']) !!}
                    </td>
                    <td>
                        {!!  Form::text('affiliations[affiliation_detail][]',$affiliation['affiliation_detail'],['id'=>'affiliations[affiliation_detail][]','class'=>'form-control form-control-sm','autocomplete'=>'off']) !!}
                    </td>
                    <td>
                        {!! Form::file('affiliations[affiliation_certificate][]',['id'=>'affiliations[affiliation_certificate][]','class'=>'form-control form-control-sm']) !!}
                        <a href="{{ asset($affiliation['affiliation_certificate']) }}" class="fs-13 text-info text-center view_image" download>{{ trans('general.view_file') }}</a>
                    </td>
                    <td style="width: 100px;vertical-align: middle;" class="text-center">
                        <a href="javascript:void(0);"
                           onclick="clone_row(this);"
                           class="btn  btn-primary site-first-btn-color btn-sm">
                            <i class="bx bx-plus"></i>
                        </a>
                        <a href="javascript:void(0);" tabindex="18"
                           onclick="remove_clone_row(this);"
                           class="btn  btn-primary site-first-btn-color btn-sm">
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
                    {!!  Form::text('affiliations[affiliated_by][]',null,['id'=>'affiliations[affiliated_by][]','class'=>'form-control form-control-sm','autocomplete'=>'off']) !!}
                </td>
                <td>
                    {!!  Form::text('affiliations[affiliation_detail][]',null,['id'=>'affiliations[affiliation_detail][]','class'=>'form-control form-control-sm','autocomplete'=>'off']) !!}
                </td>
                <td>
                    {!! Form::file('affiliations[affiliation_certificate][]',['id'=>'affiliations[affiliation_certificate][]','class'=>'form-control form-control-sm']) !!}
                </td>
                <td style="width: 100px;vertical-align: middle;" class="text-center">
                    <a href="javascript:void(0);"
                       onclick="clone_row(this);"
                       class="btn  btn-primary site-first-btn-color btn-sm">
                        <i class="bx bx-plus"></i>
                    </a>
                    <a href="javascript:void(0);" tabindex="18"
                       onclick="remove_clone_row(this);"
                       class="btn  btn-primary site-first-btn-color btn-sm">
                        <i class="bx bx-minus"></i>
                    </a>
                </td>
            </tr>
            </tbody>
        @endif
    </table>
</div>
