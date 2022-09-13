<x-home-layout
    :page="$page">
    <x-slot name="content">
        {{-- @if(count($page->sections)>0)
             @foreach($page->sections as $section)
                 {!! $section->html !!}
             @endforeach
         @endif--}}
        <section class="my-5 py-5 about-us-holder" style="background-image: url('/uploads/about_background.webp')">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-9 col-xxl-9">
                        <iframe width="800" height="400" src="https://www.youtube.com/embed/y881t8ilMyc" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </section>
        <section class="my-5 py-5 we-offer-holder" style="background-image: url('/uploads/offer_bg.webp')">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center pb-3">
                        <h1>What We Offer</h1>
                        <h6>Build, launch and scale your startup with TAQADAM</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <img class="card-img-top img-responsive" src="/icons/ba.webp"
                                 alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title text-primary">Business Accelerator</h4>
                                <p class="card-text text-white text-center fw-bold">Each startup gets access to one-to-one sessions with a diverse pool of expert mentors.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <img class="card-img-top img-responsive" src="/icons/ba.webp"
                                 alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title text-danger">Freelancer</h4>
                                <p class="card-text text-white text-center fw-bold">Each startup gets access to one-to-one sessions with a diverse pool of expert mentors.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <img class="card-img-top img-responsive" src="/icons/ba.webp"
                                 alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title text-success">Service Provider</h4>
                                <p class="card-text text-white text-center fw-bold">Each startup gets access to one-to-one sessions with a diverse pool of expert mentors.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <img class="card-img-top img-responsive" src="/icons/ba.webp"
                                 alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title text-info">Mentor</h4>
                                <p class="card-text text-white text-center fw-bold">Each startup gets access to one-to-one sessions with a diverse pool of expert mentors.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="my-5 py-5 we-offer-holder" style="background-image: url('/uploads/offer_bg.webp')">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center pb-3">
                        <h1>What We Offer</h1>
                        <h6>Build, launch and scale your startup with TAQADAM</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <img class="card-img-top img-responsive" src="/icons/ba.webp"
                                 alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title text-primary">Business Accelerator</h4>
                                <p class="card-text text-white text-center fw-bold">Each startup gets access to one-to-one sessions with a diverse pool of expert mentors.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <img class="card-img-top img-responsive" src="/icons/ba.webp"
                                 alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title text-danger">Freelancer</h4>
                                <p class="card-text text-white text-center fw-bold">Each startup gets access to one-to-one sessions with a diverse pool of expert mentors.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <img class="card-img-top img-responsive" src="/icons/ba.webp"
                                 alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title text-success">Service Provider</h4>
                                <p class="card-text text-white text-center fw-bold">Each startup gets access to one-to-one sessions with a diverse pool of expert mentors.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <img class="card-img-top img-responsive" src="/icons/ba.webp"
                                 alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title text-info">Mentor</h4>
                                <p class="card-text text-white text-center fw-bold">Each startup gets access to one-to-one sessions with a diverse pool of expert mentors.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </x-slot>
</x-home-layout>
