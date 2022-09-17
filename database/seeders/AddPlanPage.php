<?php

namespace Database\Seeders;

use App\Enum\TableEnum;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddPlanPage extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table(TableEnum::CMS_PAGES)->insert([
            [
                'layout_id' => '2',
                'name' => 'Plan',
                'code' => 'plan',
                'order' => '1',
                'page_title' => 'Plans',
                'page_description' => 'Plans',
                'page_keyword' => '',
                'active' => true,
                'banner_image' => '/uploads/plan-page-banner.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ]);
    }
}
