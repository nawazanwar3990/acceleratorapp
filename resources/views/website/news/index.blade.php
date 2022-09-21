<x-page-layout
    :page="$page">
    <x-slot name="content">
        <section>
            <div class="">
                <div style="display: flex;flex-wrap: wrap">
                    <div class="col-md-3">
                        <div class="our-story wow fadeInUp" style="background: url({{ asset('uploads/blog_new1.jpeg') }}) no-repeat; background-position: center; background-size: cover;" data-wow-duration="0.5s" data-wow-delay="0.2s">
                            <div class="">
                                <div class="our-story-content1 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
                                    <div class="our-story-content-inner">
                                        <p>Who Will Be Our Next Hero? Applications Are Open Now for Business Accelerator Accelerator</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="our-story wow fadeInUp" style="background: url({{ asset('uploads/blog_new2.jpeg') }}) no-repeat; background-position: center; background-size: cover;" data-wow-duration="0.5s" data-wow-delay="0.2s">
                            <div class="">
                                <div class="our-story-content2 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
                                    <div class="our-story-content-inner">
                                        <p>Who Will Be Our Next Hero? Applications Are Open Now for Business Accelerator Accelerator</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="our-story wow fadeInUp" style="background: url({{ asset('uploads/blog_new3.jpeg') }}) no-repeat; background-position: center; background-size: cover;" data-wow-duration="0.5s" data-wow-delay="0.2s">
                            <div class="">
                                <div class="our-story-content3 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
                                    <div class="our-story-content-inner">
                                        <p>Business Accelerator Accelerator awards $1.1 million in funding to 11 startups at its startup showcase</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="our-story wow fadeInUp" style="background: url({{ asset('uploads/blog_new4.jpeg') }}) no-repeat; background-position: center; background-size: cover;" data-wow-duration="0.5s" data-wow-delay="0.2s">
                            <div class="">
                                <div class="our-story-content4 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
                                    <div class="our-story-content-inner">
                                        <p>Meet the startups at this year’s Business Accelerator Accelerator Showcase Accelerator Showcase</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="my-5 py-5 meet-startup-holder" style="background-image: url({{ asset('uploads/meet_back.webp') }})">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center py-3">
                        <input type="text" class="form-control form-control-desgin" placeholder="e.g event , meet up" />
                        <input type="button" class="btn mt-3 py-2 px-5" value="Search" />
                    </div>
                </div>
            </div>
        </section>
        <section class="my-5 py-5 about-us-holder">
            <div class="container-fluid">
                <div class="row">
                    <div class="container-fluid ">
                        <div class="row justify-content-center py-5" style="background-color: #dee2e6">
                            <div class="col-sm-4 text-end">
                                <img src="{{ asset('uploads/blog_new5.jpeg') }}" class="blog-image" alt="">
                            </div>
                            <div class="col-sm-5">
                                <h3 class="fw-bold blog-text"><a>Meet the heroes of tomorrow: how Business Accelerator played a role in the success of these growing startups</a></h3>
                                <p><span> 19 MAY 2022</span></p>
                                <p>
                                    As a new cohort of Business Accelerator founders and startups is about to begin, we spoke with some startup graduates to find out the impact Business Accelerator had on the growth and trajectory...
                                </p>
                            </div>
                        </div>
                        <div class="row justify-content-center mt-5">
                            <div class="col-sm-4 text-end">
                                <img src="{{ asset('uploads/blog_new6.jpeg') }}" class="blog-image" alt="">
                            </div>
                            <div class="col-sm-5">
                                <h3 class="fw-bold blog-text">
                                    <a>Who Will Be Our Next Hero? Applications Are Open Now for Business Accelerator Accelerator</a>
                                </h3>
                                <p><span> 18 APRIL 2022</span></p>
                                <p>
                                    “…heroes are the dreamers, those men and women who tried to make the world a better place than when they found it…” - George R.R. Martin Entrepreneurs are visionaries, dreamers...                </p>
                            </div>
                        </div>

                        <div class="row justify-content-center mt-5 py-5" style="background-color: #dee2e6">
                            <div class="col-sm-4 text-end">
                                <img src="{{ asset('uploads/blog_new7.jpg') }}" class="blog-image" alt="">
                            </div>
                            <div class="col-sm-5">
                                <h3 class="fw-bold blog-text">
                                    <a>Business Accelerator Accelerator awards $1.1 million in funding to 11 startups at its startup showcase</a>
                                </h3>
                                <p><span> 24 MARCH 2022</span></p>
                                <p>
                                    KAUST and partner Saudi British Bank (SABB) today previewed 23 startups—eight from Saudi Arabia and 15 international—and 58 founders during its annual Business Accelerator Startup Accelerator Showcase. Startups were selected from...              </div>
                        </div>
                    </div>
                </div>
            </div>


        </section>
    </x-slot>
</x-page-layout>
