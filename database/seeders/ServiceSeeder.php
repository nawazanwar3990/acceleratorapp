<?php

namespace Database\Seeders;

use App\Enum\TableEnum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table(TableEnum::SERVICES)->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        DB::table(TableEnum::SERVICES)->insert([
            [
                'name' => 'Gas',
                'type' => '1',
                'status' => true,
            ],
            [
                'name' => 'Electricity',
                'type' => '1',
                'status' => true,
            ],
            [
                'name' => 'Water',
                'type' => '1',
                'status' => true,
            ],
            [
                'name' => 'Smoke Sensor',
                'type' => '2',
                'status' => true,
            ],
            [
                'name' => 'Fire Alarm',
                'type' => '2',
                'status' => true,
            ],
            [
                'name' => 'Lift',
                'type' => '1',
                'status' => true,
            ],
        ]);
    }
}
