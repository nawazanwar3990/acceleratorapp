<?php

namespace Database\Seeders\CMS;

use App\Enum\TableEnum;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomePageSectionsSeeder extends Seeder
{
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table(TableEnum::CMS_SECTIONS)->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        DB::table(TableEnum::CMS_SECTIONS)->insert([
            [
                'order' => '1',
                'page_id' => '1',
                'html' => '<div class=hero-body id=main-hero><div class=container><div class="columns is-vcentered"><div class="column is-6 is-centered-mobile is-centered-tablet-portrait is-offset-6"><h1 class="light-text is-smaller parallax-hero-title">Analyze, rate and score corporate suppliers at scale.</h1><h2 class="light-text is-5 mt-4 no-padding subtitle">For any type of businesses, services and companies.</h2><br><p class="buttons is-flex-center-mobile"><a class="btn-align button button-cta z-index-2 primary-btn scroll-link"href=#start>Get Started </a><a class="btn-align button button-cta z-index-2"href=#>Learn More</a></div></div></div></div>',
                'active' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
    }
}
