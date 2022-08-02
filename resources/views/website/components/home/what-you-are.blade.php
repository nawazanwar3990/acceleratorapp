<div class="col-md-8 tell-us bg-white">
    <div class="">
        <div class="card-body">
            <div class="row justify-content-center">
                @foreach(\App\Enum\RegisterTypeEnum::getTranslationKeys() as $key=>$value)
                    <div class="col-md-3 col-lg-3 col-xl-3 col-xxl-3  text-center align-self-center">
                        <img src='{{ \App\Enum\RegisterTypeEnum::getImage($key)  }}' class="w-50 mb-2 pb-2" alt="{{$value}}"><br>
                        <a href="{{ \App\Enum\RegisterTypeEnum::getRoute($key)  }}" class="mt-4">
                            {{ $value }}
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
