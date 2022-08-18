<div class="modal" id="service-model-{{$id}}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">{{ trans('general.services') }}</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                @if($record->services)
                    <div class="card mb-0" style="border-top: none;">
                        <div class="card-header">
                            <h6 class="card-title mb-0">Package Services</h6>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                @foreach($record->services as $service)
                                    <div class="col-4">
                                        <p class="my-1">{{ $service->name }}</p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @else
                    {{ trans('general.no_record_found') }}
                @endif
                @if($record->other_services)
                    <div class="card" style="border-top: none;">
                        <div class="card-header">
                            <h6 class="card-title mb-0">Other Services</h6>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                @foreach($record->other_services as $service)
                                    <div class="col-4">
                                        <p class="my-1">{{ $service->pivot->name }}</p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endif
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
