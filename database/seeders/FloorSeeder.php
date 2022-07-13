<?php

namespace Database\Seeders;

use App\Enum\DurationEnum;
use App\Enum\TableEnum;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FloorSeeder extends Seeder
{
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table(TableEnum::FLOORS)->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        DB::table(TableEnum::FLOORS)->insert([
            array('building_id' => '1', 'type_id' => '2', 'name' => 'First Floor', 'number' => '001', 'length' => '12', 'width' => '12', 'area' => '144', 'height' => '12', 'no_of_offices' => '1', 'created_by' => '2', 'updated_by' => NULL, 'deleted_by' => NULL, 'deleted_at' => NULL, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now())
        ]);

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table(TableEnum::FLOOR_OWNER)->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        DB::table(TableEnum::FLOOR_OWNER)->insert([
            array('id' => '1', 'floor_id' => '1', 'hr_id' => '2','created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
        ]);
    }
}
