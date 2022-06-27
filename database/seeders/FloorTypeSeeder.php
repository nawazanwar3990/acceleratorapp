<?php

namespace Database\Seeders;

use App\Enum\TableEnum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FloorTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table(TableEnum::FLOOR_TYPES)->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        DB::table(TableEnum::FLOOR_TYPES)->insert([
            [
                'name' => 'Residential',
            ],
            [
                'name' => 'Commercial',
            ],
        ]);
    }
}
