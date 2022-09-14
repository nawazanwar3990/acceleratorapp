@if(is_object($startup_services))
    @if(count($startup_services)>0)
        @foreach($startup_services as $service)
            <div class="col-lg-2 col-md-2">
                <div class="card bg-transparent">
                    <img class="card-img-top" src="https://taqadam.kaust.edu.sa/wp-content/uploads/2021/02/LOGOS8.png"
                         alt="Card image cap">
                    <div class="card-body bg-transparent px-0 text-center">
                        <h6 class="card-title text-center">{{ $service->name }}</h6>
                        @if($service->slug =='incubator')
                            <a class="learn_more" href="{{route('website.offices.index',$startup_id)}}">{{ trans('general.explore') }}</a>
                        @else
                            <a class="learn_more">{{ trans('general.explore') }}</a>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    @endif
@endif
