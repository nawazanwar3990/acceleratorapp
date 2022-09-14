<?php

namespace Database\Seeders;

use App\Enum\TableEnum;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table(TableEnum::CMS_SECTIONS)->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        DB::table(TableEnum::CMS_SECTIONS)->insert([
            [
                'order' => '1',
                'page_id' => '1',
                'html' => '<section class="my-5 py-5 about-us-holder" style="background-image: url(/uploads/about_background.webp)">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-9 col-xxl-9">
                        <iframe width="800" height="400" src="https://www.youtube.com/embed/y881t8ilMyc" frameborder="0"
                                allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </section>',
                'active' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ], [
                'order' => '2',
                'page_id' => '1',
                'html' => ' <section class="my-5 py-5 we-offer-holder" style="background-image: url(/uploads/offer_bg.webp)">
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
                                <p class="card-text text-white text-center fw-bold">Each startup gets access to
                                    one-to-one sessions with a diverse pool of expert mentors.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <img class="card-img-top img-responsive" src="/icons/ba.webp"
                                 alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title text-danger">Freelancer</h4>
                                <p class="card-text text-white text-center fw-bold">Each startup gets access to
                                    one-to-one sessions with a diverse pool of expert mentors.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <img class="card-img-top img-responsive" src="/icons/ba.webp"
                                 alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title text-success">Service Provider</h4>
                                <p class="card-text text-white text-center fw-bold">Each startup gets access to
                                    one-to-one sessions with a diverse pool of expert mentors.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <img class="card-img-top img-responsive" src="/icons/ba.webp"
                                 alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title text-info">Mentor</h4>
                                <p class="card-text text-white text-center fw-bold">Each startup gets access to
                                    one-to-one sessions with a diverse pool of expert mentors.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>',
                'active' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ], [
                'order' => '3',
                'page_id' => '1',
                'html' => ' <section class="my-5 py-5 how-its-work-holder" style="background-image: url(/uploads/back_how_it_works.webp)">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center pb-3">
                        <h1>How It Works</h1>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <img class="card-img-top img-responsive" src="/uploads/apply_now.webp"
                                 alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title text-primary">Applications</h4>
                                <p class="card-text text-center fw-bold">Applications close date May 21, 2022</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <img class="card-img-top img-responsive" src="/uploads/accelerator.webp"
                                 alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title text-danger">Bootcamp</h4>
                                <p class="card-text text-center fw-bold">Applications close date May 21, 2022</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <img class="card-img-top img-responsive" src="/uploads/growth.webp"
                                 alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title text-success">Accelerator</h4>
                                <p class="card-text text-center fw-bold">Applications close date May 21, 2022</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <img class="card-img-top img-responsive" src="/uploads/showcase.webp"
                                 alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title text-info">Showcase</h4>
                                <p class="card-text text-center fw-bold">Applications close date May 21, 2022</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>',
                'active' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ], [
                'order' => '4',
                'page_id' => '1',
                'html' => ' <section class="my-5 py-5 meet-startup-holder" style="background-image: url(/uploads/meet_back.webp)">
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
        </section>',
                'active' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ], [
                'order' => '5',
                'page_id' => '1',
                'html' => ' <section class="my-5 py-5 counter-back-holder" style="background-image: url(/uploads/counter_back.webp)">
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
        </section>',
                'active' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'order' => '5',
                'page_id' => '1',
                'html' => '  <section class="my-5 py-5 industries-holder">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-6 text-center pb-3">
                            <h1 class="mb-4">Disruptive Industries</h1>
                            <h6 class="pt-4">We are industry agnostic – supporting startups from all industries and at all stages.</h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 position-relative" style="background: url(/uploads/mobilityy.jpg);">
                            <div class="position-absolute">
                                <img src="/uploads/Asset-12.webp" alt="">
                                <h4>Mobality</h4>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 position-relative" style="background: url(/uploads/energy.jpg);">
                            <div class="position-absolute">
                                <img src="/uploads/Asset-15.webp" alt="">
                                <h4>Energy</h4>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 position-relative" style="background: url(/uploads/logistics.jpg);">
                            <div class="position-absolute">
                                <img src="/uploads/Asset-10.webp" alt="">
                                <h4>Logistics</h4>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 position-relative" style="background: url(/uploads/WATER-1.webp);">
                            <div class="position-absolute">
                                <img src="/uploads/Asset-9.webp" alt="">
                                <h4>Water</h4>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 position-relative" style="background: url(/uploads/DIGITAL-1.webp);">
                            <div class="position-absolute">
                                <img src="/uploads/Asset-14.webp" alt="">
                                <h4>Digital</h4>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 position-relative" style="background: url(/uploads/FINTECH.webp);">
                            <div class="position-absolute">
                                <img src="/uploads/Asset-16.webp" alt="">
                                <h4>FIN-Teach</h4>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 position-relative" style="background: url(/uploads/CYBER.webp);">
                            <div class="position-absolute">
                                <img src="/uploads/Asset-13.webp" alt="">
                                <h4>cyber security</h4>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 position-relative" style="background: url(/uploads/HEALTH.webp);">
                            <div class="position-absolute">
                                <img src="/uploads/Asset-11.webp" alt="">
                                <h4>health</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </section>',
                'active' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
    }
}
