<div class="col-md-8 tell-us bg-white">
    <div class="">
        <div class="card-body">
            <div class="row justify-content-center">
                @foreach(\App\Enum\RegisterTypeEnum::getTranslationKeys() as $key=>$value)
                    <div class="col-md-3 col-lg-3 col-xl-3 col-xxl-3  text-center align-self-center">
                        @if($key==\App\Enum\RegisterTypeEnum::BUSINESS_ACCELERATOR)
                            <a onclick="choose_register_type('ba');" class="mt-4 cursor-pointer">
                                <img src='{{ \App\Enum\RegisterTypeEnum::getImage($key)  }}' class="w-50 mb-2 pb-2"
                                     alt="{{$value}}">
                            </a>
                        @elseif($key==\App\Enum\RegisterTypeEnum::FREELANCER_SERVICE_PROVIDER_COMPANY)
                            <a onclick="choose_register_type('customers');" class="mt-4 cursor-pointer">
                                <img src='{{ \App\Enum\RegisterTypeEnum::getImage($key)  }}' class="w-50 mb-2 pb-2"
                                     alt="{{$value}}">
                            </a>
                        @elseif($key==\App\Enum\RegisterTypeEnum::MENTOR)
                            <a onclick=" apply_payment('mentors');" class="mt-4 cursor-pointer">
                                <img src='{{ \App\Enum\RegisterTypeEnum::getImage($key)  }}' class="w-50 mb-2 pb-2"
                                     alt="{{$value}}">
                            </a>
                        @elseif($key==\App\Enum\RegisterTypeEnum::CUSTOMER)
                            <a onclick="" class="mt-4 cursor-pointer">
                                <img src='{{ \App\Enum\RegisterTypeEnum::getImage($key)  }}' class="w-50 mb-2 pb-2"
                                     alt="{{$value}}">
                            </a>
                        @endif
                        <br>
                        @if($key==\App\Enum\RegisterTypeEnum::BUSINESS_ACCELERATOR)
                            <a onclick="choose_register_type('ba');" class="mt-4 cursor-pointer">{{ $value }}</a>
                        @elseif($key==\App\Enum\RegisterTypeEnum::FREELANCER_SERVICE_PROVIDER_COMPANY)
                            <a onclick="choose_register_type('freelancers');" class="mt-4 cursor-pointer">{{ $value }}</a>
                        @elseif($key==\App\Enum\RegisterTypeEnum::MENTOR)
                            <a onclick="apply_payment('mentors');" class="mt-4 cursor-pointer">{{ $value }}</a>
                        @elseif($key==\App\Enum\RegisterTypeEnum::CUSTOMER)
                                <a href="{{ route('website.customers.create') }}" class="mt-4 cursor-pointer">{{ $value }}</a>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
