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
                        @foreach(\App\Enum\AdminServiceEnum::getTranslationKeys() as $key=>$value)
                            <div class="col-md-3 col-lg-3 col-xl-3 col-xxl-3 text-center">
                                <a href="{{ route('register',[$key]) }}">
                                    <img src='{{ \App\Enum\AdminServiceEnum::getImage($key)  }}' class="w-100" alt="">
                                </a>
                                <a href="{{ route('register',[$key]) }}"
                                   class="my-3 btn btn-sm btn-info text-center">{{ $value }}</a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
