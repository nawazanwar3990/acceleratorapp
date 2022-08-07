<div class="modal" id="service-model-{{$id}}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">{{ trans('general.services') }}</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <ul class="list-group list-group-flush">
                    @foreach($record->services as $service_key=>$service_value)
                        <li class="list-group-item">
                            <span class="text-muted fs-13">{{ ($service_key)=='∞'?'Unlimited':$service_key }}</span> <span class="fw-bold">{{ str_replace('_',' ',$service_value) }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
