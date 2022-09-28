<section class="my-5 py-5 industries-holder">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6 text-center pb-3">
                <h1 class="mb-4 who-are-you">Descriptive Industries</h1>
                <h6 class="pt-4 h6-text">We are industry agnostic – supporting startups from all industries and
                    at all stages.</h6>
            </div>
        </div>
        <div class="row">
            @if(count($industries)>0)
                @foreach($industries as $industry)
                    <div class="col-lg-3 col-md-6 position-relative"
                         style="background: url('{{ asset($industry->back_image) }}');">
                        <div class="position-absolute"><img src="{{ asset($industry->front_image) }}" alt=""/>
                            <h4>{{ $industry->heading }}</h4>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</section>
