<?php

namespace Database\Seeders\RealEstate;

use App\Enum\TableEnum;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommodityTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table(TableEnum::COMMODITY_TYPES)->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        DB::table(TableEnum::COMMODITY_TYPES)->insert([
            [
                'id' => 1,
                'name' => 'Fixed',
                'parent_id' => 0,
                'building_id' => 1,
            ],
            [
                'id' => 2,
                'name' => 'Movable',
                'parent_id' => 0,
                'building_id' => 1,
            ],
            [
                'id' => 3,
                'name' => 'Asset',
                'parent_id' => 0,
                'building_id' => 1,
            ],
            [
                'id' => 4,
                'name' => 'Plot',
                'parent_id' => 1,
                'building_id' => 1,
            ],
            [
                'id' => 5,
                'name' => 'Agricultural Land',
                'parent_id' => 1,
                'building_id' => 1,
            ],
            [
                'id' => 6,
                'name' => 'Car',
                'parent_id' => 2,
                'building_id' => 1,
            ],
            [
                'id' => 7,
                'name' => 'Bus',
                'parent_id' => 2,
                'building_id' => 1,
            ],
            [
                'id' => 8,
                'name' => 'Heavy Bike',
                'parent_id' => 2,
                'building_id' => 1,
            ],
            [
                'id' => 9,
                'name' => 'Gold',
                'parent_id' => 3,
                'building_id' => 1,
            ],
        ]);
    }
}
