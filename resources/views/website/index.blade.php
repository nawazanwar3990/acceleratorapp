<x-home-layout
    :page="$page">
    <x-slot name="content">
        @if(count($page->sections)>0)
            @foreach($page->sections as $section)
                {!! $section->html !!}
            @endforeach
        @endif
        <section class="my-5 py-5 meet-startup-holder" style="background-image: url('/uploads/meet_back.webp')">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-6 text-center pb-3">
                        <h1 class="mb-4">Meet The Startups</h1>
                        <h6 class="pt-4">Since its launch in 2016, more than 130 startups have graduated from TAQADAM.
                            During that
                            time, TAQADAM funded more than $10 million in non-dilutive funding to startup founders.
                            Learn more about our dynamic community</h6>
                    </div>
                </div>
            </div>
        </section>

        <section class="my-5 py-5 counter-back-holder" style="background-image: url('/uploads/counter_back.webp')">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-3 text-center pb-3">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title green-box text-white">130+</h4>
                                <p class="card-text text-green">Startups <br>Graduates</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 text-center pb-3">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title cayan-box text-white">500+</h4>
                                <p class="card-text text-cayan">Entrepreneurs <br>supported</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 text-center pb-3">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title yellow-box text-white">8500+</h4>
                                <p class="card-text text-yellow">Showcase <br>Attendees</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 text-center pb-3">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title text-white orange-box">800+</h4>
                                <p class="card-text text-orange">Jobs <br>Created</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </x-slot>
</x-home-layout>
