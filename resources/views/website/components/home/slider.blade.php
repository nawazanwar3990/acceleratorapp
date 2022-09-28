@if(count($sliders)>0)
    <section>
        <header>
            <div class="owl-carousel testing_owl owl-theme">
                @foreach($sliders as $slider)
                    <div class="item">
                        <img src="{{ asset($slider->back_image) }}" alt="images not found">
                        <div class="cover">
                            <div class="container">
                                <div class="header-content">
                                    <div class="line"></div>
                                    <img src="{{asset($slider->front_image)}}" style="width: 100%;max-width: 200px" alt="">
                                    <h4>{{ $slider->description }}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </header>
    </section>
@endif
