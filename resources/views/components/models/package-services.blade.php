<div class="modal" id="service-model-{{$id}}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">{{ trans('general.services') }}</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <ul class="list-group list-group-flush">
                    @foreach($record->services as $service)
                        <li class="list-group-item">
                            <span class="fw-bold">{{ $service->name }}</span> <span class="text-muted fs-13 pull-right">
                                @if($service->slug=='incubator')
                                    <strong> {{ ($service->pivot->building_limit)=='∞'?'Unlimited':$service->pivot->building_limit }}</strong> {{ trans('general.buildings') }}
                                    <br>
                                    <strong> {{ ($service->pivot->floor_limit)=='∞'?'Unlimited':$service->pivot->floor_limit }}</strong> {{ trans('general.floors') }}
                                    <br>
                                    <strong> {{ ($service->pivot->office_limit)=='∞'?'Unlimited':$service->pivot->office_limit }}</strong> {{ trans('general.offices') }}
                                    <br>
                                @else
                                    {{ ($service->pivot->limit)=='∞'?'Unlimited':$service->pivot->limit }}
                                @endif
                            </span>
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
