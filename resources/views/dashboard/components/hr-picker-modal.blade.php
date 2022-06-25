<div class="modal hr-picker-modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">{{ __('general.hr_records') }}</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col">
                        <table id="hr-picker-table" class="table table-hover no-wrap border" style="width:100%">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>{{ __('general.picture') }}</th>
                                    <th>{{ __('general.id') }}</th>
                                    <th>{{ __('general.first_name') }}</th>
                                    <th>{{ __('general.middle_name') }}</th>
                                    <th>{{ __('general.last_name') }}</th>
                                    <th>{{ __('general.cnic') }}</th>
                                    <th>{{ __('general.cell') }}</th>
{{--                                    <th>{{ __('general.address') }}</th>--}}
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger waves-effect text-start text-white" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
