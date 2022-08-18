<div class="modal" id="service-model-{{$id}}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">{{ trans('general.services') }}</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                @if($record->payment_process==\App\Enum\PaymentTypeProcessEnum::PRE_PAYMENT)
                    @if($record->services)
                        <div class="card mb-0" style="border-top: none;">
                            <div class="card-body">
                                <ul class="list-group list-group-flush">
                                    @foreach($record->services as $service)
                                        <li class="list-group-item">
                                            {{ $service->name }}
                                        </li>
                                    @endforeach
                                </ul>
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
                                <ul class="list-group list-group-flush">
                                    @foreach($record->other_services as $service)
                                        <li class="list-group-item">{{ $service->service_name }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endif
                @else
                    @isset($record->user->subscription->package->services)
                        <div class="card mb-0" style="border-top: none;">
                            <div class="card-body">
                                <ul class="list-group list-group-flush">
                                    @foreach($record->user->subscription->package->services as $service)
                                        <li class="list-group-item">
                                            {{ $service->name }} <span class="btn btn-sm btn-info pull-right">{{ $service->pivot->limit }}</span>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @else
                        {{ trans('general.no_record_found') }}
                    @endisset
                @endif
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
