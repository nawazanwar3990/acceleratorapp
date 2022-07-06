<?php

namespace Database\Seeders;

use App\Enum\DurationEnum;
use App\Enum\TableEnum;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BuildingSeeder extends Seeder
{
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table(TableEnum::BUILDINGS)->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        DB::table(TableEnum::BUILDINGS)->insert([
            array('name' => 'Test Building', 'area' => '276', 'length' => '12', 'width' => '23', 'building_corners' => '5', 'building_type' => '1', 'entry_gates' => '7', 'property_type' => '1', 'no_of_floors' => '1', 'facing' => '5', 'price' => '12', 'status' => '0', 'latitude' => '12', 'longitude' => '12', 'd1' => NULL, 'd2' => NULL, 'd3' => NULL, 'd4' => NULL, 'd5' => NULL, 'd6' => NULL, 'street1' => NULL, 'street2' => NULL, 'street3' => NULL, 'street4' => NULL, 'street5' => NULL, 'street6' => NULL, 'x1' => NULL, 'x2' => NULL, 'x3' => NULL, 'x4' => NULL, 'x5' => NULL, 'x6' => NULL, 'y1' => NULL, 'y2' => NULL, 'y3' => NULL, 'y4' => NULL, 'y5' => NULL, 'y6' => NULL, 'created_by' => '2', 'updated_by' => NULL, 'deleted_by' => NULL, 'deleted_at' => NULL, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now())
        ]);

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table(TableEnum::BUILDING_SERVICE)->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        DB::table(TableEnum::BUILDING_SERVICE)->insert([
            array('id' => '1', 'building_id' => '1', 'service_id' => '1', 'type' => 'general_service', 'price' => '2', 'created_by' => '2', 'updated_by' => NULL, 'deleted_by' => NULL, 'deleted_at' => NULL, 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()),
            array('id' => '2', 'building_id' => '1', 'service_id' => '2', 'type' => 'general_service', 'price' => '4', 'created_by' => '2', 'updated_by' => NULL, 'deleted_by' => NULL, 'deleted_at' => NULL, 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()),
            array('id' => '3', 'building_id' => '1', 'service_id' => '4', 'type' => 'security_service', 'price' => '5', 'created_by' => '2', 'updated_by' => NULL, 'deleted_by' => NULL, 'deleted_at' => NULL, 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()),
            array('id' => '4', 'building_id' => '1', 'service_id' => '5', 'type' => 'security_service', 'price' => '4', 'created_by' => '2', 'updated_by' => NULL, 'deleted_by' => NULL, 'deleted_at' => NULL, 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now())
        ]);
    }
}
