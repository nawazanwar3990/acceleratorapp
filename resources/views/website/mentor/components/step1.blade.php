<div class="row pt-4 justify-content-center">
    <div class="col-12">
        @php $selected_services = array() @endphp
        @if(isset($model) AND count($model->services)>0)
            @foreach($model->services as $service)
                @php  $selected_services[]=$service->id @endphp
            @endforeach
        @endif
        @foreach(\App\Services\ServiceData::get_mentor_services() as $service)
            <div class="card mb-3">
                <div class="card-header">
                    <h6 class="card-title fw-bold mb-0">{{ $service->name }} Services</h6>
                </div>
                <div class="card-body row">
                    @foreach(\App\Services\ServiceData::get_mentor_child_services($service->id) as $child_service)
                        <div class="col-lg-4 mb-3">
                            <div class="form-check form-switch">
                                {!! Form::checkbox('services[]',$child_service->id,in_array($child_service->id,$selected_services)?true:false,['class'=>'form-check-input align-self-center']) !!}
                                <label class="form-check-label"> {{ $child_service->name }}</label>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
    @include('website.components.fields.other-services')
</div>
