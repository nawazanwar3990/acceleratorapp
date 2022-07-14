<div class="col-md-8 tell-us bg-white">
    <div class="">
        <div class="card-body">
            <div class="row">
                <div class="col-md-3 align-self-center">
                    <h3>
                        <b>Tell us who you are ! Explore top Services</b>
                    </h3>
                </div>
                <div class="col-md-9">
                    <div class="row">
                        @foreach(\App\Enum\AcceleratorServiceEnum::getTranslationKeys() as $key=>$value)
                            @php
                                $currentRoute = \App\Enum\AcceleratorServiceEnum::getRoute($key);
                                $currentRouteName = \App\Enum\AcceleratorServiceEnum::getRouteName($key);
                                $url = \Illuminate\Support\Facades\Route::getCurrentRoute()->getName();
                            @endphp
                            <div
                                class="col-md-4 col-lg-4 col-xl-4 col-xxl-4  text-center {{$currentRouteName== $url?'bg-success':''}}">
                                <a href="{{ route('register',[$key]) }}">
                                    <img src='{{ \App\Enum\AcceleratorServiceEnum::getImage($key)  }}' class="w-100" alt="">
                                </a>
                                <a href="{{ $currentRoute  }}"
                                   class="my-3 btn btn-sm btn-info text-center {{$currentRouteName== $url?'bg-white text-body':''}}">
                                    {{ $value }}
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
