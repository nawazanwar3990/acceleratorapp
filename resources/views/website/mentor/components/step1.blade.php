<div class="row pt-4 justify-content-center">
    <div class="col-12">
        <div  class="row mb-3">
            @php $selected_services = array() @endphp
            @if(isset($model) AND count($model->services)>0)
                @foreach($model->services as $service)
                    @php  $selected_services[]=$service->id @endphp
                @endforeach
            @endif
            @foreach(\App\Services\ServiceData::get_mentor_services() as $service)
                <div class="col-xxl-4 col-lg-4 col-md-3 col-12">
                    <div class="form-check form-switch">
                        {!! Form::checkbox('services[]',$service->id,in_array($service->id,$selected_services)?true:false,['class'=>'form-check-input align-self-center']) !!}
                        <label class="form-check-label"> {{ $service->name }}</label>
                    </div>
                </div>
            @endforeach
        </div>
        @include('website.components.fields.other-services')
    </div>
</div>
