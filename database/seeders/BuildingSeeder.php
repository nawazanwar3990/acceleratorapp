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
            array(
                'name' => 'Test Building',
                'area' => '144',
                'length' => '12',
                'width' => '12',
                'building_type' => '1',
                'entry_gates' => '7',
                'no_of_floors' => '1',
                'facing' => '5',
                'created_by' => '2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            )
        ]);

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table(TableEnum::BUILDING_OWNER)->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        DB::table(TableEnum::BUILDING_OWNER)->insert([
            array('id' => '1',
                'building_id' => '1',
                'hr_id' => '2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()),
        ]);
    }
}
