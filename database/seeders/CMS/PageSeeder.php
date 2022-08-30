<?php

namespace Database\Seeders\CMS;

use App\Enum\TableEnum;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageSeeder extends Seeder
{
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table(TableEnum::CMS_PAGES)->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        DB::table(TableEnum::CMS_PAGES)->insert([
            [
                'layout_id' => '1',
                'name' => 'Home',
                'code' => 'home',
                'order' => '1',
                'page_title' => 'Analyze, Rate and score corporate suppliers at Scale.',
                'page_description' => 'For any type of businesses, services and companies.',
                'page_keyword' => '',
                'active' => true,
                'banner_image' => '/uploads/pages/default_banner.jpeg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'layout_id' => '2',
                'name' => 'About',
                'code' => 'about',
                'order' => '2',
                'page_title' => '',
                'page_description' => '',
                'page_keyword' => '',
                'active' => true,
                'banner_image' => '/uploads/pages/default_banner.jpeg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'layout_id' => '2',
                'name' => 'Our Startup',
                'code' => 'startup',
                'order' => '3',
                'page_title' => '',
                'page_description' => '',
                'page_keyword' => '',
                'active' => true,
                'banner_image' => '/uploads/pages/default_banner.jpeg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'layout_id' => '2',
                'name' => 'News',
                'code' => 'news',
                'order' => '4',
                'page_title' => '',
                'page_description' => '',
                'page_keyword' => '',
                'active' => true,
                'banner_image' => '/uploads/pages/default_banner.jpeg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'layout_id' => '2',
                'name' => 'Contact',
                'code' => 'contact',
                'order' => '3',
                'page_title' => '',
                'page_description' => '',
                'page_keyword' => '',
                'active' => true,
                'banner_image' => '/uploads/pages/default_banner.jpeg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'layout_id' => '2',
                'name' => 'Event',
                'code' => 'events',
                'order' => '4',
                'page_title' => '',
                'page_description' => '',
                'page_keyword' => '',
                'active' => true,
                'banner_image' => '/uploads/pages/default_banner.jpeg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
    }
}
