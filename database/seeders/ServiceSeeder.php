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
                'type' => 'general_service',
                'status' => true,
            ],
            [
                'name' => 'Electricity',
                'type' => 'general_service',
                'status' => true,
            ],
            [
                'name' => 'Water',
                'type' => 'general_service',
                'status' => true,
            ],
            [
                'name' => 'Smoke Sensor',
                'type' => 'security_service',
                'status' => true,
            ],
            [
                'name' => 'Fire Alarm',
                'type' => 'security_service',
                'status' => true,
            ],
            [
                'name' => 'Lift',
                'type' => 'general_service',
                'status' => true,
            ],
        ]);
    }
}
