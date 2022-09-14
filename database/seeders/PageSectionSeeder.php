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
                'html' => '',
                'active' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ], [
                'order' => '5',
                'page_id' => '1',
                'html' => '',
                'active' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
    }
}
