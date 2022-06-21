<?php

namespace Database\Seeders\RealEstate;

use App\Enum\TableEnum;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BuildingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table(TableEnum::BUILDINGS)->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        DB::table(TableEnum::BUILDINGS)->insert([
            [
                'name' => 'Misaq Emporium',
                'length' => '100',
                'width' => '100',
                'area' => '10000',
                'building_type' => '2',
                'no_of_floors' => '5',
                'building_corners' => '4',
                'entry_gates' => '2',
                'property_type' => '2',
                'facing' => '1',
                'general_services' => '["2"]',
                'security_services' => '["5"]',
                'business_id' => 1,
            ]
        ]);
    }
}
