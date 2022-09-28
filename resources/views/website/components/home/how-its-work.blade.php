<section class="my-5 py-5 how-its-work-holder" style="">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center pb-3">
                <h1>How It Works</h1>
            </div>
        </div>
        <div class="row mt-4">
            @if(count($works)>0)
                @foreach($works as $work)
                    <div class="col-lg-3 col-md-6 ">
                        <div class="card h-100" style="box-shadow: #b4b4b4 1px 1.7px 5.8px;">
                            <div class="card-header mb-2">
                                <h4 class="card-title HIW"><span class="steps">1</span></h4>
                            </div>
                            <img src="{{ asset($work->image) }}" alt="Card image cap"
                                 width="150" height="150"/>
                            <div class="card-body text-center">
                                <h6 class="steps-heading">{{$work->heading}}</h6>
                                <p class="steps-desc">{{$work->description}}.</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</section>
