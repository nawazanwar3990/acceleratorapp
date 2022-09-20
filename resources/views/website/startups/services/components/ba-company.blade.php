@if(is_object($startup_services))
    @if(count($startup_services)>0)
        @foreach($startup_services as $service)

            <div class="col-lg-2 col-sm-4 mb-2">
                <div class="card p-2 rounded-3 card-shadow h-100">
                    <img class="card-img-adjust" src="https://taqadam.kaust.edu.sa/wp-content/uploads/2021/02/LOGOS8.png" alt="Card image cap">
                    <div class="card-body text-center">
                        <h6 class="card-title text-center fs-6">{{ $service->name }}</h6>
                        @if($service->slug =='incubator')
                            <a class="learn_more btn rounded-3" href="{{route('website.offices.index',$startup_id)}}">{{ trans('general.explore') }}</a>
                        @else
                            <a class="learn_more btn rounded-3 card-btn">{{ trans('general.explore') }}</a>
                        @endif
                    </div>
                </div>
            </div>

        @endforeach
    @endif
@endif
